
<!DOCTYPE HTML>
<!-- Website Template by freewebsitetemplates.com -->
<html>
<head>
    <meta charset="UTF-8">
    <title>ZiZurz Website Template</title>
    <link rel="stylesheet" href="{{asset('cssUser/style.css')}}" type="text/css">
</head>
<body>
    <div id="header">
        <div class="section">
            <div class="logo">
                <a href="index.html">Voyage</a>
            </div>
            <ul>
                <li class="selected">
                    <a href="index.html">home</a>
                </li>
                <li>
                    <a href="about.html">Reservation</a>
                </li>
                <li>
                    <a href="hairstyle.html">Offre</a>
                </li>
               
                <li>
                    <a href="contact.html">contact</a>
                </li>
            </ul>
        </div>
        <div class="article">
           
            <h1>Voyager en meilleurs prix</h1>
        </div>
    </div>
    <div id="body">
        <ul>
            <li>
                @foreach($locals as $local)

                @foreach($local->Photo as $photo)
                 @if($loop->first)
                <img src="{{asset('images/'.$photo->photo)}}" alt="image">
                <a href="{{route('reservation.show',$local->id)}}"><p>Reserver</p></a>
                <a href=""><p>Details</p></a>
                @endif
                @endforeach
                
              
                @endforeach
            </li>
            
          </ul>

           







       
     </div>
        </div>
    
</body>
</html>







