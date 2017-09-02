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
          <th>Estado</th>
          <th>Monto</th>
          <th>Inicio</th>
          <th>Final</th>
          <th>Rango</th>
          <th>Visitante</th>
       
        </tr>
      </thead>
      <tbody>
        @foreach ($result as $r)
          <tr>
            <td>{{$r->id}}</td>
            <td>{{$r->activo}}</td>
            <td>{{$r->monto}}</td>
            <td>{{$r->inicio}}</td>
            <td>{{$r->final}}</td>
            <td>{{$r->rangoa}}</td>
            <td>{{$r->visitante}}</td>
            <td>
            <a href="#"><span class="new badge blue" data-badge-caption="Editar"></span></a>
            <a href="#"><span class="new badge cyan"  data-badge-caption="Ver"></span></a>
          </td>
              
            
                    
          </tr>
        @endforeach
      </tbody>
    </table>
       
  </div>
  
</div>





@endsection