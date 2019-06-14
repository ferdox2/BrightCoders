@extends('layout')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Agregar Contacto</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br/>
    @endif
      <form method="post" action="{{ route('contacts.store') }}">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">

          <div class="form-group">    
              <label for="nombre">Nombre:</label>
              <input type="text" class="form-control" name="nombre"/>
          </div>

          <div class="form-group">
              <label for="apellidoPaterno">Apellido Paterno:</label>
              <input type="text" class="form-control" name="apellidoPaterno"/>
          </div>

          <div class="form-group">
            <label for="apellidoMaterno">Apellido Materno:</label>
            <input type="text" class="form-control" name="apellidoMaterno"/>
          </div>

          <div class="form-group">
            <label for="fechaNac">Fecha de Nacimiento:</label>
            <input type="date" class="form-control" name="fechaNac"/>
          </div>

          <div class="form-group">
              <label for="email">Email:</label>
              <input type="text" class="form-control" name="email"/>
          </div>

          <div class="form-group">
            <label for="direccion">Direccion:</label>
            <input type="text" class="form-control" name="direccion"/>
          </div>

          <div class="form-group">
              <label for="ciudad">Ciudad:</label>
              <input type="text" class="form-control" name="ciudad"/>
          </div>

          <div class="form-group">
              <label for="telefono">Telefono:</label>
              <input type="text" class="form-control" name="telefono"/>
          </div>

          <div class="form-group">
              <label for="celular">Celular:</label>
              <input type="text" class="form-control" name="celular"/>
          </div>                         
          <button type="submit" class="btn btn-primary">Agregar Contacto</button>
      </form>
  </div>
</div>
</div>
@endsection