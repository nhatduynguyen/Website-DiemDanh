<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Promotion;
use Intervention\Image\ImageManagerStatic as Image;
use Validator;
use Auth;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index($type = null)
    {
        return view('client.pages.home');
    }

    public function slidetest($type = null)
    {
        return view('client.pages.category');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
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
        //
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
    public function show($code)
    {
       
    }


}
