@extends('index')
@section('content')
<a href="{{route('place.create')}}" class="btn btn-info">Add place</a>


<h1>List des Place</h1>
                @if (count($places)>0)
                <ul class="list-group">
                  
                   @foreach ($places as $place)
                   <li class="list-group-item"><a href="Place/{{$place->id}}"> <p>
                    {{$place->place}}</p></a></li>
                  
                     @endforeach
                     <div class="py-3">
                      {{$places->links()}}
                    </div>
                        </ul>
                     @else
                     <h2 class="text-center py-4">Il n'ya a pas de clients
                      <h2>
                        @endif



 
@endsection