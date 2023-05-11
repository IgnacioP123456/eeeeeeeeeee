<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ImageController extends Controller
{
    public function store(Request $request)
    {
        $image = $request->file('file');
        
        $image_name = Str::uuid() . "." . $image->extension();

        $imageServidor = Image::make($image);
        $imageServidor->fit(1000,1000);

        $image_path = public_path("uploads") . "/" . $image_name;
        $imageServidor->save($image_path);

        return response()->json(["image_name" => $image_name]);
    }    
}
