<div class="row">
    <div class="col-md-6 mb-3">
        <label for="identification" class="form-label">Identificación *</label>
        <input type="text" name="identification" class="form-control" id="identification" aria-describedby="identificationHelp" value="{{$client->identification}}" required>
        <div id="identificationHelp" class="form-text">Cédula / RUC / otro medio de indentificación</div>
    </div>
    <div class="col-md-6 mb-3">
        <label for="name" class="form-label">Nombre *</label>
        <input type="text" name="name" class="form-control" id="name" value="{{$client->name}}" required>
    </div>
    <div class="col-md-6 mb-3">
        <label for="phone" class="form-label">Teléfono *</label>
        <input type="text" name="phone" class="form-control" id="phone" value="{{$client->phone}}" required>
    </div>
    <div class="col-md-6 mb-3">
        <label for="address" class="form-label">Dirección *</label>
        <input type="text" name="address" class="form-control" id="address" value="{{$client->address}}" required>
    </div>
    <div class="col-md-6 mb-3">
        <label for="email" class="form-label">Email *</label>
        <input type="text" name="email" class="form-control" id="email" value="{{$client->email}}" required>
    </div>
    <div class="col-md-6 mb-3">
        <label for="type" class="form-label">Tipo de cliente *</label>
        <select name="type" id="type" class="form-select">
            <option value="person" @if($client->type =="person") selected @endif>Persona</option>
            <option value="company" @if($client->type =="company") selected @endif>Empresa</option>
        </select>
        <div id="identificationHelp" class="form-text">Elija si el cliente es una persona o una empresa</div>
    </div>
</div>
<hr>
<div class="form-check">
    <input class="form-check-input" type="checkbox" name="isactive" value="1" id="isactive" @if($client->isactive) checked @endif>
    <label class="form-check-label" for="isactive">
        Activo (Disponibilidad para usar el cliente en futuras transacciones)
    </label>
</div>

<hr>

<button type="submit" class="btn btn-primary">Guardar</button>
<a href="{{route("clients.index")}}" class="btn btn-default">Cancelar</a>