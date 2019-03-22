@extends('layouts.main')

@section('content')
    <div class="container">
        <h2>Editando</h2>

        <div class="card">
            <div class="card-body">
            <form action="{{route('categorias.update',$categoria->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="text" value="{{$categoria->id}}" hidden name="id">
                    <div class="form-group">
                    <label for="exampleInputEmail1">Categoria</label>
                    <input type="text" class="form-control" value="{{$categoria->categoria}}" name="categoria">
                    </div>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>

            </form>
            </div>
        </div>
    </div>

@endsection