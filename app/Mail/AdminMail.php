<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class AdminMail extends Mailable
{
    use Queueable, SerializesModels;
    public $name, $email, $phone, $message;

    /**
     * Create a new message instance.
     */
    public function __construct( $name, $phone, $email, $message )
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->message = $message;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('no-reply@kikeafrica.co.tz', 'Kike Africa Team'),
            subject: 'Kike Africa Website: Someone Contacted You!',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'admin_email',
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
