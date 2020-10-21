<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;

class ImageController extends Controller
{
    public function create(){

        return view('image.image');
       
    }

    public function store(Request $request) {

    $request->validate([    
       'image'=>'required|image|mimes:jpeg,png,jpg,gif|max:10000'
    ]);

   
 /* $image = $request->file('image');
  $new_image = rand().'.'.$image->getClientOriginalName();
  $image->move(public_path("uploads"), $new_image);
*/

$image = $request->file('image')->store('uploads','public');

    $upload = new Image();

  
  $upload->image = $image;
    
  
    $upload->save(); 
   $data=Image::all();
 //dd($data);
 return view('image.ImageView',compact('data'));
  //return back()->with('Image upload successfully')->with('path',$new_image);

}

}
