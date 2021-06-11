@extends('master')

@section('content')

        @include('partials/validation-errors')

        <form action="{{ route('receta.update', $receta->id) }}" method="post">
                @method('PUT')

                @include('receta._form')
        </form>

@endsection