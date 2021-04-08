<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;

class EnviarDocumentos extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $documentos;
    public $remitente;
    public function __construct($documentos,$remitente)
    {
        $this->documentos=$documentos;
        $this->remitente=$remitente;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $email= $this->view('recursos_humanos.documentos.enviar_documentos');
        $email->subject('Documento recibido');
        foreach ($this->documentos as $documento) {
            $url=storage_path()."/app/".$documento->url;
            $email->attach($url);
        }
        return $email;
    }
}
