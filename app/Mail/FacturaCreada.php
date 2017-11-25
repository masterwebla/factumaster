<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class FacturaCreada extends Mailable
{
    use Queueable, SerializesModels;

    public $nrofactura;
    public $valorfactura;

    public function __construct($nrofactura,$valorfactura)
    {
        $this->nrofactura = $nrofactura;
        $this->valorfactura = $valorfactura;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('admin@osmaro.com')
                    ->subject('Se ha creado una nueva Factura')
                    ->view('mails.factura');
    }
}
