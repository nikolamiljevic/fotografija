
<div class="main" style="padding: 100px 0 400px 570px; background:grey">
    
    <div class="create" style="border:2px solid black;border-radius:10px; width:300px;padding:5px;">
        <h3>Upload photo</h3>
    {!!Form::open(['action' => 'AdminPhotosController@store','method'=>'post','enctype'=>'multipart/form-data'])!!}
    Title:
    {{Form::text('title','',['placeholder'=>'Photo title'])}}<br><br>
    Category:
    {!!Form::select('category_id',[''=>'Choose categories'] + $categories ,null,['class'=>'form-control'])!!}<br><br>
    {{-- {{Form::textarea('description','',['placeholder'=>'Photo description'])}}<br> --}}
    {{Form::file('photo')}}<br><br>
    {{Form::submit('Submit')}}

    {!!Form::close()!!}
    </div>
</div>
