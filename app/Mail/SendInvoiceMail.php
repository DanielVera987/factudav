<?php

namespace App\Mail;

use App\Models\Invoice;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;
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
     * Undocumented variable
     *
     * @var string
     */
    public $message = '';

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
    public function __construct(Invoice $invoice, $subject = 'Factura Realizada', $message, $pdf, $xml)
    {
        $this->invoice = $invoice;
        $this->subject = $subject;
        $this->message = $message;
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
        $message = $this->markdown('emails.send_customer_invoice');

        if(!empty($this->pdf)) {
            $message->attachData($this->pdf,
                $this->invoice->serie . $this->invoice->folio . 'pdf', [
                    'mime' => 'application/pdf',
                ]
            );
        }

        if(!empty($this->xml)) {
            if(\Storage::disk('xml')->exists($this->xml)){
                $message->attach(\Storage::disk('xml')->path($this->xml), [
                    'as' => $this->invoice->serie . $this->invoice->folio . '.xml'
                ]);
            }
        }

        return $message;
    }
}
