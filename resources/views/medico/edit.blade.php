@extends('master')

@section('content')

        @include('partials/validation-errors')

        <form action="{{ route('medico.update', $medico->id) }}" method="post">
                @method('PUT')

                @include('medico._form')
        </form>

@endsection