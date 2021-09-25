@extends('layout.app')
@section('title-tab') Nuevo Cliente @endsection
@section('title-page') Nuevo Cliente @endsection
@section('breadcrumb-items')
    <li class="breadcrumb-item">
        <!-- if breadcrumb is single--><span>Home</span>
    </li>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{route("clients.store")}}">
                @csrf
                @include('clients.form')
            </form>
        </div>
    </div>
@endsection