<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Cliente;

class clientescontroller extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        return view('Clientes.index', compact('clientes'));
    }
    public function store()
    {

        $data = request()->validate([
            'cliente' => 'required|unique:clientes|min:1|max:190',
        ]);

        $data['cliente'] = ucwords($data['cliente']);

        Cliente::create($data);

        return redirect('clientes')->with('info', 'Cliente  creado exitosamente');
    }

    public function edit($id)
    {

        $cliente = Cliente::find($id);

        return view('Clientes.edit', compact('cliente'));
    }

    public function update($id)
    {
        $data = request()->validate([
            'razonsocial' => 'required|min:1|max:190|unique:clientes,cliente,' . $id,
        ]);

        $data['cliente'] = ucwords($data['cliente']);

        Cliente::find($id)->update($data);
        return redirect('clientes')->with('info', 'Cliente  actualizado exitosamente');
    }

    public function destroy($id)
    {

        Cliente::find($id)->delete();
        return redirect('clientes')->with('info', 'Cliente  eliminado exitosamente');
    }
}
