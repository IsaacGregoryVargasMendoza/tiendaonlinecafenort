<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\TipoProducto;

class ListaController extends Controller
{
    public function index()
    {
        $productos = Producto::where('estadoProducto',1)->get();
        $tipoproductos = TipoProducto::where('estadoTipoProducto',1)->get();
        return view('producto.listar',compact('tipoproductos','productos'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $producto = Producto::find($id);
        return $producto;
    }

    public function edit($id)
    {
        $producto = Producto::find($id);
        $tipoproductos = TipoProducto::where('estadoTipoProducto',1)->get();

        return view('producto.editar',compact('producto'))->with('tipoproductos',$tipoproductos);
    }

    public function update(Request $request, $id)
    {
        $producto = Producto::find($id);

        if($request->hasfile('imagenproducto')){
            $file = $request->file('imagenproducto');
            $destinoPath = 'imagenes/productos/';
            $nombreArchivo = time() . '-' . $file->getClientOriginalName();
            $carga = $request->file('imagenproducto')->move($destinoPath,$nombreArchivo);
            $producto->imagenProducto = $destinoPath . $nombreArchivo;
        }else {
            if(empty($producto->imagenProducto))
                $producto->imagenProducto = "";
        }
        
        $producto->codigoProducto = $request->get('codigo');
        $producto->nombreProducto = $request->get('nombre');
        $producto->descripcionProducto = $request->get('detalle');
        $producto->stockProducto = $request->get('stock');
        $producto->precioProducto = $request->get('precio');
        $producto->unidadMedida = $request->get('unidadmedida');
        $producto->idTipoProducto = $request->get('tipoproducto');
        $producto->visibleProducto = 1;
        $producto->estadoProducto = 1;

        $producto->save();
        return redirect('listaproductos');
    }

    public function destroy($id)
    {
        $producto = Producto::find($id);
        $producto->estadoProducto = 0;
        $producto->save();
        return redirect('listaproductos');
    }
}
