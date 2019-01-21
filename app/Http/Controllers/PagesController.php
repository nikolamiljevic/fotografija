<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
use App\Category;

class PagesController extends Controller
{
  
    public function about(){
        $photos = Photo::where('id', 1)->first();
        return view('about',compact('photos'));
    }

    public function services(){
        $photos = Photo::where('id', 9)->first();

        return view('services',compact('photos'));
    }

    public function blog(){
        
       
        $photos = Photo::where('id', 19)->first();
        // $instagram = Photo::where('category_id','2')->take(3)->get();
        $instagram = Photo::latest('created_at')->take(3)->get();
        
         return view('blog',compact('photos','instagram'));
      
    }

    public function contact(){
        return view('contact');
    }
 
}
