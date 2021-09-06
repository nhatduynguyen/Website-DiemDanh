<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Session;
class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listroom()
    {

     $getData = DB::table('room')
     ->join('device','room.id_cam','=','device.id')
     ->select('id_room','ten_room','toa_nha','device.ma_cam')->get();
     
     return view('client.pages.adDsRoom')->with('listroom',$getData);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('room.createroom');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Them moi phòng học
            
            
            //Lấy giá trị phòng học đã nhập
            $allRequest  = $request->all();
            $id_room  = $allRequest['id_room'];
            $toa_nha  = $allRequest['toa_nha'];
            $ten_room = $allRequest['ten_room'];
            $id_cam = $allRequest['id_cam'];
            
            //Gán giá trị vào array
            $dataInsertToDatabase = array(
                'id_room' => $id_room,
                'toa_nha'  => $toa_nha,
                'ten_room' => $ten_room,
                'id_cam' => $id_cam,
            );
            
            //Insert vào bảng
            $insertData = DB::table('room')->insert($dataInsertToDatabase);
            
            //Kiểm tra Insert để trả về một thông báo
            if ($insertData) {
                Session::flash('success', 'Thêm mới phòng học thành công!');
            }else {                        
                Session::flash('error', 'Thêm thất bại!');
            }
            
            //Thực hiện chuyển trang
            return redirect('room/createroom');
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
    public function edit($id_room)
    {
       //Lấy dữ liệu từ Database với các trường được lấy và với điều kiện id = $id
	$getData = DB::table('room')->select('id_room','ten_room','toa_nha','id_cam')->where('id_room',$id_room)->get();
	
	//Gọi đến file edit.blade.php trong thư mục "resources/views/hocsinh" với giá trị gửi đi tên getHocSinhById = $getData
	return view('room.editroom')->with('getphonghocById',$getData);
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
        //Cap nhat sua phòng học
	
 
	//Thực hiện câu lệnh update với các giá trị $request trả về
    
	$updateData = DB::table('room')->where('id_room', $request->id_room)->update([
		'id_room' => $request->id_room,
        'ten_room' => $request->ten_room,
        'toa_nha' => $request->toa_nha,
		'id_cam'  => $request->id_cam,
	]);
	
	//Kiểm tra lệnh update để trả về một thông báo
	if ($updateData) {
		Session::flash('success', 'Sửa học sinh thành công!');
	}else {                        
		Session::flash('error', 'Sửa thất bại!');
	}
	
	//Thực hiện chuyển trang
	return redirect('room');
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


    public function destroy($id_room)
    {
        $getData = DB::table('room')->select('id_room','ten_room','toa_nha','id_cam')->where('id_room',$id_room)->delete();
        return back();
    }

}
