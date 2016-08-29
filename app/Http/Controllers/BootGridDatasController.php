<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Validator;
use App\Griddata;
class BootGridDatasController extends Controller
{

    public function GridDateindex(Request $request)
    {
        $data = Griddata::all();
        return view('BootGridData')->withData($data);;
    }

    public function Jqueryindex(Request $request)
    {
        $data = Griddata::all();
        return view('JqueryData')->withData($data);;
    }

    public function Jqueryedit(Request $request) {
	
	$rules = array (
			'fname' => 'required|alpha',
			'lname' => 'required|alpha',
			'email' => 'required|email',
			'gender' => 'required',
			'country' => 'required|regex:/^[\pL\s\-]+$/u',
			'salary' => 'required|regex:/^\d*(\.\d{2})?$/' 
	);
	 $validate = Validator::make($request->all(),$rules);
	if ($validate->fails())
		return \Response::json(array('errors' =>  $validate->getMessageBag()->toArray ()));
	else {
		
		$data =Griddata::find( $request->id );
		$data->first_name = ($request->fname);
		$data->last_name = ($request->lname);
		$data->email = ($request->email);
		$data->gender = ($request->gender);
		$data->country = ($request->country);
		$data->salary = ($request->salary);
		$data->save();
		return response()->json($data);
	}
}


    public function Jquerydestroy(Request $request) {
	    Griddata::find( $request->id )->delete();
	    return response()->json();
    }
}
