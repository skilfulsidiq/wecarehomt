<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendPdfMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    protected $pdf;
    public $view;
    public function __construct($pdf,$view)
    {
        $this->pdf = $pdf;
        $this->view = $view;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Send Pdf Mail',
        );
    }

    /**
     * Get the message content definition.
     * return $this->from(env('MAIL_FROM_ADDRESS'))
               ->subject('Stock Report - Laravel Tutorial')
               ->view('mail.stockreportmail')
               ->attachData($this->pdf->output(), 'stock_report.pdf');
     */
    public function content(): Content
    {
        return new Content(
            view: $this->view,
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
