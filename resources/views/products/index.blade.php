@extends('layout.app')
@section('title-tab') Productos @endsection
@section('title-page') Productos @endsection
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
          <a class="nav-link" href="{{route("products.create")}}">
          <i class="fas fa-plus"></i>
          Nuevo Producto</a></li>
      </ul>
    </div>
    <div class="card-body">
     
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">Código</th>
              <th scope="col">Descripción</th>
              <th scope="col">Stock</th>
              <th scope="col">Compra</th>
              <th scope="col">Venta</th>
              <th scope="col">Estado</th>
              <th scope="col">Acciones</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($products as $product)
                
            <tr>
              <td>{{$product->code}}</td>
              <td>{{$product->name}}</td>
              <td>{{$product->stock}} ({{$product->measurement}})</td>
              <td>
                @if($product->purchase) <strong>Compra: </strong> {{$product->cost}} @else - @endif
              </td>
              <td>
                @if($product->sale) <strong>Venta: </strong> {{$product->price}} @else -  @endif
              </td>
              <td><span class="@if($product->isactive) text-success @else text-danger @endif">@if($product->isactive) Activo @else Inactivo @endif</span> </td>
              <td>
                <a href="{{route("products.edit",$product->id)}}" class="btn"><i class="fas fa-pencil-alt"></i></a>
                <a href="#" class="btn"><i class="fas fa-trash"></i></a>
                <a href="#" class="btn"><i class="fas fa-eye"></i></a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
    </div>
  </div>
@endsection