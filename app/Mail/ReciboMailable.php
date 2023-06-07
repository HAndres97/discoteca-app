<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ReciboMailable extends Mailable
{
    use Queueable, SerializesModels;
    /**
     * Create a new message instance.
     * 
     */
    public $name;
    public $subject = "Información de la Compra";
    public function __construct($name)
    {
        $this->name = $name;
    }
    public function build(){
        return $this->view('recibos');
    }

}
