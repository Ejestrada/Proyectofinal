@extends('templates.home')
@section('content')


    <div class="row scrollspy ">
        <div class="col s12 m12 l12">
        <div class="card-panel">
        <h3 class="center-align">Registro evento</h3>
        <div class="row">

          <form method="POST" action="{{route('Evento.store')}}">
           {{ csrf_field() }}
           {{ method_field('POST') }}
          <div class="row">
          <div class="input-field col s6">
            <i class="material-icons prefix">bookmark_border</i>
            <input id="icon_prefix" type="text"  name="nombre"  autofocus>
            @if ($errors->has('nombre'))
                <span class="help-block" style="color:red;">
                    <strong>{{ $errors->first('nombre') }}</strong>
                </span>
            @endif
            <label for="icon_prefix">Nombre</label>

          </div>

            <div class="input-field col s6">
              <i class="material-icons prefix">assignment</i>
              <input id="icon_prefix" type="text"  name="desc" >
              @if ($errors->has('desc'))
                  <span class="help-block" style="color:red;">
                      <strong>{{ $errors->first('desc') }}</strong>
                  </span>
              @endif
              <label for="icon_prefix">Descripcion</label>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s6">
            <i class="material-icons prefix">date_range</i>
			<input name="fechai" type="text" class="datepicker">
              
              @if ($errors->has('fechai'))
                  <span class="help-block" style="color:red;">
                      <strong>{{ $errors->first('fechai') }}</strong>
                  </span>
              @endif
              <label for="fechao">Fecha inicial</label>
            </div>
            <div class="input-field col s6">
            <i class="material-icons prefix">date_range</i>
			<input name="fechaf" type="text" class="datepicker">
			          
              
              @if ($errors->has('fechaf'))
                  <span class="help-block" style="color:red;">
                      <strong>{{ $errors->first('fechaf') }}</strong>
                  </span>
              @endif
              <label for="fechaf" >Fecha final</label>
            </div>

            <p class="center-align">
              <button class="waves-effect waves-light btn"  type="submit"><i class="material-icons right">send</i>enviar</button>
           </p>
          </div>
        </form>
        </div>
        </div>
        </div>
        </div>

@endsection
