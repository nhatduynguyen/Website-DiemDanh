<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Promotion;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use DB;

class ApiController extends Controller
{
    public function index(Request $request)
    {
    	if ($request->lat and $request->lng) {
    		$data = Promotion::select(DB::raw('*, ( 6367 * acos( cos( radians('.$request->lat.') ) * cos( radians( store_location_lat ) ) * cos( radians( store_location_lng ) - radians('.$request->lng.') ) + sin( radians('.$request->lat.') ) * sin( radians( store_location_lat ) ) ) ) AS distance'))
    		->orderBy('distance')
    		->paginate(20);
    	} else {
    		$data = Promotion::lateId()->paginate(20);
    	}

    	//dd($data);
    	

    	return view('api.index', compact('data'));
    }

    public function show($code)
    {
    	
    	try {
    		$data = Promotion::findOrFail($code);

    		return view('api.show', compact('data'));

    	} catch(ModelNotFoundException $e) {

    		return view('errors.404_api');
		}
    }
}
