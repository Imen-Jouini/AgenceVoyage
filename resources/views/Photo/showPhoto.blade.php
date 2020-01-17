@extends('index')
@section('content')
 @if (session('successNewClient'))


                <div class="jumbotron">
                  <h1>Client</h1>
                </div>
                  <ul class="list-group">
                    <li class="list-group-item">
         
                  <p> <img src=" {{asset ('images/'.$photo->photo)}}"
                  alt="{{ $client->prenom}}"
                  class="img-thumbnail rounded"/> </p>

                  </li>
              <div class="panel-footer py-3">      
         <a href="{{route('photo.edit',['photo'=>$photo->id])}}"class="btn btn-info">
         Edit</a>
         <form action="{{route('photo.destroy',['photo'=>$photo->id])}}"method="post">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">Supprimer</button>
        </form>
        
            </div>         
                 
    @endsection