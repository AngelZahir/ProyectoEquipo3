@extends('master')

@section('content')

        <form method="post">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input readonly type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="{{ $medico->nombre }}">
            </div>
            <div class="form-group">
                <label for="ap_paterno">Apellido Paterno</label>
                <input readonly type="text" class="form-control" id="ap_paterno" name="ap_paterno" placeholder="Apellido Paterno" value="{{ $medico->ap_paterno }}">
            </div>
            <div class="form-group">
                <label for="ap_materno">Apellido Materno</label>
                <input readonly type="text" class="form-control" id="ap_materno" name="ap_materno" placeholder="Apellido Materno" value="{{ $medico->ap_materno }}">
            </div>
            <div class="form-group">
                <label for="cedula">Cedula</label>
                <input readonly type="text" class="form-control" id="cedula" name="cedula" placeholder="Cedula" value="{{ $medico->cedula }}">
            </div>
        </form>

@endsection