<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewController extends Controller
{
    //
	public function ConfirmNewJob(Request $request)
    {
    	$data = $request->all();
		$this->validate($request, [
		    'title' => 'bail|required|max:255',
		    'description' => 'required',
		    'requirements' => 'required',
            'location' => 'required',

		]);

        $jobID = DB::table('job')->insertGetId(
            ['title' => $data['title'],
            'description' => $data['description'],
            'requirements' => $data['requirements'],
            'location' => $data['title'],
            'foreign_companyID' => 1,
            'foreign_fieldID' => $data['category'],
            'foreign_levelID' => $data['jobLevel'],
            'foreign_sizeID' => $data['size'],
            'foreign_jobPayID' => $data['compensation'],
            ]

        );
        // if (!is_null($data['jobPicture'])) {

        //     DB::table('coverPhotos')->insert(
        //         ['email' => 'john@example.com', 'votes' => 0]
        //     );
        // }
        //return view('confirmnewjob')->with(compact('page'));
            //return view('confirmnewjob')->withStore('page');
            //return view('confirmnewjob')->with('data', $data);  //or with('page', $page);
        return view('confirmnewjob')->with('title', $data['title'])->with('description', $data['description'])
        ->with('requirement', $data['requirements'])->with('location', $data['location'])->
        with('compensation', $data['compensation'])->with('level', $data['jobLevel'])
        ->with('size', $data['size'])->with('category', $data['category'])->
        with('picture', $data['jobPicture'])->with('jobID', $jobID);
    	//return $data;
    }

}
