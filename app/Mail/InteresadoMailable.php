<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;

class InteresadoMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = "¡Hay Alguien Interesado!";
    public $contacto;
    public $interesado;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contacto)
    {
        $this->contacto = $contacto;
        $this->interesado = Auth::user();
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.interesado');
    }
}
