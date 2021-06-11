@extends('master')

@section('content')

        @include('partials/validation-errors')

        <form action="{{ route('paciente.store') }}" method="post">

                @include('paciente._form')
        </form>

@endsection