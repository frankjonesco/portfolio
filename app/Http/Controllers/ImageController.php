<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

class ImageController extends Controller
{
    /** Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */

    public function index(){
        return view('image-upload');
    }

    /** Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request){
        $image = $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,jpg,png,gif,svg,webp|max:2048',
        ]);

        if($request->hasFile('image')){
            $image = Image::make($request->file('image'));

            /**
             * Main Image Upload on Folder Code
             */
            $imageName = time().'-'.$request->file('image')->getClientOriginalName();
            $destinationPath = public_path('images/uploads/');
            $image->save($destinationPath.$imageName);

            /**
             * Generate Image Upload on Folder Code
             */

            $imageNameThunmbnail = 'tn-'.$imageName;
            $image->resize(100,100);
            $image->save($destinationPath.$imageNameThunmbnail);

            /**
             * Write Code for Image Upload Here
             * 
             * $upload = new Image();
             * $upload->file = $imageName;
             * $upload->save();
             */

            
            return back()
                ->with('message', 'Image Uplad Successful')
                ->with('imageName', $imageName);

        }

        return back();
    }

    /** Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function compressToWebp(){
        $fileExtension = '.png';
        $imageName = 'fj-banner';
        $destinationPath = public_path('images/');
        // $imageWidth = 200;
        // $imageHeight = 150;
        
        $image = Image::make($destinationPath.$imageName.$fileExtension);

        $image->save($destinationPath.$imageName.'.webp', 20, 'webp');

        return redirect('images/upload')->with('message', 'Image Has Been Compressed');
    }

    /** Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function compressDirectoryToWebp(){

        $directory = public_path('images/icons');
        $files = File::files($directory);
    
        foreach($files as $file){

            $fileInfo = pathinfo($file);
            $fileExtension = '.'.$fileInfo['extension'];
            $imageName = $fileInfo['filename'];
            $destinationPath = $directory;
            // $imageWidth = 200;
            // $imageHeight = 150;
        
            $image = Image::make($destinationPath.'/'.$imageName.$fileExtension);

            $image->save($destinationPath.'/'.$imageName.'.webp', 75, 'webp');

            
        }

        return redirect('images/upload')->with('message', 'Image Has Been Compressed');
    }

    /** Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function resizeImage(){

        $fileExtension = '.webp';
        $imageName = 'fj-banner';
        $destinationPath = public_path('images/');
        $imageWidth = 1080;
        $imageHeight = null;
        
        $image = Image::make($destinationPath.$imageName.$fileExtension);

        $image->resize($imageWidth, $imageHeight, function ($constraint) {
            $constraint->aspectRatio();
        });

        $image->save();

        return redirect('images/upload')->with('message', 'Image Has Been Resized');
    }

}
