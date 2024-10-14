<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Mensaje extends Mailable
{
    use Queueable, SerializesModels;

    public $datos;
    public $isAdmin;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($datos, $isAdmin = false)
    {
        $this->datos = $datos;
        $this->isAdmin = $isAdmin;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if ($this->isAdmin) {
            return $this->view('emails.admin')
                ->subject('Mensaje de Contacto Recibido');
                
        } else {
            return $this->view('emails.user')
                ->subject('Mensaje de Contacto Enviado');
        }
    }
}