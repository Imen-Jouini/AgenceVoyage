@extends('index')
@section('content')
                <div class="jumbotron">
                  <fieldset>
                  <legend>Ajouter un Local</legend>
    <form action="{{route('local.store')}}" method="post" enctype="multipart/form-data">
              @csrf
<div class="form-group">
     <label for="exampleInputEmail1">nombreetoile:</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="nombreetoile"   >
        @error('nombreetoile')
    <p class="text-danger">{{$message}}}</p>
     @enderror
     <label for="exampleInputEmail1">Nom:</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="nom"   >
        @error('nom')
    <p class="text-danger">{{$message}}}</p>
     @enderror
     <label for="exampleInputEmail1">Capacité:</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="capacite"   >
        @error('capacite')
    <p class="text-danger">{{$message}}}</p>
     @enderror
      <label for="exampleInputEmail1">Description:</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="Description"   >
        @error('Description')
    <p class="text-danger">{{$message}}}</p>
     @enderror
     <label for="exampleInputEmail1">Adresse:</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="adresse"   >
        @error('adresse')
    <p class="text-danger">{{$message}}}</p>
     @enderror
      <label for="exampleInputEmail1">Prix:</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="prix"   >
        @error('prix')
    <p class="text-danger">{{$message}}}</p>
     @enderror

    <select name="categorie">
      @foreach($categorie as $cat)
      <option value="{{$cat->id}}">{{$cat->category}}</option>
      @endforeach
    </select>

    <select name="place">
      @foreach($place as $cat)
      <option value="{{$cat->id}}">{{$cat->place}}</option>
      @endforeach
    </select>

   
 </div>



 <button type="submit" class="btn btn-primary">Add</button>
                    </form>
                    </fieldset>
                  </div>     
        
                     
                 
    @endsection



   