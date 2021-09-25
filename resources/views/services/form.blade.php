<div class="row">
    <div class="col-md-6 mb-3">
        <label for="code" class="form-label">Código *</label>
        <input type="text" name="code" class="form-control" id="code" aria-describedby="codeHelp" value="{{$service->code}}" required>
        <div id="codeHelp" class="form-text">Código interno. Se genera automáticamente o se puede agregar uno personalizado</div>
    </div>
    <div class="col-md-6 mb-3">
        <label for="name" class="form-label">Nombre / descripción *</label>
        <input type="text" name="name" class="form-control" id="name" value="{{$service->name}}" required autofocus>
    </div>
    <div class="col-md-6 mb-3">
        <label for="measurement" class="form-label">Medida Unitario *</label>
        <input type="text" name="measurement" class="form-control" id="measurement" value="{{$service->measurement}}" required placeholder="Hora, proyecto, mes, etc">
    </div>
</div>
<hr>
<div class="row">
    <div class="col">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="tax" value="1" id="tax" @if($service->tax) checked @endif>
            <label class="form-check-label" for="tax">
                Tiene IVA
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="purchase" value="1" id="purchase" @if($service->purchase) checked @endif>
            <label class="form-check-label" for="purchase">
                Se utiliza para Comprar
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="sale" value="1" id="sale" @if($service->sale) checked @endif>
            <label class="form-check-label" for="sale">
                Se utiliza para Vender
            </label>
        </div>
        <hr>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="isactive" value="1" id="isactive" @if($service->isactive) checked @endif>
            <label class="form-check-label" for="isactive">
                Activo (Disponibilidad para usar el servicio)
            </label>
        </div>
    </div>
    <div class="col-md-6 mb-3">
        <div class="row">
            <div class="col mb-3">
                <label for="cost" class="form-label">Precio de Compra *</label>
                <input type="number" min="0" step="0.01" name="cost" value="{{$service->cost}}" class="form-control" id="cost" value="0" required>
            </div>
            <div class="col mb-3">
                <label for="price" class="form-label">Precio de venta *</label>
                <input type="number" min="0" step="0.01" name="price" value="{{$service->price}}" class="form-control" id="price" value="0" required>
            </div>
        </div>
    </div>
</div>
<hr>
<div class="mb-3">
    <label for="comments" class="form-label">Comentarios adicionales</label>
    <textarea name="comments" rows="3" class="form-control" id="comments" aria-describedby="commentsHelp">{{$service->comments}}</textarea>
    <div id="commentsHelp" class="form-text">Estos comentarios aparecerán en la lista de búsqueda de servicios para compras y ventas</div>
</div>

<hr>

<button type="submit" class="btn btn-primary">Guardar</button>
<a href="{{route("services.index")}}" class="btn btn-default">Cancelar</a>