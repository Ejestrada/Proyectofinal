@extends('templates.home')
@section('content')

    <div class="row scrollspy ">
        <div class="col s12 m12 l12">
        <div class="card-panel">
        <h3 class="center-align">Registro evento</h3>
        <div class="row">

          <form method="POST" action="{{route('Evento.update',$evento->id)}}">
            {{ csrf_field() }}
             {{ method_field('PUT') }}
             <div class="row">
               <div class=" col s6">

            <label for="icon_prefix">Activo</label>
               <div class="switch">
                 <input name="sino" id="sino" type="hidden" value="{{$evento->activo}}">
                 <label>
                   Off
                 @if ($evento->activo === 1)
                 <input onclick="activo()" name="mySwitch" id="mySwitch" type='checkbox' checked>
                  @elseif ($evento->activo== 0)
                  <input onclick="activo()" name="mySwitch" id="mySwitch" type='checkbox' >
                  @endif
                  <span class="lever"></span>
                  On
                </label>
              </div>
            </div >
            </div>
           </div>


          <div class="row">
          <div class="input-field col s6">
            <i class="material-icons prefix">bookmark_border</i>
            <input id="icon_prefix" type="text"  name="nombre" value="{{$evento->nombre}}"  autofocus>
            @if ($errors->has('nombre'))
                <span class="help-block" style="color:red;">
                    <strong>{{ $errors->first('nombre') }}</strong>
                </span>
            @endif
            <label for="icon_prefix">Nombre</label>

          </div>

            <div class="input-field col s6">
              <i class="material-icons prefix">assignment</i>
              <input id="icon_prefix" type="text"  name="desc" value="{{$evento->descripcion}}">
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
              <i class="material-icons prefix">av_timer</i>
              <input id="icon_prefix" type="text" name="fechai" value="{{$evento->fecha_inicial}}">
              <label for="icon_prefix">Fecha inicial</label>
            </div>
            <div class="input-field col s6">
              <i class="material-icons prefix">av_timer</i>
              <input id="icon_prefix" type="text"  name="fechaf" value="{{$evento->fecha_final}}">
              <label for="icon_prefix" >Fecha final</label>
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

        <script type="text/javascript">
    function activo()
    {
var checkbox = document.getElementById('mySwitch');
if (checkbox.checked==true)
 {
document.getElementById("sino").value =1 ;
}
else {
  document.getElementById("sino").value =0;
}

    }


        </script>
@endsection
