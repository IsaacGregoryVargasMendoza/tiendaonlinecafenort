<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        return view('cliente.listar',compact('clientes'));
    }

    public function create()
    {
        $clientes = Cliente::where('estadoCliente',1)->get();
        return view('cliente.index',compact('clientes'));
    }

    public function store(Request $request)
    {
        $cliente = new Cliente();
        $cliente->dniCliente = $request->get('dniCliente');
        $cliente->nombreCliente = $request->get('nombreCliente');
        $cliente->direccionCliente = $request->get('direccionCliente');
        $cliente->celularCliente = $request->get('celularCliente');
        $cliente->correoCliente = $request->get('correoCliente');
        $cliente->estadoCliente = 1;

        $cliente->save();
        return redirect('/clientes');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $cliente = Cliente::find($id)->get();
        return view('cliente.edit',compact('cliente'));
    }

    public function update(Request $request, $id)
    {
        $cliente = Cliente::find($id);
        $cliente->dniCliente = $request->get('dniCliente');
        $cliente->nombreCliente = $request->get('nombreCliente');
        $cliente->direccionCliente = $request->get('direccionCliente');
        $cliente->celularCliente = $request->get('celularCliente');
        $cliente->correoCliente = $request->get('correoCliente');
        $cliente->estadoCliente = 1;

        $cliente->save();
        return redirect('/clientes');
    }

    public function destroy($id)
    {
        $cliente = Cliente::find($id);
        $cliente->estadoCliente = 1;

        $cliente->save();
        return redirect('/cliente');
    }
}
