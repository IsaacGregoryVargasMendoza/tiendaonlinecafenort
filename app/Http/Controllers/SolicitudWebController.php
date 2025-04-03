<?php

namespace App\Http\Controllers;

use App\Mail\NotificacionSolicituWeb;
use App\Models\SolicitudWeb;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Throwable;

class SolicitudWebController extends Controller
{
    public function registrarSolicitud(Request $request)
    {
        try {
            $rules = [
                'nombre'    => 'required|string|max:255',
                'email'     => 'required|email|max:255',
                'servicio'  => 'required|string|max:255',
                'mensaje'   => 'nullable|string|max:1000',
            ];

            $mensajes = [
                'nombre.required'   => 'El nombre es requerido.',
                'nombre.max'        => 'El nombre no debe contener mas de 255 caracteres.',
                'email.required'    => 'El email es requerido.',
                'email.email'       => 'El email no es valido.',
                'email.max'         => 'El email no debe contener mas de 255 caracteres.',
                'servicio.required' => 'El servicio es requerido.',
                'servicio.max'      => 'El servicio no debe contener mas de 255 caracteres.',
                'mensaje.max'       => 'El mensaje no debe contener mas de 1000 caracteres.',
            ];

            $data = $request->all();

            $validator = Validator::make($data, $rules, $mensajes);

            $validator->validate();

            switch ($data['servicio']) {
                case '1':
                    $data['servicio'] = 'Soporte Técnico';
                    break;
                case '2':
                    $data['servicio'] = 'Mantenimiento de Equipos';
                    break;
                case '3':
                    $data['servicio'] = 'Mantenimiento de Camaras de Seguridad';
                    break;
                case '4':
                    $data['servicio'] = 'Desarrollo Web / Apps';
                    break;
                case '5':
                    $data['servicio'] = 'Servicio de Outsourcing TI';
                    break;
                case '6':
                    $data['servicio'] = 'Otros';
                    break;
            }

            $solicitud = SolicitudWeb::create($data);
            Mail::to(['ventas@devesoft.tech'])
                ->send(new NotificacionSolicituWeb($solicitud));
            return back()
                ->withInput();
        } catch (Throwable $th) {
            return back()
                ->withInput();
        }
    }
}
