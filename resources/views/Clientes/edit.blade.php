@extends('layouts.main')

@section('content')
    <div class="container">
        <h2>Editando</h2>

        <div class="card">
            <div class="card-body">
            <form action="{{route('Clientes.update',$cliente->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="text" value="{{$cliente->id}}" hidden name="id">
                    <div class="form-group">
                    <label for="exampleInputEmail1">Cliente</label> 
                    
                    <input type="text" class="form-control" value="{{$cliente->razonsocial}}" name="razonsocial"> <br>
                    <input type="text" class="form-control" value="{{$cliente->documento}}" name="documento"><br>
                    <input type="text" class="form-control" value="{{$cliente->telefono}}" name="telefono"><br>
                    <input type="text" class="form-control" value="{{$cliente->direccion}}" name="direccion"><br>
                    <input type="text" class="form-control" value="{{$cliente->email}}" name="email"><br>
                    <input type="text" class="form-control" value="{{$cliente->localidad}}" name="Localidad"><br>
                    </div>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            </form>
            </div>
        </div>
    </div>

@endsection