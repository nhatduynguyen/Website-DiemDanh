<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function class_index()
    {
    /* $getData = DB::table('class')->select('id_class','id_room','name_class')->get(); */
    $getData = DB::table('class')->select('id_class','name_class')->get();
        
     return view('client.pages.adDsClass')->with('listclass',$getData);


       /*  $danhsachlop= DB::table('danhsachlop')
        ->join('users','danhsachlop.id_user', '=','users.id')
        ->join('class','danhsachlop.id_class','=','class.id_class')
        ->select('danhsachlop.id',
                 'class.id_class',
                 'class.name_class',
                 'users.ma_user',
                 'users.name'
                 );
        $danhsachlop= $danhsachlop->get();
        return view('client.pages.adDsClass',compact('danhsachlop'));  */
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
        return view('class.createclass');
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Them moi lớp học
            
            
            //Lấy giá trị lớp học đã nhập
            $allRequest  = $request->all();
            $id_class  = $allRequest['id_class'];
            $name_class  = $allRequest['name_class'];
           
            
            //Gán giá trị vào array
            $dataInsertToDatabase = array(
                'id_class' => $id_class,
                'name_class'  => $name_class,
                
            );
            
            //Insert vào bảng
            $insertData = DB::table('class')->insert($dataInsertToDatabase);
            
            //Kiểm tra Insert để trả về một thông báo
            if ($insertData) {
                Session::flash('success', 'Thêm mới lớp học thành công!');
            }else {                        
                Session::flash('error', 'Thêm thất bại!');
            }
            
            //Thực hiện chuyển trang
            return redirect('class/createclass');
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
        //
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
