@extends('layout.app')
@section('title-tab') Producto - {{$product->name}} @endsection
@section('title-page') Información de producto @endsection
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
                        <span class="form-control">{{$product->code}}</span>
                    </div>
                    <div id="codeHelp" class="form-text">Código interno. Se genera automáticamente o se puede agregar uno personalizado</div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="barcode" class="form-label">Código de barras</label>
                    <div>
                        <span class="form-control">{{$product->barcode}}</span>
                    </div>
                    <div id="barcodeHelp" class="form-text">Código barras (Opcional). Es un código nacional </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="name" class="form-label">Nombre / descripción *</label>
                    <div>
                        <span class="form-control">{{$product->name}}</span>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="presentation" class="form-label">Presentación</label>
                    <div>
                        <span class="form-control">{{$product->presentation}}</span>
                    </div>
                    <div id="presentationHelp" class="form-text">Forma alternativa de nombrar el producto. Puede usar para generar catálogo</div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="measurement" class="form-label">Medida Unitario *</label>
                    <div>
                        <span class="form-control">{{$product->measurement}}</span>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="package" class="form-label">Medida en empaque</label>
                    <div>
                        <span class="form-control">{{$product->package}}</span>
                    </div>
                    <div id="packageHelp" class="form-text">Sirve solo como referencia de cómo llegará el producto en grandes cantidades</div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="tax" value="1" id="tax" @if($product->tax) checked @endif disabled>
                        <label class="form-check-label" for="tax">
                            Tiene IVA
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="sale_stock_null" value="1" id="sale_stock_null" @if($product->sale_stock_null) checked @endif disabled>
                        <label class="form-check-label" for="sale_stock_null">
                            Permite Vender sin stock
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="purchase" value="1" id="purchase" @if($product->purchase) checked @endif disabled>
                        <label class="form-check-label" for="purchase">
                            Se utiliza para Comprar
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="sale" value="1" id="sale" @if($product->sale) checked @endif disabled>
                        <label class="form-check-label" for="sale">
                            Se utiliza para Vender
                        </label>
                    </div>
                    <hr>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="isactive" value="1" id="isactive" @if($product->isactive) checked @endif disabled>
                        <label class="form-check-label" for="isactive">
                            Activo (Disponibilidad para usar el producto)
                        </label>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="row">
                        <div class="col mb-3">
                            <label for="cost" class="form-label">Precio de Compra *</label>
                            <div>
                                <span class="form-control">{{$product->cost}}</span>
                            </div>
                        </div>
                        <div class="col mb-3">
                            <label for="price" class="form-label">Precio de venta *</label>
                            <div>
                                <span class="form-control">{{$product->price}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="stock" class="form-label">Stock Actual *</label>
                        <div>
                            <span class="form-control">{{$product->stock}}</span>
                        </div>
                        <div id="stockHelp" class="form-text">Si se ha vendido y no hubo stock disponible, se indicará en negativo. Válido solo cuando esté activo el permiso de vender sin stock</div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="mb-3">
                <label for="comments" class="form-label">Comentarios adicionales</label>
                <div>
                    <p class="form-control">{{$product->comments}}</p>
                </div>
                <div id="commentsHelp" class="form-text">Estos comentarios aparecerán en la lista de búsqueda de productos para compras y ventas</div>
            </div>
            
            <hr>
            
            <a href="{{route("products.index")}}" class="btn btn-dark">Volver al listado</a>
            <a href="{{route("products.edit",$product->id)}}" class="btn btn-info"><i class="fas fa-pencil-alt"></i> Editar</a>
            <a href="{{route("products.confirm-delete",$product->id)}}" class="btn btn-danger"><i class="fas fa-trash"></i> Eliminar</a>
        </div>
    </div>
@endsection