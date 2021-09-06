<?php

namespace App\Http\Controllers;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\Student;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sinhvien_index()
    {
        //Lấy danh sách học sinh từ database
        $getData = DB::table('student')->select('mssv', 'name_sv', 'mail', 'sdt')->get();

        //Gọi đến file adDsUser với giá trị gửi đi tên listsinhvien= $getData
        return view('client.pages.adDsUser')->with('student', $getData);
    }

    public function getsinhvien_index()
    {
        //Lấy danh sách học sinh từ database
        $getData = DB::table('student')->select('mssv', 'name_sv', 'mail', 'sdt')->get();

        //Gọi đến file adDsUser với giá trị gửi đi tên listsinhvien= $getData
        $schedule = json_encode($getData, true);
        var_dump($getData);
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sinhvien.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Them moi sinh vien


        //Lấy giá trị sinh viên đã nhập
        $allRequest  = $request->all();
        // $image = $allRequest['image'];
        $mssv  = $allRequest['mssv'];
        $name_sv = $allRequest['name_sv'];
        $mail = $allRequest['mail'];
        $sdt = $allRequest['sdt'];
        $name_parents = $allRequest['name_parents'];
        $sdt_parents = $allRequest['sdt_parents'];

        // $link_file_dat = $allRequest['link_file_dat'];
        //Gán giá trị vào array
        $dataInsertToDatabase = array(
            // 'image' => $image,
            'mssv'  => $mssv,
            'name_sv' => $name_sv,
            'mail' => $mail,
            'sdt' => $sdt,
            'name_parents' => $name_parents,
            'sdt_parents' => $sdt_parents,
            // 'link_file_dat' => $link_file_dat,
        );

        //Insert vào bảng
        $insertData = DB::table('student')->insert($dataInsertToDatabase);

        //Kiểm tra Insert để trả về một thông báo
        if ($insertData) {
            Session::flash('success', 'Thêm mới học sinh thành công!');
        } else {
            Session::flash('error', 'Thêm thất bại!');
        }

        //Thực hiện chuyển trang
        return redirect('sinhvien/create');
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
    public function edit($mssv)
    {
        //Lấy dữ liệu từ Database với các trường được lấy và với điều kiện id = $id
        $getData = DB::table('student')->select('mssv', 'name_sv', 'mail', 'sdt','name_parents', 'sdt_parents')->where('mssv', $mssv)->get();

        //Gọi đến file edit.blade.php trong thư mục "resources/views/hocsinh" với giá trị gửi đi tên getHocSinhById = $getData
        return view('sinhvien.edit')->with('getsinhvienById', $getData);
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
        //Cap nhat sua sinh vien


        //Thực hiện câu lệnh update với các giá trị $request trả về

        $updateData = DB::table('student')->where('mssv', $request->mssv)->update([
            'mssv' => $request->mssv,
            'name_sv' => $request->name_sv,
            'mail' => $request->mail,
            'sdt'  => $request->sdt,
            'name_parents' => $request->name_parents,
            'sdt_parents' => $request->sdt_parents,
        ]);

        //Kiểm tra lệnh update để trả về một thông báo
        if ($updateData) {
            Session::flash('success', 'Update sinh viên thành công!');
        } else {
            Session::flash('error', 'Update thất bại!');
        }

        //Thực hiện chuyển trang
        return redirect('sinhvien');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */




    /*     public function destroy($id)
    {
        $users = users::find($id);
        $users->delete();

        return redirect('/adDsUser')->with('success', 'User has been deleted');
    }
 */



    public function destroy($mssv)
    {
        DB::table('student')->wheremssv($mssv)->delete();
        return back();
    }

    public function diemdanh(Request $rq)
    {
        $id_schedule = $_GET['id_schedule'];
        $mssv_student = $_GET['mssv_student'];
        $status = $_GET['status'];
        $updateData = DB::table('studentattendance')
            ->where('id_schedule', $id_schedule)
            ->where('mssv_student', $mssv_student)
            ->update([
                'status0' => $status0,
                'status1' => $status1,
                'status2' => $status2,
                'status3' => $status3,
                'status4' => $status4,
                'status5' => $status5,
                'status6' => $status6,
                'status7' => $status7,
                'status8' => $status8,
                'status9' => $status9,
                'status10' => $status10,
                'status11' => $status11,
                'status12' => $status12,
                'status13' => $status13,
                'status14' => $status14,
            ]);

        //Kiểm tra lệnh update để trả về một thông báo
        if ($updateData) {
            Session::flash('success', 'Sửa học sinh thành công!');
            return redirect('tkb');
                /* echo "SV {$id_sv} da di hoc" */;
        } else {
            Session::flash('error', 'Sửa thất bại!');
        }
    }
}
