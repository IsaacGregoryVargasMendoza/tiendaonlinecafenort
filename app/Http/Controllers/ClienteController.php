<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::where('estadoCliente',1)->get();
        return view('cliente.index',compact('clientes'));
    }

    public function create()
    {
        $clientes = Cliente::where('estadoCliente',1)->get();
        return view('cliente.index',compact('clientes'));
    }

    public function store(Request $request)
    {
        $cliente = new Cliente();
        $cliente->dniCliente = $request->get('dni');
        $cliente->nombreCliente = $request->get('nombre');
        $cliente->direccionCliente = $request->get('direccion');
        $cliente->celularCliente = $request->get('celular');
        $cliente->correoCliente = $request->get('correo');
        $cliente->estadoCliente = 1;

        $cliente->save();
        return redirect('/cliente');
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
        $cliente = new Cliente::find($id);
        $cliente->dniCliente = $request->get('dni');
        $cliente->nombreCliente = $request->get('nombre');
        $cliente->direccionCliente = $request->get('direccion');
        $cliente->celularCliente = $request->get('celular');
        $cliente->correoCliente = $request->get('correo');
        $cliente->estadoCliente = 1;

        $cliente->save();
        return redirect('/cliente');
    }

    public function destroy($id)
    {
        $cliente = Cliente::find($id);
        $cliente->estadoCliente = 1;

        $cliente->save();
        return redirect('/cliente');
    }
}
