<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactanosMailable extends Mailable
{
    use Queueable, SerializesModels;

    //creamos la variable que va a contener el asunto

    public $subject = "Información de contacto";

    public $contacto;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contacto)
    {
        $this->contacto=$contacto;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //manda a una vista que va a tener el contenido de nuestro mail

        return $this->view('emails.contactanos');
    }
}
