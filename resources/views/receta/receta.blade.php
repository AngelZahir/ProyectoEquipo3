@extends('master')

@section('content')

        @include('partials/validation-errors')

        <form action="{{ route('receta.store', $paciente) }}" method="post">

                @include('receta._form')
        </form>

@endsection