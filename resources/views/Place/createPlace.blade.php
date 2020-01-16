@extends('index')
@section('content')
                <div class="jumbotron">
                  <fieldset>
                  <legend>Creation Nouvelle Categorie</legend>
    <form action="{{route('place.store')}}" method="post" enctype="multipart/form-data">
              @csrf
<div class="form-group">
     <label for="exampleInputEmail1">place:</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="place"   >
        @error('place')
    <p class="text-danger">{{$message}}}</p>
   

    @enderror
 </div>
<div class="form-group">
     <label for="exampleInputEmail1">photo:</label>
    <input type="file" class="form-control" id="photo" name="photo"   >
        @error('photo')
    <p class="text-danger">{{$message}}}</p>
   

    @enderror
 </div>


 <button type="submit" class="btn btn-primary">Add</button>
                    </form>
                    </fieldset>
                  </div>     
        
                     
                 
    @endsection



