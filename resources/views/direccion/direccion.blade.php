@extends('master')

@section('content')

        @include('partials/validation-errors')

        <form action="{{ route('direccion.store') }}" method="post">

                @include('direccion._form')
        </form>

@endsection