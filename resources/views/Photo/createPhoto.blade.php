@extends('index')
@section('content')
                <div class="jumbotron">
                  <fieldset>
                  <legend>Creation Nouvelle Photo</legend>
    <form action="{{route('photo.store')}}" method="post" enctype="multipart/form-data">
              @csrf
<div class="form-group">
     <label for="exampleInputEmail1">photo:</label>
    <input type="file" class="form-control" id="exampleInputEmail1" name="photo[]" multiple>
        @error('photo')
    <p class="text-danger">{{$message}}}</p>

 </div>
    @enderror
    <div class="form-group">
     <label for="exampleInputEmail1">local_id</label>
    <select name="local">
      @foreach($local as $cat)
      <option value="{{$cat->id}}">{{$cat->nom}}</option>
      @endforeach
    </select>
 </div>



 <button type="submit" class="btn btn-primary">Add</button>
                    </form>
                    </fieldset>
                  </div>     
        
                     
                 
    @endsection
