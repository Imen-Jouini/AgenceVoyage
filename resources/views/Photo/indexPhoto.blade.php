
 @extends('index')
@section('content')
<a href="{{route('local.create')}}" class="btn btn-info">Add Photo</a>


<h1>List des Photo</h1>
                @if (count($photo)>0)
                <ul class="list-group">
                  
                   @foreach ($photo as $loca)
                   <li class="list-group-item"><a href="{{route('Photo.show',['photo'=>$loca->id])}}"> <p> 
                    {{$loca->photo}}</p></a></li>
                      
                     @endforeach
                    
                        </ul>
                     @else
                     <h2 class="text-center py-4">Il n'ya a pas de photo
                      <h2>
                        @endif



 
@endsection
