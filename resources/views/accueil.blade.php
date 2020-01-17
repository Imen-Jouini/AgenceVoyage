<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<h1>Accueil</h1>
@foreach($locals as $local)

{{$local->nom}}
{{$local->Place->place}}
<br>---<br>
@if(count($local->Photo)>0)
<br>first image<br>
{{$local->Photo->first()->photo}}
<br>
-------------------------------------<br>
multi image<br>
@foreach($local->Photo as $photo)
@if($loop->first)

	c est le premier tour
	{{$photo->photo}}

@else
<br>
{{$photo->photo}}
@endif
@endforeach
@endif
<br>
<br>
<hr>

@endforeach


</body>
</html>