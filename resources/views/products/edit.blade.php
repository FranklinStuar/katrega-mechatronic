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
            <form method="POST" action="{{route("products.update",$product->id)}}">
                @csrf
                @method('PUT')
                @include('products.form')
            </form>
        </div>
    </div>
@endsection