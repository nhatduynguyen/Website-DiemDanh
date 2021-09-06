<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Session;

class diemdanhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function diemdanh()
    {

        $studentattendance= DB::table('studentattendance')
        ->join('schedule','studentattendance.id_schedule', '=','schedule.id')
        ->join('student','studentattendance.mssv_student', '=','student.mssv')
        ->select('studentattendance.status0',
                 'schedule.id_class',
                 'schedule.start',
                 'schedule.end',
                 'student.mssv',
                 'student.name_sv'
    )->get();
        return view('client.pages.diemdanh')->with('getsinhvienDiemdanh',$studentattendance  );

    }

    public function diemdanh1()
    {

        $schedule= DB::table('schedule')
        ->join('class','schedule.id_class', '=','class.id_class')
        ->select('schedule.id',
                 'class.name_class',
                 'schedule.id_class',
                 'schedule.date',
                 'schedule.start',
                 'schedule.end',
                 'schedule.classify'
                 )
        
        ->get();
        //dump($schedule);
        return view('client.pages.demoSchedule')->with('getsinhvienDiemdanh1',$schedule);
        
        
    }

    public function getdiemdanh1()
    {
        $schedule= DB::table('schedule')
        ->join('class','schedule.id_class', '=','class.id_class')
        ->select('schedule.id',
                 'class.name_class',
                 'schedule.id_class',
                 'schedule.date',
                 'schedule.start',
                 'schedule.end')
        ->get();
        $schedule = json_encode($schedule, true);
        var_dump($schedule);
        // foreach($schedule as $name_class => $data) {
        //     var_dump($name_class, $data['calID'], $data['availMsg']); // $name is the Name of Room
        // }
        // return json_encode($schedule);
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()               
    {
        return view('studentattendance.createstudent');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //Thêm mới sinh viên vào lớp học
        
            
            //Lấy giá trị sinh viên đã nhập
            $allRequest  = $request->all();
            //$id = $allRequest['id'];
            $mssv_student  = $allRequest['mssv_student'];
            $id_class  = $allRequest['id_class'];
            $id_schedule = $allRequest['id_schedule'];
            
           
            
            //Gán giá trị vào array
            $dataInsertToDatabase = array(
                //'id' => $id,
                'mssv_student'  => $mssv_student,
                'id_class' => $id_class,
                'id_schedule' => $id_schedule,
            );
           
            //Insert vào bảng
            $insertData = DB::table('studentattendance')->insert($dataInsertToDatabase);
            
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
        $studentattendance= DB::table('studentattendance')
        ->join('schedule','studentattendance.id_schedule', '=','schedule.id')
        ->select('schedule.classify','schedule.id','schedule.id_class','schedule.date')
        ->get();
        dump($studentattendance);
    if (('schedule.classify') == 0 )
         {
            $studentattendance= DB::table('studentattendance')
            ->join('student','studentattendance.mssv_student', '=','student.mssv')
            //->join('schedule','studentattendance.id_schedule', '=','schedule.id')
            ->select(
                    //'schedule.classify',
                    'studentattendance.mssv_student',
                    'studentattendance.id',
                    'student.name_sv',
                    'student.sdt',
                    'studentattendance.status0',
                    'studentattendance.status1',
                    'studentattendance.status2',
                    'studentattendance.status3',
                    'studentattendance.status4',
                    'studentattendance.status5',
                    'studentattendance.status6',
                    'studentattendance.status7',
                    'studentattendance.status8',
                    'studentattendance.status9',
                    'studentattendance.status10',
                    'studentattendance.status11',
                    'studentattendance.status12',
                    'studentattendance.status13',
                    'studentattendance.status14',
                    'studentattendance.id_class'
                    )
            ->where('id_class',$id_class)
            //->where('classify','=', 1)
            ->get();
            dump($studentattendance);
            return view('sinhvien.showdiemdanh',compact('id_class'))->with('getsinhvienByTkbId',$studentattendance);
        }
        else
        {
            $studentattendance= DB::table('studentattendance')
            ->join('student','studentattendance.mssv_student', '=','student.mssv')
            //->join('schedule','studentattendance.id_schedule', '=','schedule.id')
            ->select(
                    //'schedule.classify',
                    'studentattendance.mssv_student',
                    'studentattendance.id',
                    'student.name_sv',
                    'student.sdt',
                    'studentattendance.status0',
                    'studentattendance.status1',
                    'studentattendance.status2',
                    'studentattendance.status3',
                    'studentattendance.status4',
                    'studentattendance.status5',
                    'studentattendance.status6',
                    )
            ->where('id_class',$id_class)
            //->where('classify', '=', 0)
            ->get();
            dump($studentattendance);
            return view('sinhvien.showdiemdanh1',compact('id_class'))->with('getsinhvienByTkbId',$studentattendance);
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit($mssv)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $mssv_student)
    {
                //Cap nhat sua sinh vien


        //Thực hiện câu lệnh update với các giá trị $request trả về

        $updateData = DB::table('studentattendance')->where('mssv_student', $request->mssv_student)->update([
            'id' => $request->id,
            'id_schedule' => $request->id_schedule,
            'mssv_student' => $request->mssv_student,
            'update_at' => $request->update_at,
            'id_class' => $request->id_class,
            'status0'  => $request->status0,
            'status1'  => $request->status1,
            'status2'  => $request->status2,
            'status3'  => $request->status3,
            'status4'  => $request->status4,
            'status5'  => $request->status5,
            'status6'  => $request->status6,
            'status7'  => $request->status7,
            'status8'  => $request->status8,
            'status9'  => $request->status9,
            'status10'  => $request->status10,
            'status11'  => $request->status11,
            'status12'  => $request->status12,
            'status13'  => $request->status13,
            'status14'  => $request->status14,
        ]);

        //Kiểm tra lệnh update để trả về một thông báo
        if ($updateData) {
            Session::flash('success', 'Sửa học sinh thành công!');
        } else {
            Session::flash('error', 'Sửa thất bại!');
        }

        //Thực hiện chuyển trang
        return back();
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

    public function destroy($mssv_student)
    {
        DB::table('studentattendance')->wheremssv_student($mssv_student)->delete();
        return back();
    }


   
    





}
