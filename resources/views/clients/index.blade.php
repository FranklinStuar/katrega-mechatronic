@extends('layout.app')
@section('title-tab') Clientes @endsection
@section('title-page') Clientes @endsection
@section('breadcrumb-items')
    <li class="breadcrumb-item">
        <!-- if breadcrumb is single--><span>Home</span>
    </li>
@endsection

@section('content')
<div class="card">
    <div class="card-header">
      <ul class="nav nav-pills card-header-pills">
        <li class="nav-item">
          <a class="nav-link" href="{{route("clients.create")}}">
          <i class="fas fa-plus"></i>
          Nuevo Cliente</a></li>
      </ul>
    </div>
    <div class="card-body">
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">Identificación</th>
              <th scope="col">Nombre</th>
              <th scope="col">Tipo de cliente</th>
              <th scope="col">Teléfono</th>
              <th scope="col">email</th>
              <th scope="col">Estado</th>
              <th scope="col">Acciones</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($clients as $client)
                
            <tr>
              <td>{{$client->identification}}</td>
              <td>{{$client->name}}</td>
              <td><span class="text-success">@if($client->type == "person") Persona @elseif($client->type == "company") Empresa @else No registrado @endif</span> </td>
              <td>{{$client->phone}}</td>
              <td>{{$client->email}}</td>
              <td><span class="@if($client->isactive) text-success @else text-danger @endif">@if($client->isactive) Activo @else Inactivo @endif</span> </td>
              <td>
                <a href="{{route("clients.edit",$client->id)}}" class="btn"><i class="fas fa-pencil-alt"></i></a>
                <a href="{{route("clients.confirm-delete",$client->id)}}" class="btn"><i class="fas fa-trash"></i></a>
                <a href="{{route("clients.show",$client->id)}}" class="btn"><i class="fas fa-eye"></i></a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
    </div>
  </div>
@endsection