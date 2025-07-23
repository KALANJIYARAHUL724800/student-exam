<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;
class WelcomeEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    protected $data;
    public function __construct($data)
    {
        $this->data = $data;
    }
    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Welcome Student "' . Auth::user()->name . '"',
        );
    }

    /**
     * Get the message content definition.
     */
public function content(): Content
{
    $email_data = $this->data;

    // Create a Content object first
    $content = new Content('emails.email');
    
    // Then pass the data using the with() method
    return $content->with('email_data', $email_data);
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
