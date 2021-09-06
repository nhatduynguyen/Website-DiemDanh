<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Promotion;
use App\PromotionSchedule;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Carbon;

class entertainment extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:entertainment';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command entertainment';

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
            $categoty_link = 'https://ifind.vn/api/v1/getCategoryDeal?cateId=3';
            $image_folder_path = 'uploads/entertainment/';
            $image_social_folder_path = 'uploads/social/entertainment/';
            $promotion_type = 'entertainment';
            $promotion_type_title = 'Giải trí';

            $html = file_get_html($categoty_link);
                
            $html_json = json_decode($html, true);

            $href_list = $html_json['data']['list_deals'];

            $count_promotion = 0;
            foreach ($href_list as $key => $element) {

                $website = 'ifind.vn';
                //dd($element['deal_share_url']);

                $html2 = file_get_contents($element['deal_share_url']);
                //dd($html2);

                $parsed = $this->get_string_between($html2, 'var data = ', '</script>');
                $parsed = substr($parsed, 0, strpos($parsed, "$('.decription.card-body')"));
                //dd($parsed);

                if ($parsed == '') {
                    continue;
                }
                $content = json_decode($parsed, true);
                //dd($content);

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
                $title = $this->delete_all_between('[', ']', $title);

                $date_end = $content['deal']['data']['date_end'];
                $date_end = substr($date_end, 0, -3);
                // // dd($date_end);

                $image_url = $content['deal']['data']['deal_image_url'];
                //echo ($image);
                try {
                    $fImage = $image_url;
                    $image_name = time() . uniqid('img_') . '.jpg';

                    $this->imagecrop(250, 160, $image_folder_path, $fImage, $image_name);

                    $image_path = $image_folder_path . $image_name;
                } catch (\Exception $e) {
                    $image_path = 'public/images/promotion.jpg';
                }
                //echo $image_path;
                try {
                    $fImage = $image_url;
                    $image_name = time() . uniqid('img_') . '.jpg';

                    $this->imagecrop(600, 315, $image_social_folder_path, $fImage, $image_name);

                    $image_social_path = $image_social_folder_path . $image_name;
                } catch (\Exception $e) {
                    $image_social_path = 'public/images/promotion_social.jpg';
                }

                $description = $content['deal']['data']['deal_full_description'];

                //dd($description);
                $discount = $content['deal']['data']['deal_name'];

                $promotion_url = $content['deal']['data']['source_url'];
                
                $store_address = $content['deal']['data']['deal_stores']['list_areas'][0]['list_stores'][0]['store_address'];

                $store_location_lat = $content['deal']['data']['deal_stores']['list_areas'][0]['list_stores'][0]['store_location_lat'];

                $store_location_lng = $content['deal']['data']['deal_stores']['list_areas'][0]['list_stores'][0]['store_location_lng'];

                $data = Promotion::create([
                    'website'            => 'ifind.vn',
                    'deal_id'            => $deal_id,
                    'type'               => $promotion_type,
                    'type_title'         => $promotion_type_title,
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
                    'image_social_path'  => $image_social_path,
                    'action'             => 1
                ]);

                $data2 = array(
                    "token"       => 'anhkhongdoiqua',
                    "id"          => $data->code,
                    'website'     => $data->website,
                    'deal_id'     => $data->deal_id,
                    'title'       => $data->title,
                    'discount'    => $data->discount,
                    'address'     => $data->store_address,
                    'lat'         => $data->store_location_lat,
                    'lng'         => $data->store_location_lng,
                    'time'        => $data->date_end,
                    'description' => $data->description,
                    'link'        => $data->promotion_url,
                    'image'       => 'http://promotion.vsmarttek.vn/' . $data->image_path,
                    'action'      => 1,
                    'type'        => $data->promotion_type
                );

                $ch = curl_init();
                $timeout = 5;
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data2));
                curl_setopt($ch, CURLOPT_URL, "https://vstserver.net/add_promotion");
                curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                $file = curl_exec($ch);

                $count_promotion = $count_promotion + 1;
            }
            PromotionSchedule::create([
                'message' => 'Đã thêm ' . $count_promotion . ' địa điểm '. $promotion_type_title .' vào thời gian: '. Carbon\Carbon::now()
            ]);

        } catch (\Exception $e) {
            PromotionSchedule::create([
                'message' => 'Đã xảy ra lỗi command ẩm thực vào thời gian: '. Carbon\Carbon::now()
            ]);
        }
    }

    public function get_string_between($string, $start, $end)
    {
        $string = ' ' . $string;
        $ini = strpos($string, $start);
        if ($ini == 0) return '';
        $ini += strlen($start);
        $len = strpos($string, $end, $ini) - $ini;
        return substr($string, $ini, $len);
    }

    public function delete_all_between($beginning, $end, $string)
    {
        $beginningPos = strpos($string, $beginning);
        $endPos = strpos($string, $end);
        if ($beginningPos === false || $endPos === false) {
            return $string;
        }

        $textToDelete = substr($string, $beginningPos, ($endPos + strlen($end)) - $beginningPos);

        return $this->delete_all_between($beginning, $end, str_replace($textToDelete, '', $string));
    }

    public function imagecrop($width, $height, $url, $fImage, $image_name)
    {

        $img = Image::make($fImage)
        ->fit($width, $height)
        ->save($url . $image_name);
    }
    
}
