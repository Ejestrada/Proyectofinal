@extends('templates.home')
@section('content')
  <div class="row scrollspy ">
   <div class="col s12 m12 l12">
   <div class="card-panel">
   <h3 class="center-align">Datos curiosos</h3>


      <table class="highlight">
        <thead>
          <tr>
              <th>Dato Curioso</th>
          </tr>
        </thead>
        <tbody>

            @foreach ($datos as $dato)
            <tr>
            <td>{{$dato->dato}}</td>
            <td>
             <a class="modal-trigger" href="#modal{{$dato->id}}"><span class="new badge red"  data-badge-caption="Eliminar"></span></a>
              <a href="{{route('DatoCurioso.edit',$dato->id)}}" ><span class="new badge blue" data-badge-caption="Editar"></span></a>
            </td>
            </tr>

            <form action="{{route('DatoCurioso.destroy',$dato->id)}}" method="POST">
              {{csrf_field()}}
              {{ method_field('DELETE') }}
                  <div id="modal{{$dato->id}}" class="modal">
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

@endsection
