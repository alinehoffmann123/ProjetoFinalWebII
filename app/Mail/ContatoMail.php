<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContatoMail extends Mailable {
    use Queueable, SerializesModels;

    public $detalhes;

    public function __construct($aDados) {
        $this->detalhes = $aDados;
    }

    public function build() {
        return $this->subject('Novo Contato - asPatas')
                    ->view('emails.contato');
    }
}
