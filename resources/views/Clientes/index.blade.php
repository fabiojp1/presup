@extends('layouts.main')

@section('content')
<div class="container">
  <div class="card">
    <div class="card-header">
        <h4>Lista de Clientes</h4>
        <button class="btn btn-success" data-toggle="modal" data-target="#cliente">Nuevo Cliente</button>
    </div>

  
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Razon Social</th>
                    <th>Documento</th>
                    <th>Direccion</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clientes as $cliente)
                    <tr>
                    <td>{{$cliente->id}}</td>
                    <td>{{$cliente->razonsocial}}</td>
                    <td>{{$cliente->documento}}</td>
                    <td>{{$cliente->direccion}}</td>
                    <td>
                    <a href="{{route('Clientes.edit',$cliente->id)}}">
                          <i class="fas fa-edit"></i>
                        </a>
                    </td>
                    <td>
                        	<form action="{{route('Clientes.destroy',$cliente->id)}}" method="POST">
                      					@csrf
                      					@method('DELETE')
                      					<button type="submit" class="btn btn-danger">Eliminar</button>
                      				</form>	

                    </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        
    </div>
</div>

<div class="modal fade" id="cliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar nuevo Cliente</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action="{{route('Clientes.store')}}" method="POST">
                @csrf
                <div class="form-group">
                <label for="exampleInputEmail1">Razon Social</label>
                <input type="text" class="form-control" placeholder="Razon Social" name="razonsocial">
                <label for="exampleInputEmail1">Documento</label>
                <input type="text" class="form-control" placeholder="Documento" name="documento">
                <label for="exampleInputEmail1">Telefono</label>
                <input type="text" class="form-control" placeholder="Telefono" name="telefono">
                <label for="exampleInputEmail1">Direccion</label>
                <input type="text" class="form-control" placeholder="Direccion" name="direccion">
                <label for="exampleInputEmail1">Email</label>
                <input type="text" class="form-control" placeholder="Email" name="email">
                <label for="exampleInputEmail1">Localidad</label>
                <input type="text" class="form-control" placeholder="Localidad" name="localidad">
                
                </div>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Guardar Cambios</button>

            </form>
        </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>

</div>

@endsection