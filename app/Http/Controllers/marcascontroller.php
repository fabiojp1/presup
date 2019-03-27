<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Marca;

class marcascontroller extends Controller
{
    public function index()
    {
        $marcas = Marca::all();
        return view('Marcas.index', compact('marcas'));
    }
    public function store()
    {

        $data = request()->validate([
            'marca' => 'required|unique:marcas|min:1|max:190',
        ]);

        $data['marca'] = ucwords($data['marca']);

        Marca::create($data);

        return redirect('Marcas')->with('info', 'Marca  creada exitosamente');
    }
    public function edit($id)
    {

        $marca = Marca::find($id);

        return view('Marcas.edit', compact('marca'));
    }
    public function update($id)
    {


        $data = request()->validate([
            'marca' => 'required|min:1|max:190|unique:marcas,marca,' . $id,
        ]);

        $data['marca'] = ucwords($data['marca']);

        Marca::find($id)->update($data);
        return redirect('Marcas')->with('info', 'Marca  actualizada exitosamente');
    }
    public function destroy($id)
    {

        Marca::find($id)->delete();
        return redirect('Marcas')->with('info', 'Marca  eliminada exitosamente');
    }

}