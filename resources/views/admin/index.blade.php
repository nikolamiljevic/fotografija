<h1>Edit</h1>
<table style="border:1px solid black">
<thead >
    <tr>
        <th>id</th>
        <th>Photo</th>
        <th>Title</th>
        <th>Category</th>
        <th>Created</th>  
    </tr>
</thead>

@if($photos)

    @foreach($photos as $photo)

        <tr  style="border:1px solid black">
            <td>{{$photo->id}}</td>
            <td><img height="150" src="{{asset('storage/photos/'.$photo->photo)}}"></td>
            <td><a href="{{route('admin.edit',$photo->id)}}">{{$photo->title}}</a></td>  
            <td>{{$photo->category->name}}</td>
            <td>{{$photo->created_at->diffForHumans()}}</td>
            <td>{!!Form::open(['action'=>["AdminPhotosController@destroy",$photo->id,'method'=>'post']])!!}
                    {{Form::hidden('_method','delete')}}
                    {{Form::submit('Delete photo',['class'=>'button alert'])}}
                {!!Form::close()!!} </td>
        </tr>

    @endforeach
  
@endif
</table>
