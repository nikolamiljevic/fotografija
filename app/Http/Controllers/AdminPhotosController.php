<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
use App\Category;

class AdminPhotosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $photos = Photo::orderBy('created_at', 'desc')->get();
          $category = Category::pluck('name','id');
          
          return view('admin.index',compact('photos','category'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('name','id')->all();
       // return $categories;
        return view('admin.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required',
            'photo'=>'image|max:19999'
        ]);

        //ime fajla se ekstenzijom jpg
      $filenameWithExt =  $request->file('photo')->getClientOriginalName();
        //samo ime fajla bez ekstenzije
      $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

      //dobavljanje ekstenzije
         $extension = $request->file('photo')->getClientOriginalExtension();
      //sad pravimo novo ime fajla gde ubacujemo ime fajla + vreme + tacka + ekstenzija
        $filenameToStore = $filename.'_'.time().'.'.$extension;
      //upload slike
        $path = $request->file('photo')->storeAs('public/photos/', $filenameToStore);
        
      //ubacivanje slike
      $photo = new Photo;
      $photo->title = $request->input('title');
      $photo->category_id = $request->input('category_id');
      $photo->size = $request->file('photo')->getClientSize();
      $photo->photo = $filenameToStore;
    
      $photo->save();
     
      return redirect('admin/create')->with('success','Photo uploaded');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $photo = Photo::find($id);
        $category = Category::pluck('name','id');
        return view('admin.edit',compact('photo','category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      
        
      //ubacivanje slike
      $photo = Photo::findOrFail($id);
      $photo->title = $request->input('title');
      $photo->category_id = $request->input('category_id');
      

      $photo->update();
        
     
      return redirect('admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $photo = Photo::find($id);
        $photo->delete();
        return redirect('admin');
    }
}
