<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
use App\Category;

class PagesController extends Controller
{
  
    public function about(){
        return view('about');
    }
    public function services(){
        return view('services');
    }
    public function portfolio(){
        
        // $photos = Photo::orderBy('created_at', 'asc')->get();
        // $categories = Category::pluck('name','id');
        //  return view('portfolio')->with(compact('photos','categories'));

        return view('portfolio');
    }
    public function blog(){
        
        //  $selecting = 'https://rsshub.app/instagram/user/iksi_lucius';
        //  $xml = simplexml_load_file($selecting);
          
        return view('blog',compact('selecting','xml'));
    }

    public function contact(){
        return view('contact');
    }
 
}
