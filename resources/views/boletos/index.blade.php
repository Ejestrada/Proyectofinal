@extends('templates.home')

@section('content')
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    

  
    <div class="row">
      
      <div class="col s6 center-align ">
        <p class="center-align caption">Tipo de visitante</p>
          @foreach ($visitante as $v)
            <input  class="with-gap visitante" id="{{$v->nombre}}" type="radio" value="{{$v->id}}" name="group1">
            <label for="{{$v->nombre}}">{{$v->nombre}}</label>
          @endforeach
      </div>

      <div class="col s6 center-align ">
        <p class="center-align caption">Rango de Edad</p>
          @foreach ($rango as $r)
            <input  class="with-gap rango" id="{{$r->nombre}}" type="radio" value="{{$r->id}}" name="group2">
            <label for="{{$r->nombre}}">{{$r->nombre}}</label>
          @endforeach
      </div>
    
    </div>
   

  <div class="row">
    
      <div class="col s6">
        <div class="row">
          <div class="col s12">
            <h5 class="light">Precio:</h5>
          </div>
         
          <div class="col s12" id='town'>
           
          </div>
         
        </div>
        <div class="row">
          <form name="boleto">
            <div class="input-field col s10 center-align">
              <input id="ingreso2" onKeyUp="boleteria()" type="number" class="validate" placeholder="Cantidad">
            </div>
            <div class="input-field col s10 center-align">
              <input id="ingreso3" onKeyUp="nombre()" type="text" class="validate" placeholder="Nombre">
            </div>
            <div class="input-field col s6 left-align">
              <button class="btn waves-effect waves-light" type="submit" name="action">Enviar</button>
            </div>
          </form>  
        </div>
      </div>
    
    <div class="col s6 m6">
      <div class="card z-depth-5">
        <div class="card-content">
        <div class="card-image">
          <img style="margin-top:-1cm;margin-bottom:-0.5cm;" src="{{URL::asset('Images/museologo.png')}}">
        </div>
          
          <p id="date" class="caption center-align"></p>
        </div>
        <div class="row ">
        <div class="col s6 offset-s3 divider"></div>
        </div>
        <div class="  ">
          <div class="row">
            <div class="col s6">
              <h5 class="light right-align">Total:</h5>
            </div>
            <div class="col s6">
              <h5 class="light"><div id="resultado" name="resultado">Q. 0</div></h5>
            </div>
          </div>
          <div class="row">
            <div class="col s6 offset-s3">
              <h5 class="light center-align"><div id="resultado2" name="resultado2">Nombre</div></h5>
            </div>
          </div>
          <p class="center-align">www.museodehistoriaxela.com</p>
        <br>
      </div>
      </div>
    </div>
    
  </div>
    
  



   
       

<script type="text/javascript">
function nombre(){
  var ingreso3 = document.boleto.ingreso3.value;
  document.getElementById('resultado2').innerHTML = ingreso3;

}
function boleteria() 
  {
    
    var radios = document.getElementsByName('grupo');
    
    for (var i = 0, length = radios.length; i < length; i++) {
    if (radios[i].checked) {
        
        var ingreso1 = radios[i].value;
        
        break;
    }
  }
  var ingreso2 = document.boleto.ingreso2.value;
  
  console.log(ingreso1);
  console.log(ingreso2);
  try
    {
	    ingreso1 = (isNaN(parseInt(ingreso1)))? 0 : parseInt(ingreso1);
		  ingreso2 = (isNaN(parseInt(ingreso2)))? 0 : parseInt(ingreso2);
		  document.getElementById('resultado').innerHTML = "Q." + ingreso1*ingreso2;
      
	  }
    catch(e) {}


 }

$(document).ready(function(){
  var currentDate = new Date()
  var day = currentDate.getDate()
  var month = currentDate.getMonth() + 1
  var year = currentDate.getFullYear()
  document.getElementById("date").innerHTML = (day + "/" + month + "/" + year);
  var prod_id="";
  
  

	$(document).on('change','.visitante',function(event){
		
		$(document).on('change','.rango',function () {
            prod_id=$(this).val();
            var a=$(this).parent();
           
			
			$.get("/find/"+event.target.value+""+prod_id, function(response,state){
			console.log(response);
			
			$("#town").empty();
			for(i=0;i<response.length;i++)
      {
			  $("#town").append("<input name='grupo' onClick='boleteria()' type='radio' value='"+response[i].monto+"' id='"+response[i].id+"'>"+"<label for='"+response[i].id+"'>"+response[i].monto+"</label></p>");
        
       }
		});
	});
		
	});
	
    
});

</script>
@endsection
