{{-- {!!Form::open(['action'=>["PhotosController@destroy",$photo->id,'method'=>'post']])!!}
{{Form::hidden('_method','delete')}}
{{Form::submit('Delete photo',['class'=>'button alert'])}} --}}

<h1>Edit</h1>
<table>
<thead>
    <tr>
        <th>id</th>
        <th>Photo</th>
       
        <th>Created</th>  
    </tr>
</thead>


        <tr>
            <td>{{$photo->id}}</td>
            <td><img height="300" src="{{asset('storage/photos/'.$photo->photo)}}"></td>
            
            <td>{{$photo->created_at->diffForHumans()}}</td>
         
<td>
{!!Form::model($photo,['method'=>'patch','action'=>['AdminPhotosController@update',$photo->id], 'files'=>true])!!}
Title: <br>{{Form::text('title',$photo->title,['placeholder'=>'Photo title'])}}<br>
Cetegory:<br>
{!!Form::select('category_id',$category ,null,['class'=>'form-control'])!!}
{{Form::file('photo',null)}}<br><br>
{{Form::submit('Update')}}
{!!Form::close()!!}
</td>
        <br>

        </tr>


  

</table>
