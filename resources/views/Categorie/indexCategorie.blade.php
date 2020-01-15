@extends('index')
@section('content')
 <a href="{{route('categorie.create')}}" class="btn btn-info">Add categorie</a>

<h1>List des Categorie</h1>
                @if (count($categories)>0)
                <ul class="list-group">
                  
                   @foreach ($categories as $category)
                   <li class="list-group-item"><a href="Categorie/{{$category->id}}"> <p>
                    {{$category->category}}</p></a></li>
                  
                     @endforeach
                     <div class="py-3">
                      {{$categories->links()}}
                    </div>
                        </ul>
                     @else
                     <h2 class="text-center py-4">Il n'ya a pas de clients
                      <h2>
                        @endif



 
@endsection






