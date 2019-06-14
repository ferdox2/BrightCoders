@extends('layout') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Actualizar Contacto</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('contacts.update', $contact->id) }}">
        <input type="hidden" name="_method" value="patch" /> 
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">    
              <label for="nombre">Nombre:</label>
              <input type="text" class="form-control" name="nombre" value={{ $contact->nombre }}/>
          </div>

          <div class="form-group">
              <label for="apellidoPaterno">Apellido Paterno:</label>
              <input type="text" class="form-control" name="apellidoPaterno" value={{ $contact->apellidoPaterno }}/>
          </div>

          <div class="form-group">
            <label for="apellidoMaterno">Apellido Materno:</label>
            <input type="text" class="form-control" name="apellidoMaterno" value={{ $contact->apellidoMaterno }}/>
          </div>

          <div class="form-group">
            <label for="fechaNac">Fecha de Nacimiento:</label>
            <input type="date" class="form-control" name="fechaNac" value={{ $contact->fechaNac }}/>
          </div>

          <div class="form-group">
              <label for="email">Email:</label>
              <input type="text" class="form-control" name="email" value={{ $contact->email }}/>
          </div>

          <div class="form-group">
            <label for="direccion">Direccion:</label>
            <input type="text" class="form-control" name="direccion" value={{ $contact->direccion }}/>
          </div>

          <div class="form-group">
              <label for="ciudad">Ciudad:</label>
              <input type="text" class="form-control" name="ciudad" value={{ $contact->ciudad }}/>
          </div>

          <div class="form-group">
              <label for="telefono">Telefono:</label>
              <input type="text" class="form-control" name="telefono" value={{ $contact->telefono }}/>
          </div>

          <div class="form-group">
              <label for="celular">Celular:</label>
              <input type="text" class="form-control" name="celular" value={{ $contact->celular }}/>
          </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</div>
@endsection