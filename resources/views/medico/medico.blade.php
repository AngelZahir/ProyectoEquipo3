@extends('master')

@section('content')

        @include('partials/validation-errors')

        <form action="{{ route('medico.store') }}" method="post">

                @include('medico._form')
        </form>

@endsection