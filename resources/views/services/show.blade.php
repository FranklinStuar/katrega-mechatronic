@extends('layout.app')
@section('title-tab') servicio - {{$service->name}} @endsection
@section('title-page') Información de servicio @endsection
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
                    <label for="code" class="form-label">Código *</label>
                    <div>
                        <span class="form-control">{{$service->code}}</span>
                    </div>
                    <div id="codeHelp" class="form-text">Código interno. Se genera automáticamente o se puede agregar uno personalizado</div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="name" class="form-label">Nombre / descripción *</label>
                    <div>
                        <span class="form-control">{{$service->name}}</span>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="measurement" class="form-label">Medida Unitario *</label>
                    <div>
                        <span class="form-control">{{$service->measurement}}</span>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="tax" value="1" id="tax" @if($service->tax) checked @endif disabled>
                        <label class="form-check-label" for="tax">
                            Tiene IVA
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="purchase" value="1" id="purchase" @if($service->purchase) checked @endif disabled>
                        <label class="form-check-label" for="purchase">
                            Se utiliza para Comprar
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="sale" value="1" id="sale" @if($service->sale) checked @endif disabled>
                        <label class="form-check-label" for="sale">
                            Se utiliza para Vender
                        </label>
                    </div>
                    <hr>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="isactive" value="1" id="isactive" @if($service->isactive) checked @endif disabled>
                        <label class="form-check-label" for="isactive">
                            Activo (Disponibilidad para usar el servicio)
                        </label>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="row">
                        <div class="col mb-3">
                            <label for="cost" class="form-label">Precio de Compra *</label>
                            <div>
                                <span class="form-control">{{$service->cost}}</span>
                            </div>
                        </div>
                        <div class="col mb-3">
                            <label for="price" class="form-label">Precio de venta *</label>
                            <div>
                                <span class="form-control">{{$service->price}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="mb-3">
                <label for="comments" class="form-label">Comentarios adicionales</label>
                <div>
                    <p class="form-control">{{$service->comments}}</p>
                </div>
                <div id="commentsHelp" class="form-text">Estos comentarios aparecerán en la lista de búsqueda de servicios para compras y ventas</div>
            </div>
            
            <hr>
            
            <a href="{{route("services.index")}}" class="btn btn-dark">Volver al listado</a>
            <a href="{{route("services.edit",$service->id)}}" class="btn btn-info"><i class="fas fa-pencil-alt"></i> Editar</a>
            <a href="{{route("services.confirm-delete",$service->id)}}" class="btn btn-danger"><i class="fas fa-trash"></i> Eliminar</a>
        </div>
    </div>
@endsection