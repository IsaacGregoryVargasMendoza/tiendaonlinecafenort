<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\TipoProducto;
use Illuminate\Support\Facades\DB;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::where('estadoProducto',1)->where('visibleProducto',1)->get();
        $tipoproductos = TipoProducto::where('estadoTipoProducto',1)->get();
        return view('producto.catalogo',compact('productos','tipoproductos'));
    }

    public function create()
    {
        $tipoproductos = TipoProducto::where('estadoTipoProducto',1)->get();
        $codigo = DB::select('call sp_generar_codigo');
        //se accede a la posicion 0 del array 
        return view('producto.crear',compact('tipoproductos'))->with('codigo',$codigo[0]);
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
        
        $producto->codigoProducto = $request->get('codigo');
        $producto->nombreProducto = $request->get('nombre');
        $producto->descripcionProducto = $request->get('detalle');
        $producto->stockProducto = $request->get('stock');
        $producto->precioProducto = $request->get('precio');
        $producto->unidadMedida = $request->get('unidadmedida');
        $producto->idTipoProducto = $request->get('tipoproducto');
        $producto->visibleProducto = $request->get('visible');
        $producto->estadoProducto = 1;

        $producto->save();
        return redirect('/listaproductos');
    }

    public function show($id)
    {
        $producto = Producto::find($id);
        return view('producto.detalleproducto',compact('producto'));
    }

    public function filtrarProductos($idtipoproducto){
        $productos = Producto::where('idTipoProducto',$idtipoproducto)->where('estadoProducto',1)->where('visibleProducto',1)->get();
        return $productos;
    }

    public function sinFiltrarProductos(){
        $productos = Producto::where('estadoProducto',1)->where('visibleProducto',1)->get();
        return $productos;
    }

    public function edit($id)
    {
        $producto = Producto::find($id)->get();
        return view('producto.editar')->with('producto',$producto);
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
        $producto->visibleProducto = $request->get('visible');
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
