<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
use App\Category;
use Mail;
use App\Quotes;

class PagesController extends Controller
{
  
    public function about(){
        $photos = Photo::where('id', 72)->first();
        $quotes = Quotes::all();
        return view('about',compact('photos','quotes'));
      
    }

    public function services(){
        $photos = Photo::where('id', 69)->first();

        return view('services',compact('photos'));
    }

    public function blog(){
        
       
        $photos = Photo::where('id', 87)->first();
        
        $instagram = Photo::latest('created_at')->take(4)->get();
       // return $instagram;
         return view('blog',compact('photos','instagram'));
      
    }

    public function create(){
        $photos = Photo::where('id', 64)->first();
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
