@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h2>Roles</h2>
                      <button class="btn btn-success" type="button"
                        data-toggle="modal" data-target="#categoria">
                        Nuevo Rol
                      </button>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($roles as $rol)

                              <tr>
                                  <td>{{$rol->id}}</td>
                                  <td>{{$rol->name}}</td>
                                  <td>
                                  <a href="{{route('roles.edit',$rol->id)}}">Editar</a>
                                  </td>
                              </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="modal fade" id="categoria" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-body">
                      <h2>Nuevo Rol</h2>
                  <form action="{{route('roles.store')}}" method="POST">
                          @csrf
                          <div class="form-group">
                              <label for="">Rol</label>
                              <input type="text" class="form-control" name="nombre">
                          </div>
                          <button type="submit" class="btn btn-primary">Guardar</button>
                      </form>
                  </div>
              </div>

          </div>
        </div>
    </div>
</div>
@endsection
