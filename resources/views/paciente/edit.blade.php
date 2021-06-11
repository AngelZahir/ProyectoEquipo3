@extends('master')

@section('content')

        @include('partials/validation-errors')

        <form action="{{ route('paciente.update', $paciente->id, $direccion->id) }}" method="post">
                @method('PUT')

                @include('paciente._form')
        </form>

@endsection