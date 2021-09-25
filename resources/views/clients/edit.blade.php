@extends('layout.app')
@section('title-tab') Editar Cliente @endsection
@section('title-page') Editar Cliente @endsection
@section('breadcrumb-items')
    <li class="breadcrumb-item">
        <!-- if breadcrumb is single--><span>Home</span>
    </li>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{route("clients.update",$client->id)}}">
                @csrf
                @method('PUT')
                @include('clients.form')
            </form>
        </div>
    </div>
@endsection