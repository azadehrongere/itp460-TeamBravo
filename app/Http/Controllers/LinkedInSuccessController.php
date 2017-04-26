<?php 
namespace App\Http\Controllers;
//require (app_path().'/includes/connect.php');
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;


class LinkedInSuccessController extends Controller{

    public function SuccessfulLogin(Request $request, $firstName, $lastName, $headline, $url){
    	//$sql_location = "SELECT * FROM users"; 
    	$url = "https://www.linkedin.com/profile/view?id=" . $url;
    	$data = array('first' => $firstName, 'last' => $lastName,'headline' => $headline, 'url' => $url);

    	if(DB::table('users')->where('linkedinURL', $url)->count() == 0){ # check to see if User exists
	    	$userID = DB::table('users')->insertGetId(
			    ['email' => $url, 'password' => $url, 'name' => $firstName . " " . $lastName, 
			    'username' => NULL, 'profilePic' => NULL, 'headline' => $headline, 'linkedinURL' => $url,
			    'studentDegree' => NULL, 'companyDescription' => NULL, 'companyOrNot' => false, 'jobsCreated' => 0,
			    'foreign_coverPhoto' => NULL, 'graduatingSemester' =>NULL]
			);
    	}else{
    		$userID = DB::table('users')->where('linkedinURL', $url)->first();
    		$userID = $userID->id;
    	}

		session(['name' => $firstName]);
		session(['signedIn' => true]);
		session(['company' => false]); # designate if the current user is a company
		session(['id' => $userID]);


		return Redirect('home');
    }



}