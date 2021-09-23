@extends('layout.app')
@section('title-tab') Editar Producto @endsection
@section('title-page') Editar Producto @endsection
@section('breadcrumb-items')
    <li class="breadcrumb-item">
        <!-- if breadcrumb is single--><span>Home</span>
    </li>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{route("products.destroy",$product->id)}}">
                @csrf
                @method('DELETE')
                <h5>Está a punto de eliminar el producto <strong>"{{$product->name}}"</strong>. ¿Desea continuar?</h5>
                <div>
                    <button type="submit" class="btn btn-danger text-light">Eliminar</button>
                    <a href="{{route("products.index")}}" class="btn btn-default">No eliminar</a>
                </div>
            </form>
        </div>
    </div>
@endsection