<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\TipoProducto;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::where('estadoProducto',1)->get();
        return view('producto.catalogo',compact('productos'));
    }

    public function create()
    {
        $tipoproductos = TipoProducto::where('estadoTipoProducto',1)->get();
        return view('producto.crear',compact('tipoproductos'));
    }

    public function store(Request $request)
    {
        $producto = new Producto();

        if($request->hasfile('imagenproducto')){
            $file = $request->file('imagenproducto');
            $destinoPath = 'imagenes/productos/';
            $nombreArchivo = time() . '-' . $file->getClientOriginalName();
            $carga = $request->file('imagenproducto')->move($destinoPath,$nombreArchivo);
            $producto->imagenProducto = $destinoPath . $nombreArchivo;
        }else {
            $producto->imagenProducto = "";
        }

        $producto->nombreProducto = $request->get('nombre');
        $producto->stockProducto = $request->get('stock');
        $producto->precioProducto = $request->get('precio');
        $producto->unidadMedida = $request->get('unidadmedida');
        $producto->idTipoProducto = $request->get('tipoproducto');
        $producto->visibleProducto = 1;
        $producto->estadoProducto = 1;

        $producto->save();
        return redirect('/catalogo');
    }

    public function show($id)
    {
        $producto = Producto::find($id);
        return view('producto.detalleproducto',compact('producto'));
    }

    public function edit($id)
    {
        $producto = Producto::find($id)->get();
        return view('producto.editar')->with('producto',$producto);
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
