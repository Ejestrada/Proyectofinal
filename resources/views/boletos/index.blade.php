@extends('templates.home')
@section('content')
<div class="container">
  
	<div class="row">
		<form action="">
			<div class="col s6 center-align ">
				
				<p class="center-align caption">Tipo de visitante</p>
				@foreach ($visitante as $v)
					<input  class="with-gap" id="{{$v->nombre}}" type="radio" value="{{$v->id}}" name="group1">
					<label for="{{$v->nombre}}">{{$v->nombre}}</label>
				@endforeach
				
			</div>
			<div class="col s6 center-align ">
				
				<p class="center-align caption">Edad</p>
				@foreach ($rango as $r)
					<input  class="with-gap" id="{{$r->nombre}}" type="radio" value="{{$r->id}}" name="group2">
					<label for="{{$r->nombre}}">{{$r->nombre}}</label>
				@endforeach
				
			</div>
		</form>	
		
	</div>
	<div class="divider"></div>
	<form name="boleto">
		<div class="row">
		
			<div class="input-field col s6">
				<div class="col s12">
					<select id="ingreso1" onChange="boleteria()">
						<option value="" disabled selected>Tarifa</option>
						<option value="10">Q. 10 c/u</option>
						<option value="5">Q. 5 c/u</option>
						<option value="15">Q. 15 c/u</option>
					</select>
				</div>
			<div class="col s12">
				<input id="ingreso2" onKeyUp="boleteria()" type="number" class="validate" placeholder="Cantidad">
			</div>
			
			<div class="col s12 center-align">
				<button class="col s12 btn light-blue darken-4 waves-effect waves-light" type="submit" name="action">Enviar</button>
        	</div>
			
		</div>

			<div class="input-field col s6">
				<div class="card z-depth-3 hoverable">
					<div class="card-content">
						<h5 class="center-align">Monto</h5>
						<div class="divider light-blue darken-4"></div>
						<br>
						<h2 class="header center-align"><div id="resultado" name="resultado">Total</div></h2>
					</div>
				</div>
			</div>
		</div>
	</form>
	
	

</div>
@endsection
<script type="text/javascript">
function boleteria() {
	var ingreso1 = document.boleto.ingreso1.value;
	var ingreso2 = document.boleto.ingreso2.value;
	try{
	   //Calculamos el número escrito:
		ingreso1 = (isNaN(parseInt(ingreso1)))? 0 : parseInt(ingreso1);
		ingreso2 = (isNaN(parseInt(ingreso2)))? 0 : parseInt(ingreso2);
		document.getElementById('resultado').innerHTML = "Q." + ingreso1*ingreso2;
	}
	//Si se produce un error no hacemos nada
	catch(e) {}
 }
	
</script>

