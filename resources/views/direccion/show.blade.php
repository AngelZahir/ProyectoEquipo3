@extends('master')

@section('content')

        <form method="post">
            @csrf
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