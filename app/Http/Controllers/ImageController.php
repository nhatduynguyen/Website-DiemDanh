<?php
use Input;
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;



class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static function insertImage($fileName, $path, $defaultName=null, Request $request)
    {
        $image = null;
    	$file = Input::file($fileName);
    	if(Input::hasfile($fileName))
    	{
    		$destinationPath = $path;
    		$extension = $file -> getClientOriginalExtension();
    		$name = $file -> getClientOriginalName();
    		$name = date('Y-m-d').Time().rand(11111, 99999).'.'.$extension;
    		$photo = $destinationPath.'/'.$name;
    		$file->move($destinationPath, $name);
    	}
    	else 
    	{
    		$image = $defaultName;
    	}
    	return $image;
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
      //
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
    public function update(Request $request)
    {
        try
	    {
	    	$data = array('image_path'=>ImageController::insertImage('image_path', '../resources/assets/imageUpload', 'no image', $request));
		    DB::table('image')->insert($data);

		    return "saved";
		}
		catch(\Exception $e)
		{
			return $e->getMessage();
		}
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
