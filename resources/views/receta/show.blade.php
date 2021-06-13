@extends('master')

@section('content')

        <form method="post">
            @csrf
            <div class="form-group">
                <label for="padecimiento">Padecimiento</label>
                <textarea readonly class="form-control" name="padecimiento" id="padecimiento" rows="3">{{ old('padecimineto', $receta->padecimineto) }}</textarea>
            </div>
            <div class="form-group">
                <label for="medicamento">Medicamento</label>
                <textarea readonly class="form-control" name="medicamento" id="medicamento" rows="3">{{ old('medicamento', $receta->medicamento) }}</textarea>
            </div>
            <div class="form-group">
                <label for="fecha_inicio_tratamiento">Fecha inicio tratamiento</label>
                <input readonly type="date" id="fecha_inicio_tratamiento" name="fecha_inicio_tratamiento" value="{{ old('fecha_inicio_tratamiento', $receta->fecha_inicio_tratamiento)}}" min="2018-01-01" max="2018-12-31">
            </div>
        </form>

@endsection