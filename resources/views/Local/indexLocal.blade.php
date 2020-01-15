
                 @extends('index')
@section('content')
<a href="{{route('local.create')}}" class="btn btn-info">Add Local</a>


<h1>List des Place</h1>
                @if (count($local)>0)
                <ul class="list-group">
                  
                   @foreach ($local as $loca)
                   <li class="list-group-item"><a href="Place/{{$loca->id}}"> <p>
                    {{$loca->nom}}</p></a></li>
                   
                     @endforeach
                    
                        </ul>
                     @else
                     <h2 class="text-center py-4">Il n'ya a pas de locale
                      <h2>
                        @endif



 
@endsection
