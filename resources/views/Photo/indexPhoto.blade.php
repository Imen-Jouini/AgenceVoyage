
 @extends('index')
@section('content')
<a href="{{route('photo.create')}}" class="btn btn-info">Add Photo</a>


<h1>List des Photo</h1>
              
                <ul class="list-group">
                  
                   @foreach ($photo as $loca)
                   <a href="{{route('photo.show',['photo'=>$loca->id])}}"> image
                    </a>
                      <td><img src="{{asset('/images/'.$loca->photo)}}"></td>
                     @endforeach
                    
                    
               



 
@endsection
