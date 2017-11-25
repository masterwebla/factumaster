<?php

namespace App\Mail;


use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class RegistroUsuario extends Mailable
{
    use Queueable, SerializesModels;

    public $nombrer;
    public $emailr;
    public $passwordr;

    public function __construct($nombrer,$emailr,$passwordr)
    {
        $this->nombrer = $nombrer;
        $this->emailr = $emailr;
        $this->passwordr = $passwordr;
    }


    public function build()
    {
        return $this->from('admin@osmaro.com')
                    ->subject('Bienvenid@ a FactuMaster')
                    ->view('mails.registro');
    }
}
