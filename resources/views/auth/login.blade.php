<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login form</title>
  <script src="https://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>

<link href='https://fonts.googleapis.com/css?family=Raleway:300,200' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">


  <link rel="stylesheet" href="css/style.css">
<link href="{{URL::asset('logincss/css/style.css')}}" rel="stylesheet">

</head>

<body>
  <div class="menu">
  <ul class="mainmenu clearfix">
    <li class="menuitem">Well</li>
    <li class="menuitem">how</li>
    <li class="menuitem">about</li>
    <li class="menuitem">that?</li>
  </ul>
</div>

<div class="form">
    <form method="POST" action="{{route('login')}}">
      {{ csrf_field() }}
      {{ method_field('POST') }}
  <div class="forceColor"></div>
  <div class="topbar">
    <div class="spanColor"></div>
      <input type="text" class="input" id="name" name="name" placeholder="Usuario"/>
    <input type="password" class="input" id="password" name="password" placeholder="Contraseña"/>
  </div>
  <button class="submit" id="submit" >Iniciar Sesion</button>
</form>
</div>
  <script src="{{URL::asset('logincss/js/index.js')}}"></script>


</body>
</html>