@extends('layout')

<div class="col-sm-12">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
</div>

<div>
    <a style="margin: 19px;" href="{{ route('contacts.create')}}" class="btn btn-primary">Nuevo Contacto</a>
    </div>  

@section('main')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Contactos</h1>    
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Nombre</td>
          <td>Apellido Paterno</td>
          <td>Apellido Materno</td>
          <td>Fecha de Nacimiento</td>
          <td>Email</td>
          <td>Direccion</td>
          <td>Ciudad</td>
          <td>Telefono</td>
          <td>Celular</td>
          <td colspan = 2>Acciones</td>
        </tr>
    </thead>
    <tbody>
        @foreach($contacts as $contact)
        <tr>
            <td>{{$contact->id}}</td>
            <td>{{$contact->nombre}}</td>
            <td>{{$contact->apellidoPaterno}}</td>
            <td>{{$contact->apellidoMaterno}}</td>
            <td>{{$contact->fechaNac}}</td>
            <td>{{$contact->email}}</td>
            <td>{{$contact->direccion}}</td>
            <td>{{$contact->telefono}}</td>
            <td>{{$contact->celular}}</td>
            <td>
                <a href="{{ route('contacts.edit',$contact->id)}}" class="btn btn-primary">Editar</a>
            </td>
            <td>
                <form action="{{ route('contacts.destroy', $contact->id)}}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="_method" value="delete" />
                  <button class="btn btn-danger" type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
@endsection