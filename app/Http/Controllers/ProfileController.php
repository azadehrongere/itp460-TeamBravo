<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
	public function submitedits(Request $request)
	{
		# code...
		$data = $request->all();

        dd($data);

        $usersID = DB::table('users')->insertGetId(
            ['name' => $data['name'],
            'headline' => $data['headline'],
            'studentDegree' => $data['studentDegree'],
            'graduatingSemester' => $data['graduatingSemester'],
            'linkedinURL' => $data['linkedinURL'],
            'profilePic' => $data['profilePic'],
            ]

        );

        DB::table('major')->insert(
            ['major' => $data['major'],
            'foreign_usersID' => $usersID->id,
            ]

        );

        DB::table('minor')->insert(
            ['minor' => $data['major'],
            'foreign_usersID' => $usersID->id,
            ]

        );

        return $jobID;
	}
}
