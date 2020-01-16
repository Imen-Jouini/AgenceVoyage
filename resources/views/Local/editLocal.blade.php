@extends('index')
@section('content')
                <div class="jumbotron">
                  <fieldset>
                  <legend>Modifier Local</legend>
                  <form action="{{route('local.update',['local'=>$local->id])}}" method="post">
                    @csrf
                    @method('PATCH')
                       <div class="form-group">

    <label for="exampleInputEmail1">Nombre Etoile:</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="nbretoile" value="{{$local->nbretoile}}">
     @error('nbretoile')
    <p class="text-danger">{{$message}}}</p>

    @enderror
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Nom:</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="nom" value="{{$local->nom}}">
     @error('nom')
    <p class="text-danger">{{$message}}}</p>

    @enderror
  </div>
   <div class="form-group">
       <label for="exampleInputEmail1">Capacité:</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="capacite" value="{{$local->capacite}}">
     @error('capacite')
    <p class="text-danger">{{$message}}}</p>

    @enderror
  </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Déscription:</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="description" value="{{$local->description}}">
     @error('capacite')
    <p class="text-danger">{{$message}}}</p>

    @enderror
  </div>
   <div class="form-group">
        <label for="exampleInputEmail1">Adresse:</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="adresse" value="{{$local->adresse}}">
     @error('capacite')
    <p class="text-danger">{{$message}}}</p>

    @enderror
  </div>
    <div class="form-group">
<select name="categorie">
      @foreach($categorie as $cat)
      <option value="{{$cat->id}}">{{$cat->category}}</option>
      @endforeach
    </select>
</div>
 <div class="form-group">
    <select name="place">
      @foreach($place as $cat)
      <option value="{{$cat->id}}">{{$cat->place}}</option>
      @endforeach
    </select>
</div>
 <div class="form-group">
    <label for="exampleInputEmail1">prix:</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="prix" value="{{$local->prix}}">
     @error('capacite')
    <p class="text-danger">{{$message}}}</p>

    @enderror
</div>
      <button type="submit" class="btn btn-primary">Enregistrer</button>
      <button type="submit" class="btn btn-primary">Annuler</button>

                    </form>
                    </fieldset>
                  </div>     
        
                     
  @endsection               

  