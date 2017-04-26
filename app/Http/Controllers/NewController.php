<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewController extends Controller
{
    //
	public function ConfirmNewJob(Request $request)
    {
    	$data = $request->all();
		$this->validate($request, [
		    'jobTitle' => 'bail|required|max:255',
		    'Description' => 'required',
		    'Requirement' => 'required', 
		]);
		$page = array(
		    'title'  => $data['jobTitle'],
		    'description' => $data['Description'],
		    'requirement' => $data['Requirement']
		);

        //return view('confirmnewjob')->with(compact('page'));
            //return view('confirmnewjob')->withStore('page');
            //return view('confirmnewjob')->with('data', $data);  //or with('page', $page);
        return view('confirmnewjob')->with('title', $data['jobTitle'])->with('description', $data['Description'])
        ->with('requirement', $data['Requirement'])->with('location', $data['location'])->
        with('compensation', $data['compensation'])->with('level', $data['jobLevel'])
        ->with('size', $data['size'])->with('category', $data['category'])->
        with('picture', $data['jobPicture']);
    	//return $data;
    }

    public function SubmitNewJob(Request $request){

    }

}
