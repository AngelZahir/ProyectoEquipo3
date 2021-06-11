@extends('master')

@section('content')

<a href="{{route('medico.create')}}" class="btn btn-success mt-3 mb-3">Agregar Medico</a>

        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido Paterno</th>
                <th scope="col">Apellido Materno</th>
                <th scope="col">Cedula</th>
                <th scope="col">Creado</th>
                <th scope="col">Actualizado</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($medicos as $medico)
                <tr>
                    <th scope="row">{{$medico->id}}</th>
                    <td>{{$medico->nombre}}</td>
                    <td>{{$medico->ap_paterno}}</td>
                    <td>{{$medico->ap_materno}}</td>
                    <td>{{$medico->cedula}}</td>
                    <td>{{$medico->created_at->format('d-m-Y')}}</td>
                    <td>{{$medico->updated_at->format('d-m-Y')}}</td>
                    <td><a href="{{ route('medico.show', $medico->id) }}" class="btn btn-primary">Ver</a></td>
                    <td><a href="{{ route('medico.edit', $medico->id) }}" class="btn btn-primary">Editar</a></td>
                    <td>
                      <button data-toggle="modal" data-target="#deleteModal" data-id="{{ $medico->id }}" class="btn btn-danger" type="submit">Eliminar</button>
                    </td>
                  </tr>
                @endforeach
            </tbody>
          </table>

          {{$medicos->links()}}

          @include('medico._modal')
          
          <script>

            window.onload = function(){

                $("#deleteModal").on('show.bs.modal', function (event) {
                  
                    var boton = $(event.relatedTarget);
                    var id = boton.data('id');

                    action = $('#formDelete').attr('data-action').slice(0, -1);
                    action += id;

                    $('#formDelete').attr('action', action);

                    var modal = $(this);
                    modal.find('.modal-title').text('Eliminar el Medico: ' + id);
              })
            }

          </script>
@endsection