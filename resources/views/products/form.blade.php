<div class="row">
    <div class="col-md-6 mb-3">
        <label for="code" class="form-label">Código *</label>
        <input type="text" name="code" class="form-control" id="code" aria-describedby="codeHelp" value="{{$product->code}}" required>
        <div id="codeHelp" class="form-text">Código interno. Se genera automáticamente o se puede agregar uno personalizado</div>
    </div>
    <div class="col-md-6 mb-3">
        <label for="barcode" class="form-label">Código de barras</label>
        <input type="text" name="barcode" class="form-control" id="barcode" aria-describedby="barcodeHelp" value="{{$product->barcode}}">
        <div id="barcodeHelp" class="form-text">Código barras (Opcional). Es un código nacional </div>
    </div>
    <div class="col-md-6 mb-3">
        <label for="name" class="form-label">Nombre / descripción *</label>
        <input type="text" name="name" class="form-control" id="name" value="{{$product->name}}" required>
    </div>
    <div class="col-md-6 mb-3">
        <label for="presentation" class="form-label">Presentación</label>
        <input type="text" name="presentation" class="form-control" id="presentation" aria-describedby="presentationHelp" value="{{$product->presentation}}">
        <div id="presentationHelp" class="form-text">Forma alternativa de nombrar el producto. Puede usar para generar catálogo</div>
    </div>
    <div class="col-md-6 mb-3">
        <label for="measurement" class="form-label">Medida Unitario *</label>
        <input type="text" name="measurement" class="form-control" id="measurement" value="{{$product->measurement}}" required>
    </div>
    <div class="col-md-6 mb-3">
        <label for="package" class="form-label">Medida en empaque</label>
        <input type="text" name="package" class="form-control" id="package" aria-describedby="packageHelp" value="{{$product->package}}">
        <div id="packageHelp" class="form-text">Sirve solo como referencia de cómo llegará el producto en grandes cantidades</div>
    </div>
</div>
<hr>
<div class="row">
    <div class="col">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="tax" value="1" id="tax" @if($product->tax) checked @endif>
            <label class="form-check-label" for="tax">
                Tiene IVA
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="sale_stock_null" value="1" id="sale_stock_null" @if($product->sale_stock_null) checked @endif>
            <label class="form-check-label" for="sale_stock_null">
                Permite Vender sin stock
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="purchase" value="1" id="purchase" @if($product->purchase) checked @endif>
            <label class="form-check-label" for="purchase">
                Se utiliza para Comprar
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="sale" value="1" id="sale" @if($product->sale) checked @endif>
            <label class="form-check-label" for="sale">
                Se utiliza para Vender
            </label>
        </div>
        <hr>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="isactive" value="1" id="isactive" @if($product->isactive) checked @endif>
            <label class="form-check-label" for="isactive">
                Activo (Disponibilidad para usar el producto)
            </label>
        </div>
    </div>
    <div class="col-md-6 mb-3">
        <div class="row">
            <div class="col mb-3">
                <label for="cost" class="form-label">Precio de Compra *</label>
                <input type="number" min="0" step="0.01" name="cost" class="form-control" id="cost" value="0" required>
            </div>
            <div class="col mb-3">
                <label for="price" class="form-label">Precio de venta *</label>
                <input type="number" min="0" step="0.01" name="price" class="form-control" id="price" value="0" required>
            </div>
        </div>
        <div class="mb-3">
            <label for="stock" class="form-label">Stock Actual *</label>
            <input type="number" step="0.01" name="stock" class="form-control" id="stock" value="0" required>
            <div id="stockHelp" class="form-text">Si se ha vendido y no hubo stock disponible, se indicará en negativo. Válido solo cuando esté activo el permiso de vender sin stock</div>
        </div>
    </div>
</div>
<hr>
<div class="mb-3">
    <label for="comments" class="form-label">Comentarios adicionales</label>
    <textarea name="comments" rows="3" class="form-control" id="comments" aria-describedby="commentsHelp"></textarea>
    <div id="commentsHelp" class="form-text">Estos comentarios aparecerán en la lista de búsqueda de productos para compras y ventas</div>
</div>

<hr>

<button type="submit" class="btn btn-primary">Guardar</button>
<a href="{{route("products.index")}}" class="btn btn-default">Cancelar</a>