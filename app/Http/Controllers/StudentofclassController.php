<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class StudentofclassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function studentofclass_index()
    {
        //
    }
    public function __construct() {
        $this->middleware('auth');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('studentofclass.createstudent');
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Thêm mới sinh viên
        
            
            //Lấy giá trị sinh viên mới đã nhập
            $allRequest  = $request->all();
            //$id = $allRequest['id'];
            $mssv_student  = $allRequest['mssv_student'];
            $id_class  = $allRequest['id_class'];
            
           
            
            //Gán giá trị vào array
            $dataInsertToDatabase = array(
                //'id' => $id,
                'mssv_student'  => $mssv_student,
                'id_class' => $id_class,
            );
            
            //Insert vào bảng
            $insertData = DB::table('studentofclass')->insert($dataInsertToDatabase);
            
            //Kiểm tra Insert để trả về một thông báo
            if ($insertData) {
                Session::flash('success', 'Thêm mới sinh viên vào lớp học thành công!');
            }else {                        
                Session::flash('error', 'Thêm thất bại!');
            }
            
            //Thực hiện chuyển trang
            //return redirect('lop/{id}/show');
            return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_class)
    {
        $studentofclass= DB::table('studentofclass')
        ->join('student','studentofclass.mssv_student', '=','student.mssv')
        ->select('studentofclass.mssv_student','student.mssv','student.name_sv','student.mail','student.sdt')
        // ->join('class','class.id_class','=','studentofclass.id_class')
        // ->select('class.name_class','studentofclass.id_class')
        ->where('id_class',$id_class)->get();
        // dump($id_class);die;
        return view('studentofclass.show',compact('id_class'))->with('getsinhvienByStudentofclassId',$studentofclass);
    }
    
    public function getshow($id_class)
    {
        $studentofclass= DB::table('studentofclass')
        ->join('student','studentofclass.mssv_student', '=','student.mssv')
        ->select('studentofclass.mssv_student','student.mssv','student.name_sv','student.mail','student.sdt')
        // ->join('class','class.id_class','=','studentofclass.id_class')
        // ->select('class.name_class','studentofclass.id_class')
        ->where('id_class',$id_class)->get();
        // dump($id_class);die;
        $studentofclass = json_encode($studentofclass, true);
        var_dump($studentofclass);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id 
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $updateData = DB::table('studentofclass')->where('id', $request->id)->update([
            'id' => $request->id,
            'mssv_student' => $request->mssv_student,
            'id_class' => $request->id_class,  ]);
        //Kiểm tra lệnh update để trả về một thông báo
	if ($updateData) {
		Session::flash('success', 'Sửa học sinh thành công!');
	}else {                        
		Session::flash('error', 'Sửa thất bại!');
	}
	
	//Thực hiện chuyển trang
	return redirect('studentofclass');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
