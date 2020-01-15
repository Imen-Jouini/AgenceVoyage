@extends('index')
@section('content')
                <div class="jumbotron">
                  <fieldset>
                  <legend>Creation Nouvelle Categorie</legend>
    <form action="{{route('categorie.store')}}" method="post" enctype="multipart/form-data">
              @csrf
<div class="form-group">
     <label for="exampleInputEmail1">category:</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="category"   >
        @error('prenom')
    <p class="text-danger">{{$message}}}</p>


    @enderror
 </div>



 <button type="submit" class="btn btn-primary">Add</button>
                    </form>
                    </fieldset>
                  </div>     
        
                     
                 
    @endsection



   