<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Promotion;
use App\PromotionSchedule;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Carbon;
class cronPromotion extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:promotion';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        try {
            $html = file_get_html('https://ifind.vn/danh-muc/am-thuc.1.html');
                //echo $html;
            $href = $html->find('ul#dealList', 0);
            $count_promotion = 0;
            foreach ($html->find('ul#dealList li div.contain a') as $key => $element) {
                $website = 'ifind.vn';
               //echo '<a href="https://ifind.vn' . $element->href . '">' . $element->href . '</a><br>';
                $html2 = file_get_html('https://ifind.vn' . $element->href);
                
                $parsed = $this->get_string_between($html2, 'var data = ', '</script>');
                if ($parsed == '') {
                    continue;
                }
                $content = json_decode($parsed, true);

                //dd($content['deal']['data']);

                $deal_id = $content['deal']['data']['deal_id'];

                $data_old = Promotion::wherewebsite($website)
                ->wheredeal_id($deal_id)
                ->first();
                if ($data_old) {
                    continue;
                }
                //echo $promotion_id. '<br>';
                
                $title = $content['deal']['data']['deal_title'];

                $date_end = $content['deal']['data']['date_end'];
                $date_end = substr($date_end, 0, -3);
                // // dd($date_end);

                $image_url = $content['deal']['data']['deal_image_url'];
                //echo ($image);
                try {
                    $fImage = $image_url;
                    $image_name = time() . uniqid('img_') . '.jpg';

                    $this->imagecrop(250, 160, 'uploads/promotion/cuisine/', $fImage, $image_name);

                    $image_path = 'uploads/promotion/cuisine/' . $image_name;
                } catch (\Exception $e) {
                    $image_path = 'public/images/promotion.jpg';
                }
                //echo $image_path;

                $description = $content['deal']['data']['deal_full_description'];

                //dd($description);
                $discount = $content['deal']['data']['deal_name'];

                $promotion_url = $content['deal']['data']['source_url'];
                
                $store_address = $content['deal']['data']['deal_stores']['list_areas'][0]['list_stores'][0]['store_address'];

                $store_location_lat = $content['deal']['data']['deal_stores']['list_areas'][0]['list_stores'][0]['store_location_lat'];

                $store_location_lng = $content['deal']['data']['deal_stores']['list_areas'][0]['list_stores'][0]['store_location_lng'];

                Promotion::create([
                    'website'            => 'ifind.vn',
                    'deal_id'            => $deal_id,
                    'type'               => 'cuisine',
                    'code'               => uniqid('code'),
                    'title'              => $title,
                    'discount'           => $discount,
                    'store_address'      => $store_address,
                    'store_location_lat' => $store_location_lat,
                    'store_location_lng' => $store_location_lng,
                    'date_end'           => $date_end,
                    'description'        => $description,
                    'promotion_url'      => $promotion_url,
                    'image_path'         => $image_path,
                    'action'             => 1
                ]);
                $count_promotion = $count_promotion + 1;
            }
            PromotionSchedule::create([
                'message' => 'Đã thêm ' . $count_promotion . ' địa điểm vào thời gian: '. Carbon\Carbon::now()
            ]);

        } catch (\Exception $e) {
            PromotionSchedule::create([
                'message' => 'Đã xảy ra lỗi vào thời gian: '. Carbon\Carbon::now()
            ]);
        }
    }

    public function get_string_between($string, $start, $end){
        $string = ' ' . $string;
        $ini = strpos($string, $start);
        if ($ini == 0) return '';
        $ini += strlen($start);
        $len = strpos($string, $end, $ini) - $ini;
        return substr($string, $ini, $len);
    }

    public function imagecrop($width, $height, $url, $fImage, $image_name) {

        $img = Image::make($fImage)
        ->fit($width, $height)
        ->save($url . $image_name);
    }
}
