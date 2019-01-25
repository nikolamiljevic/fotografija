<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
use App\Category;
use Mail;

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

    public function create(){
        $photos = Photo::where('id', 15)->first();
        return view('contact',compact('photos'));
    }

    public function store(Request $request){

        $this->validate($request, ['name'=>'required','email'=>'required','message'=>'required']);

        Mail::send('emails.contact-message',[
            'msg' => $request->message
        ], function($mail) use($request) {
            $mail->from($request->email, $request->name);

            $mail->to('milje18@gmail.com');
        });
        return redirect()->back()->with('flash_message','Thank you for your message');
    }
 
}
