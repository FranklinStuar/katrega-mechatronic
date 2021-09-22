@extends('layout.app')
@section('title-tab') Nuevo Producto @endsection
@section('title-page') Nuevo Producto @endsection
@section('breadcrumb-items')
    <li class="breadcrumb-item">
        <!-- if breadcrumb is single--><span>Home</span>
    </li>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{route("products.store")}}">
                @csrf
                @include('products.form')
            </form>
        </div>
    </div>
@endsection