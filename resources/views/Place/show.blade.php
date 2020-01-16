
  @extends('index')
@section('content')
                  
                  `place``photo`

                <div class="jumbotron">
                  <h1>Place</h1>
                </div>
                  <ul class="list-group">
                    <li class="list-group-item"><p>place: {{$place->place}}</p>
               
                
                  <p> <img src=" {{asset('images/'.$place->photo)}}"
                  alt="{{ $place->place}}"
                  class="img-thumbnail rounded"/> </p>

                  </li>
              
          <button type="submit" class="btn btn-danger">Supprimer</button>
        </form>
        
            </div>         
                 
    @endsection
