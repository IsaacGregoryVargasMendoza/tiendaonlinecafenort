<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoProducto;

class TipoProductoController extends Controller
{
    public function index()
    {
        $tipoproductos = TipoProducto::where('estadoTipoProducto',1)->get();
        return view('categoria.listar',compact('tipoproductos'));
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        $tipoproducto = new TipoProducto();
        $tipoproducto->descripcionTipoProducto = $request->get('descripcion');
        $tipoproducto->estadoTipoProducto = 1;

        $tipoproducto->save();
        return redirect('/categorias');
    }

    public function show($id)
    {
        $tipoproducto = TipoProducto::find($id);
        return $tipoproducto;
    }

    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tipoproducto = TipoProducto::find($id);
        $tipoproducto->descripcionTipoProducto = $request->get('descripcionTipoProducto');
        $tipoproducto->estadoTipoProducto = 1;

        $tipoproducto->save();
        return redirect('/categorias');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipoProducto = TipoProducto::find($id);
        $tipoProducto->estadoTipoProducto = 0;
        $tipoProducto->save();
        return redirect('categorias');
    }
}
