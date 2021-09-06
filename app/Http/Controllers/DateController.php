<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DateController extends Controller
{
  function index()
    {
     return view('client.pages.demoSchedule');
    }
    
    function followday(Request $request)
    {
     if($request->ajax())
     {
      if($request->from_date != '' && $request->to_date != '')
      {
       $data = DB::table('schedule')
         ->whereBetween('date', array($request->from_date, $request->to_date))
         ->get();
      }
      else
      {
       $data = DB::table('schedule')->orderBy('date', 'desc')->get();
      }
      echo json_encode($data);
     }
    }
}

?>