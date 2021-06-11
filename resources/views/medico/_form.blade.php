@csrf
<div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="{{ old('nombre', $medico->nombre) }}">
</div>
<div class="form-group">
    <label for="ap_paterno">Apellido Paterno</label>
    <input type="text" class="form-control" id="ap_paterno" name="ap_paterno" placeholder="Apellido Paterno" value="{{ old('ap_paterno', $medico->ap_paterno) }}">
</div>
<div class="form-group">
    <label for="ap_materno">Apellido Materno</label>
    <input type="text" class="form-control" id="ap_materno" name="ap_materno" placeholder="Apellido Materno" value="{{ old('ap_materno', $medico->ap_materno) }}">
</div>
<div class="form-group">
    <label for="cedula">Cedula</label>
    <input type="text" class="form-control" id="cedula" name="cedula" placeholder="Cedula" value="{{ old('cedula', $medico->cedula) }}">
</div>
<button type="submit" value="Enviar" class="btn btn-primary">Submit</button>