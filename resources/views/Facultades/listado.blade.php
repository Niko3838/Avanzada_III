@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lsitado de Facultades </h1>
@stop

@section('content')
<div class="text-right">
    <button type="button" class="btn btn-success">
        Agregar <i class="fas fa-user"></i>
    </button>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Codigo</th>
      <th scope="col">Nombre</th>
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>219036025 </td>
      <td>NIXON BENAVIDES</td>
      <td>  
            <button type="button" class="btn btn-primary">
                <i class="fas fa-pencil-alt"></i> 
            </button>
            <button type="button" class="btn btn-danger">
                <i class="fas fa-trash"></i> 
            </button>
      </td>
    </tr>
    
  </tbody>
</table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop