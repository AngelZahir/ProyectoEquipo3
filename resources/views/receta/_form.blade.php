@csrf
<div class="form-group">
    <label for="padecimiento">Padecimiento</label>
    <textarea class="form-control" name="padecimineto" id="padecimineto" rows="3">{{ old('padecimineto', $receta->padecimineto) }}</textarea>
</div>
<div class="form-group">
    <label for="medicamento">Medicamento</label>
    <textarea class="form-control" name="medicamento" id="medicamento" rows="3">{{ old('medicamento', $receta->medicamento) }}</textarea>
</div>
<div class="form-group">
    <label for="fecha_inicio_tratamiento">Fecha inicio tratamiento</label>
    <input type="date" id="fecha_inicio_tratamiento" name="fecha_inicio_tratamiento" value="{{ old('fecha_inicio_tratamiento', $receta->fecha_inicio_tratamiento)}}" min="2021-01-01" max="2021-12-31">
</div>
<button type="submit" value="Enviar" class="btn btn-primary">Submit</button>