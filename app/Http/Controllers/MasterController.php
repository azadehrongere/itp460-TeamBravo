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

    public function submitnewcompany(Request $request){
        $data = $request->all();
        dd($data);
        $userID = DB::table('users')->insertGetId(
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
        $photo = Image::make(Storage::disk('s3')->get('coverPhotos/default.jpg'));
        return $photo->response();
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