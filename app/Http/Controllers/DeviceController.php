<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Session;

class DeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listdevice()
    {
     $getData = DB::table('device')
     ->join('room','device.id','=','room.id_cam')
     ->select('id','ma_cam','action','name_room','toanha','date_setup','bao_tri')->get();
     return view('client.pages.adDsDevice')->with('listdevice',$getData);
    }
    
    public function getlistdevice()
    {
     $getData = DB::table('device')
     ->join('room','device.id','=','room.id_cam')
     ->select('id','ma_cam','action','name_room','toanha','date_setup','bao_tri')->get();
     $getData = json_encode($getData, true);
        var_dump($getData);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('device.createdevice');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Them moi device
            
            
            //Lấy giá trị device đã nhập
            $allRequest  = $request->all();
            $id  = $allRequest['id'];
            $ma_cam  = $allRequest['ma_cam'];
            $action = $allRequest['action'];
            $name_room = $allRequest['name_room'];
            $toanha = $allRequest['toanha'];
           
            //Gán giá trị vào array
            $dataInsertToDatabase = array(
                'id' => $id,
                'ma_cam'  => $ma_cam,
                'action' => $action,
                'name_room' => $name_room,
                'toanha' => $toanha,
                 
            );
            
            //Insert vào bảng
            $insertData = DB::table('device')->insert($dataInsertToDatabase);
            
            //Kiểm tra Insert để trả về một thông báo
            if ($insertData) {
                Session::flash('success', 'Thêm mới thiết bị thành công!');
            }else {                        
                Session::flash('error', 'Thêm thất bại!');
            }
            
            //Thực hiện chuyển trang
            return redirect('device/createdevice');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Lấy dữ liệu từ Database với các trường được lấy và với điều kiện id = $id
	$getData = DB::table('device')->select('id','ma_cam','action','name_room','toanha','date_setup','bao_tri')->where('id',$id)->get();
	
	//Gọi đến file edit.blade.php trong thư mục "resources/views/hocsinh" với giá trị gửi đi tên getHocSinhById = $getData
	return view('device.editdevice')->with('getdeviceById',$getData);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //Thực hiện câu lệnh update với các giá trị $request trả về
	$updateData = DB::table('device')->where('id', $request->id)->update([
		'id' => $request->id,
        'ma_cam' => $request->ma_cam,
        'action' => $request->action,
		'name_room'  => $request->name_room,
        'toanha'  => $request->toanha,
        'date_setup'  => $request->date_setup,
        'bao_tri'  => $request->bao_tri,  

    
	]);
	
	//Kiểm tra lệnh update để trả về một thông báo
	if ($updateData) {
		Session::flash('success', 'Sửa học sinh thành công!');
	}else {                        
		Session::flash('error', 'Sửa thất bại!');
	}
	
	//Thực hiện chuyển trang
	return redirect('device');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     /* kiem tra neu chua log in thi chuyen qua trang login */
    public function __construct() {
        $this->middleware('auth');
    }



    public function destroy($id_cam)
    {
        $device = camera::find($device);
        $device->delete();

        return redirect()->action('DeviceController@listDevice')->with('success', 'Device has been deleted');
    }


}
