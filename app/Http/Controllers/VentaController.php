<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carrito;
use App\Models\Venta;
use App\Models\ProductoVenta;
use Illuminate\Support\Facades\DB;

class VentaController extends Controller
{
    public function listaCarrito(){
        $items = Carrito::all();
        return view('producto.carrito',compact('items'));
    }

    public function listaVentas(){
        $ventas = Venta::all();
        return view('venta.listar',compact('ventas'));
    }

    public function listaDetalleVenta($id){
        $detalleventa = ProductoVenta::where('idVenta',$id)->get();
        return $detalleventa;
    }

    public function store(Request $request){
        try {
            DB::beginTransaction();
            $venta = new Venta();
            $venta->identificadorCliente = $request['jsonEnviarFinal']['identificadorCliente'];
            $venta->denominacionCliente = $request['jsonEnviarFinal']['denominacionCliente'];
            $venta->direccionCliente = $request['jsonEnviarFinal']['direccionCliente'];
            $venta->fechaVenta = $request['jsonEnviarFinal']['fechaVenta'];
            $venta->serieVenta = "TCK001";
            $venta->numeroSerieVenta = "00001";
            $venta->estadoVenta = 1;
            $venta->idComprobante = 1;
            $venta->totalVenta = $request['jsonEnviarFinal']['totalVenta'];
            $venta->idCliente = 1;
            $venta->save();
            $lista = json_decode($request['jsonEnviarFinal']['lista'], true);
            $total = 0;
            foreach($lista as $detalle){
                $detalleventa = new ProductoVenta();
                $detalleventa->idVenta = $venta->id;
                $detalleventa->idProducto = $detalle['id'];
                $detalleventa->nombreProducto = $detalle['nombreProducto'];
                $detalleventa->precioProducto = $detalle['precioProducto'];
                $detalleventa->cantidadProducto = $detalle['cantidad'];
                $detalleventa->save();
                // $total = $total + ($detalleventa->precioProducto*$detalleventa->cantidadProducto);
            }
            DB::commit();
            return "Se guardo Correctamente la venta.";
        } catch (Exception $exception){
            DB::rollBack();
            return "ERROR NO SE INGRESO VENTA.";
        }
    }

    public function agregarCarrito(Request $request){
        $carrito = new Carrito();
        $carrito->idProducto = $request['json']['id'];
        $carrito->codigoProducto = $request['json']['codigoProducto'];
        $carrito->nombreProducto = $request['json']['nombreProducto'];
        $carrito->unidadMedida = $request['json']['unidadMedida'];
        $carrito->cantidadProducto = $request['json']['cantidad'];
        $carrito->precioProducto = $request['json']['precioProducto'];
        
        $carrito->save();
        return $carrito;
    }

    public function eliminarCarrito($id)
    {
        $carrito = Carrito::find($id);
        $carrito->delete();
        return $carrito;
    }

    public function verCarrito(Request $request){
        $items = [];
        foreach($request->carrito as $detalle){
            array_push($items,$detalle);
        }
        return view('producto.carrito',compact('items'));
    }
}
