@extends('layouts.main')

@section('content')
<div class="container">
  <div class="card">
    <div class="card-header">
        <h4>Lista de Marcas</h4>
        <button class="btn btn-success" data-toggle="modal" data-target="#marca">Nueva Marca</button>
    </div>

  
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Marca</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($marcas as $marca)
                    <tr>
                    <td>{{$marca->id}}</td>
                    <td>{{$marca->marca}}</td>
                    <td>
                    <a href="{{route('Marcas.edit',$marca->id)}}">
                          <i class="fas fa-edit"></i>
                        </a>
                    </td>
                    <td>
                        	<form action="{{route('Marcas.destroy',$marca->id)}}" method="POST">
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

<div class="modal fade" id="marca" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action="{{route('Marcas.store')}}" method="POST">
                @csrf
                <div class="form-group">
                <label for="exampleInputEmail1">Marca</label>
                <input type="text" class="form-control" placeholder="Marca" name="marca">
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