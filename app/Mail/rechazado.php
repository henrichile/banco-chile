<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class rechazado extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nombre,$correo)
    {
        $this->nombre= $nombre;
        $this->correo= $correo;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.rechazado')
        ->subject("Siga Participando")
        ->with([
            "nombre" => $this->nombre,
            "correo" => $this->correo,
        ]);
    }
}
