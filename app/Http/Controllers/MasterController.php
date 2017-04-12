<?php 
namespace App\Http\Controllers;
//require (app_path().'/includes/connect.php');
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;


class MasterController extends Controller{

    public function SuccessfulLogin(Request $request, $firstName, $lastName, $headline){
    	//$sql_location = "SELECT * FROM users"; 
    	$data = array('first' => $firstName, 'last' => $lastName,'headline' => $headline);
		//return \View::make('home');
		return Redirect('home');
    }

    public function test(Request $request)
    {
    	return "here";
    }

    public function test2(Request $request)
    {
    	return Redirect('confirmnewjob');
    }
}