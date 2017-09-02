@extends('templates.home')

@section('content')

<div class="row">
    <div class="left">
      <h5 class="light">Rangos</h5>
    </div>
    <div class="right">
    </div>
</div>
<div class="row">
  <div class="col s12">
    <table class="highlight">
      <thead>
        <tr>
          <th>Codigo</th>
          <th>nombre</th>
       
        </tr>
      </thead>
      <tbody>
        @foreach ($rangos as $rango)
          <tr>
            <td>{{$rango->id}}</td>
            <td>{{$rango->nombre}}</td>
            <td>
            <a href="#"><span class="new badge blue" data-badge-caption="Editar"></span></a>
            <a href="#"><span class="new badge cyan"  data-badge-caption="Ver"></span></a>
            <a class="modal-trigger" href="#modal1"><span class="new badge red"  data-badge-caption="Eliminar"></span></a>
          </td>
          <form action="{{route('roles.destroy',$rango->id)}}" method="POST">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="DELETE">
               
                 <div id="modal1" class="modal">
                <div class="modal-content">
                  <!--<h4>Modal Header</h4>-->
                  <h4 class="center-align">Desea elminarlo ? </h4>
                  <center> <i class="center-align medium material-icons">error_outline</i></center>
                  <p class="center-align">Nota: los cambios no pueden deshacerse </p>
                </div>
                <div class="modal-footer">
            <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat ">Cancelar</a>
            <button  class="btn red" type="submit" name="action">Eliminar</button>
              </div>
              
              </div>
          </form>
          
            
                    
          </tr>
        @endforeach
      </tbody>
    </table>
       
  </div>
  
</div>
<script src="{{URL::asset('js/sweetalert.min.js')}}"></script>
@include('sweet::alert')
@endsection


