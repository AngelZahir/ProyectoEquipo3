@extends('master')

@section('content')

<a href="{{route('paciente.create')}}" class="btn btn-success mt-3 mb-3">Agregar Paciente</a>

        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Medico ID</th>
                <th scope="col">Direccion ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido P</th>
                <th scope="col">Apellido M</th>
                <th scope="col">Edad</th>
                <th scope="col">Creado</th>
                <th scope="col">Actualizado</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($pacientes as $paciente)
                <tr>            
                    <th scope="row">{{$paciente->id}}</th>
                    <td>{{$paciente->medicoId}}</td>
                    <td>{{$paciente->direccionId}}</td>
                    <td>{{$paciente->nombre}}</td>
                    <td>{{$paciente->ap_paterno}}</td>
                    <td>{{$paciente->ap_materno}}</td>
                    <td>{{$paciente->edad}}</td>
                    <td>{{$paciente->created_at->format('d-m-Y')}}</td>
                    <td>{{$paciente->updated_at->format('d-m-Y')}}</td>
                    <td><a href="{{ route('paciente.show', $paciente->id) }}" class="btn btn-primary">Ver</a></td>
                    <td><a href="{{ route('paciente.edit', $paciente->id) }}" class="btn btn-primary">Editar</a></td>
                    <td><a href="{{ route('mostrar', $paciente->id) }}" class="btn btn-primary">Recetas</a></td>
                    <td>
                      <button data-toggle="modal" data-target="#deleteModal" data-id="{{ $paciente->id }}" class="btn btn-danger" type="submit">Eliminar</button>
                    </td>
                  </tr>
                @endforeach
            </tbody>
          </table>

          {{$pacientes->links()}}


          @include('paciente._modal')
          
          <script>

            window.onload = function(){

                $("#deleteModal").on('show.bs.modal', function (event) {
                  
                    var boton = $(event.relatedTarget);
                    var id = boton.data('id');

                    action = $('#formDelete').attr('data-action').slice(0, -1);
                    action += id;

                    $('#formDelete').attr('action', action);

                    var modal = $(this);
                    modal.find('.modal-title').text('Eliminar al paciente: ' + id);
              })
            }

          </script>

@endsection