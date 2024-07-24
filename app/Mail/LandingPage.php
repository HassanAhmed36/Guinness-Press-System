<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;

class LandingPage extends Mailable
{
    use Queueable, SerializesModels;

    public $manuscript_name;
    public $manuscript_path;
    public $data;
    public $url;

    /**
     * Create a new message instance.
     *
     * @param string $manuscript_name
     * @param string $manuscript_path
     * @param array $data
     */
    public function __construct($manuscript_name, $manuscript_path, $data , $url)
    {
        $this->manuscript_name = $manuscript_name;
        $this->manuscript_path = $manuscript_path;
        $this->data = $data;
        $this->url = $url;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->subject('Submission From Landing Page')
            ->view('mail.landing-page')
            ->attach($this->manuscript_path, [
                'as' => $this->manuscript_name,
                'mime' => 'application/pdf' // Adjust MIME type accordingly
            ]);
    }
}
