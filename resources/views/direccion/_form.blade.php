@csrf
<div class="form-group">
    <label for="calle">Calle</label>
    <input type="text" class="form-control" id="calle" name="calle" placeholder="Calle" value="{{ old('calle', $direccion->calle) }}">
</div>
<div class="form-group">
    <label for="colonia">Colonia</label>
    <input type="text" class="form-control" id="colonia" name="colonia" placeholder="Colonia" value="{{ old('colonia', $direccion->colonia) }}">
</div>
<div class="form-group">
    <label for="delgacion">Delegacion</label>
    <input type="text" class="form-control" id="delegacion" name="delegacion" placeholder="Delegacion" value="{{ old('delegacion', $direccion->delegacion) }}">
</div>
<div class="form-group">
    <label for="codigo_postal">Codigo Postal</label>
    <input type="text" class="form-control" id="codigo_postal" name="codigo_postal" placeholder="Codigo Postal" value="{{ old('codigo_postal', $direccion->codigo_postal) }}">
</div>
<div class="form-group">
    <label for="estado">Estado</label>
    <input type="text" class="form-control" id="estado" name="estado" placeholder="Estado" value="{{ old('estado', $direccion->estado) }}">
</div>
<div class="form-group">
    <label for="ciudad">Ciudad</label>
    <input type="text" class="form-control" id="ciudad" name="ciudad" placeholder="Ciudad" value="{{ old('ciudad', $direccion->ciudad) }}">
</div>
<button type="submit" value="Enviar" class="btn btn-primary">Submit</button>