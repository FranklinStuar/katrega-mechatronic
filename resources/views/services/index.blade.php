@extends('layout.app')
@section('title-tab') Servicios @endsection
@section('title-page') Servicios @endsection
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
          <a class="nav-link" href="{{route("services.create")}}">
          <i class="fas fa-plus"></i>
          Nuevo Servicio</a></li>
      </ul>
    </div>
    <div class="card-body">
     
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">Código</th>
              <th scope="col">Descripción</th>
              <th scope="col">Unidad</th>
              <th scope="col">Compra</th>
              <th scope="col">Venta</th>
              <th scope="col">Estado</th>
              <th scope="col">Acciones</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($services as $service)
                
            <tr>
              <td>{{$service->code}}</td>
              <td>{{$service->name}}</td>
              <td>{{$service->measurement}}</td>
              <td>
                @if($service->purchase) <strong>Compra: </strong> {{$service->cost}} @else - @endif
              </td>
              <td>
                @if($service->sale) <strong>Venta: </strong> {{$service->price}} @else -  @endif
              </td>
              <td><span class="@if($service->isactive) text-success @else text-danger @endif">@if($service->isactive) Activo @else Inactivo @endif</span> </td>
              <td>
                <a href="{{route("services.edit",$service->id)}}" class="btn"><i class="fas fa-pencil-alt"></i></a>
                <a href="{{route("services.confirm-delete",$service->id)}}" class="btn"><i class="fas fa-trash"></i></a>
                <a href="{{route("services.show",$service->id)}}" class="btn"><i class="fas fa-eye"></i></a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
    </div>
  </div>
@endsection