@extends('master')

@section('content')

        @include('partials/validation-errors')

        <form action="{{ route('direccion.update', $direccion->id) }}" method="post">
                @method('PUT')

                @include('direccion._form')
        </form>

@endsection