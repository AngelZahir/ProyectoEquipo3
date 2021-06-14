@extends('master')

@section('content')

        <form method="post">
            @csrf
            <h2 class="border-bottom"><small>Datos paciente</small></h2>
            <div class="form-group">
                <label for="medicoId">Medico ID</label>
                <input readonly type="text" class="form-control" id="medicoId" name="medicoId" placeholder="Medico ID" value="{{ $paciente->medicoId }}">
            </div>
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input readonly type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="{{ $paciente->nombre }}">
            </div>
            <div class="form-group">
                <label for="ap_paterno">Apellido Paterno</label>
                <input readonly type="text" class="form-control" id="ap_paterno" name="ap_paterno" placeholder="Apellido Paterno" value="{{ $paciente->ap_paterno }}">
            </div>
            <div class="form-group">
                <label for="ap_materno">Apellido Materno</label>
                <input readonly type="text" class="form-control" id="ap_materno" name="ap_materno" placeholder="Apellido Materno" value="{{ $paciente->ap_materno }}">
            </div>
            <div class="form-group">
                <label for="edad">Edad</label>
                <input readonly type="text" class="form-control" id="edad" name="edad" placeholder="Edad" value="{{ $paciente->edad }}">
            </div>
            <h2 class="border-bottom"><small>Direccion</small></h2>
            <div class="form-group">
                <label for="calle">Calle</label>
                <input readonly type="text" class="form-control" id="calle" name="calle" placeholder="Calle" value="{{ $direccion->calle }}">
            </div>
            <div class="form-group">
                <label for="colonia">Colonia</label>
                <input readonly type="text" class="form-control" id="colonia" name="colonia" placeholder="Colonia" value="{{ $direccion->colonia }}">
            </div>
            <div class="form-group">
                <label for="delgacion">Delegacion</label>
                <input readonly type="text" class="form-control" id="delegacion" name="delegacion" placeholder="Delegacion" value="{{ $direccion->delegacion }}">
            </div>
            <div class="form-group">
                <label for="codigo_postal">Codigo Postal</label>
                <input readonly type="text" class="form-control" id="codigo_postal" name="codigo_postal" placeholder="Codigo Postal" value="{{ $direccion->codigo_postal }}">
            </div>
            <div class="form-group">
                <label for="estado">Estado</label>
                <input readonly type="text" class="form-control" id="estado" name="estado" placeholder="Estado" value="{{ $direccion->estado }}">
            </div>
            <div class="form-group">
                <label for="ciudad">Ciudad</label>
                <input readonly type="text" class="form-control" id="ciudad" name="ciudad" placeholder="Ciudad" value="{{ $direccion->ciudad }}">
            </div>
        </form>

@endsection