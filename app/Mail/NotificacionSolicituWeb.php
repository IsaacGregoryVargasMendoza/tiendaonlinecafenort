<?php

namespace App\Mail;

use App\Models\SolicitudWeb;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NotificacionSolicituWeb extends Mailable
{
    use Queueable, SerializesModels;

    private SolicitudWeb $solicitud;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(SolicitudWeb $solicitud)
    {
        $this->solicitud = $solicitud;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.notificar-solicitud-web', ['solicitud' => $this->solicitud]);
    }
}
