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
        return view('producto.listar',compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        return redirect('/listaproductos');
    }

    public function destroy($id)
    {
        //
    }
}
