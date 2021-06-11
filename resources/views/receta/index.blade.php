@extends('master')

@section('content')

<a href="{{route('receta.create', $paciente->id)}}" class="btn btn-success mt-3 mb-3">Agregar receta</a>

        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Fecha Inicio Tratamiento</th>
                <th scope="col">Creado</th>
                <th scope="col">Actualizado</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($recetas as $receta)
                <tr>
                    <th scope="row">{{$receta->id}}</th>
                    <td>{{$receta->fecha_inicio_tratamiento}}</td>
                    <td>{{$receta->created_at->format('d-m-Y')}}</td>
                    <td>{{$receta->updated_at->format('d-m-Y')}}</td>
                    <td><a href="{{ route('receta.show', $receta->id) }}" class="btn btn-primary">Ver</a></td>
                    <td><a href="{{ route('receta.edit', $receta->id) }}" class="btn btn-primary">Editar</a></td>
                    <td>
                      <button data-toggle="modal" data-target="#deleteModal" data-id="{{ $receta->id }}" class="btn btn-danger" type="submit">Eliminar</button>
                    </td>
                  </tr>
                @endforeach
            </tbody>
          </table>

          {{$recetas->links()}}

          @include('receta._modal')
          
          <script>

            window.onload = function(){

                $("#deleteModal").on('show.bs.modal', function (event) {
                  
                    var boton = $(event.relatedTarget);
                    var id = boton.data('id');

                    action = $('#formDelete').attr('data-action').slice(0, -1);
                    action += id;

                    $('#formDelete').attr('action', action);

                    var modal = $(this);
                    modal.find('.modal-title').text('Eliminar la receta: ' + id);
              })
            }

          </script>
@endsection