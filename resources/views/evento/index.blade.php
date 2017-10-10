@extends('templates.home')
@section('content')
  <div class="row scrollspy ">
   <div class="col s12 m12 l12">
   <div class="card-panel">
   <h3 class="center-align">Listado Eventos</h3>
   <a href="{{route('Evento.create')}}" class="btn-floating btn-large waves-effect waves-light green"><i class="material-icons">add</i></a>

      <table class="highlight">
        <thead>
          <tr>
              <th>Nombre</th>
              <th>Descripcion</th>
              <th>Fecha inicial</th>
              <th>Fecha final</th>
              <th>Activo</th>
          </tr>
        </thead>
        <tbody>

            @foreach ($eventos as $evento)
            <tr>
            <td>{{$evento->nombre}}</td>
            <td>{{$evento->descripcion}}</td>
            <td>{{$evento->fecha_inicial}}</td>
            <td>{{$evento->fecha_final}}</td>
            <td>
              @if ($evento->activo === 1)
              <div class="switch">
                 <label>
                   Off
                   <input disabled type="checkbox" checked>
                   <span class="lever"></span>
                   On
                 </label>
               </div>

              @else
              <div class="switch">
                 <label>
                   Off
                   <input disabled type="checkbox">
                   <span class="lever"></span>
                   On
                 </label>
               </div>
              @endif

            <td>
             <a class="modal-trigger" href="#modal{{$evento->id}}"><span class="new badge red"  data-badge-caption="Eliminar"></span></a>
              <a href="{{route('Evento.edit',$evento->id)}}" ><span class="new badge blue" data-badge-caption="Editar"></span></a>
            </td>
            </tr>

            <form action="{{route('Evento.destroy',$evento->id)}}" method="POST">
              {{csrf_field()}}
              {{ method_field('DELETE') }}
                  <div id="modal{{$evento->id}}" class="modal">
                    <div class="modal-content">
                      <h4 class="center-align">Desea eliminar?</h4>
                      <center> <i class="center-align medium material-icons">error_outline</i></center>
                      <p class="center-align">Nota: los cambios no pueden deshacerse </p>
                    </div>
                    <div class="modal-footer">
                      <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat ">Cancelar</a>
                      <button class="btn red" type="submit" name="action">Eliminar</button>
                    </div>
                  </div>
            </form>
            @endforeach

        </tbody>
      </table>

  </div>
  </div>
  </div>

<script src="{{URL::asset('js/sweetalert.min.js')}}"></script>
  @include('sweet::alert')
  <script type="text/javascript">

  function activo(){
  var select = document.getElementById('tipoadquisicion');
  var id=select.value;
  var tipo= select.options[select.selectedIndex].text;
  if (tipo=="Heredado")
  {ocultar();}
  else {mostrar();}
  }
  </script>
@endsection
