@extends('templates.home')
@section('content')

    <div class="row scrollspy ">
        <div class="col s12 m12 l12">
        <div class="card-panel">
        <h3 class="center-align">Actualizar Dato</h3>
        <div class="row">

          <form method="POST" action="{{route('DatoCurioso.update',$dato->id)}}">
            {{ csrf_field() }}
             {{ method_field('PUT') }}
          <div class="row">
          <div class="input-field col s6">
            <i class="material-icons prefix">bookmark_border</i>
            <input id="icon_prefix" type="text"  name="dato" value="{{$dato->dato}}"  autofocus>
            @if ($errors->has('dato'))
                <span class="help-block" style="color:red;">
                    <strong>{{ $errors->first('dato') }}</strong>
                </span>
            @endif
            <label for="icon_prefix">Dato</label>

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
