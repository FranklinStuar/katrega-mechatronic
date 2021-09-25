@extends('layout.app')
@section('title-tab') cliente - {{$client->name}} @endsection
@section('title-page') Información del cliente @endsection
@section('breadcrumb-items')
    <li class="breadcrumb-item">
        <!-- if breadcrumb is single--><span>Home</span>
    </li>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Identificación *</label>
                    <span class="form-control">{{$client->identification}}</span>
                    <div class="form-text">Cédula / RUC / otro medio de indentificación</div>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Nombre*</label>
                    <span class="form-control">{{$client->name}}</span>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Teléfono *</label>
                    <span class="form-control">{{$client->phone}}</span>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Dirección *</label>
                    <span class="form-control">{{$client->address}}</span>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Email *</label>
                    <span class="form-control">{{$client->email}}</span>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Tipo de cliente *</label>
                    <span class="form-control">@if($client->type == "person") Persona @elseif($client->type == "company") Empresa @else No registrado @endif</span>
                    <div id="identificationHelp" class="form-text">Elija si el cliente es una persona o una empresa</div>
                </div>
            </div>
            <hr>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="isactive" value="1" id="isactive" @if($client->isactive) checked @endif disabled>
                <label class="form-check-label">
                    Activo (Disponibilidad para usar el cliente en futuras transacciones)
                </label>
            </div>            
            <hr>
            















            <a href="{{route("clients.index")}}" class="btn btn-dark">Volver al listado</a>
            <a href="{{route("clients.edit",$client->id)}}" class="btn btn-info"><i class="fas fa-pencil-alt"></i> Editar</a>
            <a href="{{route("clients.confirm-delete",$client->id)}}" class="btn btn-danger"><i class="fas fa-trash"></i> Eliminar</a>
        </div>
    </div>
@endsection