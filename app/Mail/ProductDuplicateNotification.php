<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ProductDuplicateNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $sku;

    public function __construct($sku)
    {
        $this->sku = $sku;
    }

    public function build()
    {
        return $this->markdown('emails.product-duplicate')
                    ->subject('Duplicate Product SKU Detected');
    }
}
