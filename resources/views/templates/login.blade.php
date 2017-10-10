<!DOCTYPE html>
<html lang="es">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <title>Museo de Historia</title>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="theme-color" content="#1b5a6b">
    
    <link rel="icon" href="{{URL::asset('Images/mphoto.png')}}" sizes="32x32">
    <link href="{{URL::asset('css/prism.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/sweetalert.css')}}" rel="stylesheet">
    <link href="{{URL::asset('css/ghpages-materialize.css')}}" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <style media="screen">
      .waves-effect.waves-sbx .waves-ripple {background-color: rgba(2, 86, 156, 1);}
      body {
        display: flex;
        min-height: 100vh;
        flex-direction: column;
        
      }
      main {flex: 1 0 auto;}

    </style>
</head>

<body>
<div class="container"><br>


<!-- Page Content goes here -->
<div class="row">

  <div class="col s4"></div>
  
  <div class="col s4 m4">
    <div class="card">
      <div class="card-content center-align black-text">
        <i class="large material-icons black-text">account_balance</i>
        <span class="card-title center-align">Card Title</span>

    <div class="row">
      <form class="col s12">
        <div class="input-field col s12">
          <input placeholder="Placeholder" id="first_name" type="text" class="validate">
        </div>
        
        <div class="input-field col s12">
          <input placeholder="Placeholder" id="first_name" type="text" class="validate">
        </div>
        
        <div class="input-field col s12">
          <button class="col s12 btn waves-effect waves-light" type="submit" name="action">Submit</button>
        </div>
              
      </div>
      
            
         </form></div>   
          </div>
      </div>
      <div class="col s4">
        <!-- Promo Content 3 goes here -->
      </div>

    </div>


</div>


   <script src="{{URL::asset('js/sweetalert.min.js')}}"></script>
    <script src="{{URL::asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{URL::asset('js/jquery.timeago.min.js')}}"></script>
    <script src="{{URL::asset('js/prism.js')}}"></script>
    <script src="{{URL::asset('jade/lunr.min.js')}}"></script>
    <script src="{{URL::asset('jade/search.js')}}"></script>
    <script src="{{URL::asset('bin/materialize.js')}}"></script>
    <script src="{{URL::asset('js/init.js')}}"></script>
</body>
    <!--  Scripts-->
   

</html>