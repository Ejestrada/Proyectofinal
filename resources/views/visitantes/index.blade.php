@extends('templates.home')

@section('content')
<div class="container">
<div class="row">
    <div class="left"><br>
      <h5 class="light">Categoria de Visitantes</h5>
    </div>
    <div class="right"><br>
      <a href="#modal2" class="modal-trigger btn-floating tooltipped btn-large waves-effect waves-light  light-blue accent-4" data-position="bottom" data-delay="50" data-tooltip="Agregar"><i class="material-icons">add</i></a>
    </div>
</div>

<div class="row">
  
  <div class="col s12">
    <div class=card>
      <table class="centered highlight responsive-table">
        <thead>
          <tr>
          <th>Codigo</th>
          <th>nombre</th>
          <th>Fecha Creacion</th>
          <th>Actualizacion</th>
          <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($visitantes as $v)
            <tr>
            <td>{{$v->id}}</td>
            <td>{{$v->nombre}}</td>
            <td>{{$v->created_at->format('d/m/Y')}}</td>
            <td>{{$v->updated_at->format('d/m/Y')}}</td>
            <td>
            <a class="modal-trigger" href="{{route('visitantes.edit',$v->id,$v->nombre)}}"><span class=" new badge blue" data-badge-caption="Editar"></span></a>
            <a class="modal-trigger" href="#modal1"><span class="new badge red"  data-badge-caption="Eliminar"></span></a>
            </td>
            <form action="{{route('visitantes.destroy',$v->id)}}" method="POST">
                {{csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE">
                    <div id="modal1" class="modal">
                      <div class="modal-content">
                        <h4 class="center-align">Desea eliminar la categoria ?</h4>
                        <center> <i class="center-align medium material-icons">error_outline</i></center>
                        <p class="center-align">Nota: los cambios no pueden deshacerse </p>
                      </div>
                      <div class="modal-footer">
                        <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat ">Cancelar</a>
                        <button class="btn red" type="submit" name="action">Eliminar</button>
                      </div>
                    </div>
              </form>
              
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

<div id="modal2" class="modal">
  <div class="modal-content">
    <h4 class="center-align">Categoria de Visitantes</h4>
    <form class="col s12" method="POST" action="{{route('visitantes.store')}}">
      {{ csrf_field() }}
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">group_add</i>
          <input name="uname" id="icon_prefix" type="text" class="validate">
          <label for="icon_prefix">Nombre</label>
        </div>
        <div class="input-field col s12 center-align">
          <button class="btn waves-effect waves-light  light-blue accent-4" type="submit" name="action">Agregar</button>
        </div>
      </div>
    </form>
  </div>
</div>




    
</div></div>
<script src="{{URL::asset('js/sweetalert.min.js')}}"></script>
@include('sweet::alert')
@endsection

