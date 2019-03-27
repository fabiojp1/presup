@extends('layouts.main')

@section('content')
    <div class="container">
        <h2>Editando</h2>

        <div class="card">
            <div class="card-body">
            <form action="{{route('Marcas.update',$marca->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="text" value="{{$marca->id}}" hidden name="id">
                    <div class="form-group">
                    <label for="exampleInputEmail1">Marca</label>
                    <input type="text" class="form-control" value="{{$marca->marca}}" name="marca">
                    </div>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>

            </form>
            </div>
        </div>
    </div>

@endsection