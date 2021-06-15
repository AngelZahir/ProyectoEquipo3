@extends('master')

@section('content')

{{-- <a href="{{route('direccion.create')}}" class="btn btn-success mt-3 mb-3">Agregar direccion</a> --}}
<h2 class="border-bottom"><small>Direcciones</small></h2>
        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Calle</th>
                <th scope="col">Colonia</th>
                <th scope="col">Delegacion</th>
                <th scope="col">Codigo Postal</th>
                <th scope="col">Estado</th>
                <th scope="col">Ciudad</th>
                <th scope="col">Creado</th>
                <th scope="col">Actualizado</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($direcciones as $direccion)
                <tr>
                    <th scope="row">{{$direccion->id}}</th>
                    <td>{{$direccion->calle}}</td>
                    <td>{{$direccion->colonia}}</td>
                    <td>{{$direccion->delegacion}}</td>
                    <td>{{$direccion->codigo_postal}}</td>
                    <td>{{$direccion->estado}}</td>
                    <td>{{$direccion->ciudad}}</td>
                    <td>{{$direccion->created_at->format('d-m-Y')}}</td>
                    <td>{{$direccion->updated_at->format('d-m-Y')}}</td>
                    <td><a href="{{ route('direccion.show', $direccion->id) }}" class="btn btn-primary">Ver</a></td>
                    {{--  <td><a href="{{ route('direccion.edit', $direccion->id) }}" class="btn btn-primary">Editar</a></td>
                    <td>
                      <button data-toggle="modal" data-target="#deleteModal" data-id="{{ $direccion->id }}" class="btn btn-danger" type="submit">Eliminar</button>
                    </td>  --}}
                  </tr>
                @endforeach
            </tbody>
          </table>

          {{$direcciones->links()}}

          @include('direccion._modal')
          
          <script>

            window.onload = function(){

                $("#deleteModal").on('show.bs.modal', function (event) {
                  
                    var boton = $(event.relatedTarget);
                    var id = boton.data('id');

                    action = $('#formDelete').attr('data-action').slice(0, -1);
                    action += id;

                    $('#formDelete').attr('action', action);

                    var modal = $(this);
                    modal.find('.modal-title').text('Eliminar la direccion: ' + id);
              })
            }

          </script>
@endsection