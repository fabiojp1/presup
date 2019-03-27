@extends('layouts.main')

@section('content')
<div class="container">
  <div class="card">
    <div class="card-header">
        <h4>Lista de Categorias</h4>
        <button class="btn btn-success" data-toggle="modal" data-target="#categoria">Nueva Categoria</button>
    </div>

  
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Categoria</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categorias as $categoria)
                    <tr>
                    <td>{{$categoria->id}}</td>
                    <td>{{$categoria->categoria}}</td>
                    <td>
                    <a href="{{route('categorias.edit',$categoria->id)}}">
                          <i class="fas fa-edit"></i>
                        </a>
                    </td>
                    <td>
                        	<form action="{{route('categorias.destroy',$categoria->id)}}" method="POST">
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

<div class="modal fade" id="categoria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action="{{route('categorias.store')}}" method="POST">
                @csrf
                <div class="form-group">
                <label for="exampleInputEmail1">Categoria</label>
                <input type="text" class="form-control" placeholder="Categoria" name="categoria">
                </div>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>

            </form>
        </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>

</div>

@endsection