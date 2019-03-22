<?php

namespace App\Http\Controllers;

use App\Categoria;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    public function index()
    {
        $categorias = Categoria::all();
        return view('categorias.index', compact('categorias'));
    }
    public function store()
    {

        $data = request()->validate([
            'categoria' => 'required|unique:categorias|min:1|max:190',
        ]);

        $data['categoria'] = ucwords($data['categoria']);

        Categoria::create($data);

        return redirect('categorias')->with('info', 'Categoria  creada exitosamente');
    }

    public function edit($id)
    {

        $categoria = Categoria::find($id);

        return view('categorias.edit', compact('categoria'));
    }

    public function update($id)
    {


        $data = request()->validate([
            'categoria' => 'required|min:1|max:190|unique:categorias,categoria,' . $id,
        ]);

        $data['categoria'] = ucwords($data['categoria']);

        Categoria::find($id)->update($data);
        return redirect('categorias')->with('info', 'Categoria  actualizada exitosamente');
    }

    public function destroy($id)
    {

        Categoria::find($id)->delete();
        return redirect('categorias')->with('info', 'Categoria  eliminada exitosamente');
    }
}
