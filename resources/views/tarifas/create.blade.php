@extends('templates.home')

@section('content')
<div class="container">
  
	<div class="row">
  
		<div class="center"><br>
    		
			<h5 class="light">Ingreso de Tarifas</h5>
    	
		</div>

  	</div>

  <div class="card z-depth-4">
	  
		<div class="card-image">
	  	
		  <a href="" class="btn-floating halfway-fab tooltipped waves-effect waves-light light-blue accent-4" data-position="bottom" data-delay="50" data-tooltip="Regresar"><i class="material-icons">arrow_back</i></a>
    	
		</div>
	   
        <div class="container">  
            
						<div class="row">
        
						<form class="col s12" method="POST" action="{{route('tarifas.store')}}"><br>
      				{{ csrf_field() }}
                
                    <div class="row">
                        
												<div class="input-field col s6">
														<i class="material-icons prefix">format_list_numbered</i>
                            <input name="uname" type="text" class="validate">
                            <label for="uname">Monto</label>
                        </div>
                        <div class="input-field col s6">
													<i class="material-icons prefix">person</i>
													<select name="visitante" id="visitante" class="validate">
														<option id= value="" disabled selected>Tipo visitante</option>
															@foreach ($visitante as $v)
																<option value="{{$v->id}}">{{$v->nombre}}</option>
															@endforeach
													</select>
                        </div>

                    </div>
                    
										<div class="row">
                    	
											<div class="input-field col s6">
												<i class="material-icons prefix">access_time</i>
												<select name="rango" id="rango" class="validate">
													<option value="" disabled selected>Rango de edad</option>
														@foreach ($rango as $r)
															<option value="{{$r->id}}">{{$r->nombre}}</option>
														@endforeach
                        </select> 
                      </div>
                        
											<div class="input-field col s6">
													<i class="material-icons prefix">date_range</i>
													<input name="date" type="text" class="datepicker">
													<label for="dateone">Fecha inicial</label>
                      </div>

                  	</div>
							
										<div class="row">
                    
											<div class="input-field col s6">
											<i class="material-icons prefix">date_range</i>
											<input id="datetwo" name="datetwo" type="text" class="datepicker">
											<label for="datetwo">Fecha final</label>
											
											  </div>
                        
											<div class="input-field col s6 center-align">
												<button class="btn waves-effect waves-light light-blue accent-4" type="submit" name="action">Registrar
											</button>
                    </div>

                  </div>  
                    
                </form>
            </div>
        </div>
    </div>  

</div>


@endsection
