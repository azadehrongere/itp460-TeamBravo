<?php 
namespace App\Http\Controllers;
//require (app_path().'/includes/connect.php');
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Http\File;
use Intervention\Image\ImageManager;

class MasterController extends Controller{

    public function SuccessfulLogin(Request $request, $firstName, $lastName, $headline){
    	//$sql_location = "SELECT * FROM users"; 
    	$data = array('first' => $firstName, 'last' => $lastName,'headline' => $headline);
		//return \View::make('home');
		return Redirect('home');
    }

    public function test2(Request $request)
    {      
        $path = storage_path('app/public/memories.jpg');
        $img = Image::make($path);
        $image = $img->stream();
        Storage::disk('s3')->put('images/test', $image->__toString());
    	return $img->response();
    }
    public function addFavorite(Request $request)
    {
        $data = $request->all();
        return $data['id'];
    }
}