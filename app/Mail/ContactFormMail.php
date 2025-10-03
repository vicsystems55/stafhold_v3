<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     */
    public function build()
    {
        return $this->from('info@stafholdgroup.com')
                    ->subject($this->data['subject'] ?? 'New contact form submission')
                    ->view('emails.contact_form_receipt_mail')
                    ->with('data', $this->data);
    }
}
