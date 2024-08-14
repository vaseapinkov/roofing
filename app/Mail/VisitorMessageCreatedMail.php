<?php

namespace App\Mail;

use App\Models\VisitorMessage;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class VisitorMessageCreatedMail extends Mailable
{
    use Queueable, SerializesModels;

    private VisitorMessage $visitorMessage;

    public function __construct(VisitorMessage $visitorMessage)
    {
        $this->visitorMessage = $visitorMessage;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Visitor Message',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.visitor-message-created',
            with: ['visitorMessage' => $this->visitorMessage],
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
