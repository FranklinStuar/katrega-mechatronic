@extends('layout.app')
@section('title-tab') Nuevo Servicio @endsection
@section('title-page') Nuevo Servicio @endsection
@section('breadcrumb-items')
    <li class="breadcrumb-item">
        <!-- if breadcrumb is single--><span>Home</span>
    </li>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{route("services.store")}}">
                @csrf
                @include('services.form')
            </form>
        </div>
    </div>
@endsection