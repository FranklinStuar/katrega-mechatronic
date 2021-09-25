@extends('layout.app')
@section('title-tab') Editar Servicio @endsection
@section('title-page') Editar Servicio @endsection
@section('breadcrumb-items')
    <li class="breadcrumb-item">
        <!-- if breadcrumb is single--><span>Home</span>
    </li>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{route("services.update",$service->id)}}">
                @csrf
                @method('PUT')
                @include('services.form')
            </form>
        </div>
    </div>
@endsection