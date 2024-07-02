<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendPeerReview extends Mailable
{
    use Queueable, SerializesModels;

   
    public $newGeneratedPassword;
    public $user;

    /**
     * Create a new message instance.
     *
     * @param string $newGeneratedPassword
     * @param User $user
     */
    public function __construct($newGeneratedPassword, User $user)
    {
        $this->newGeneratedPassword = $newGeneratedPassword;
        $this->user = $user;
    }
    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Assigning Peer Review for Submission',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'view.name',
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
