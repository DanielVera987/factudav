<?php

namespace App\Mail;

use App\Models\Invoice;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendInvoiceMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Data of Invoice
     *
     * @var Invoice
     */
    public $invoice = '';

    /**
     * Subject for email
     *
     * @var string
     */
    public $subject = '';

    /**
     * Filename of pdf
     *
     * @var string
     */
    public $pdf = '';

    /**
     * Filename of xml
     *
     * @var string
     */
    public $xml = '';

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Invoice $invoice, $subject = 'Factura Realizada', $pdf, $xml)
    {
        $this->invoice = $invoice;
        $this->subject = $subject;
        $this->pdf = $pdf;
        $this->xml = $xml;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.send_customer_invoice');
    }
}
