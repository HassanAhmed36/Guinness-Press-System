<?php

namespace App\Mail;

use App\Models\Submission;
use App\Models\SubmissionFile;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SubmissionStatusUpdate extends Mailable
{
    use Queueable, SerializesModels;

    public $submission;
    public $file;
    public $feedback;
    public $stage;
    public $status;
    public $messageContent;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Submission $submission, SubmissionFile $file, $feedback, $stage, $status, $messageContent)
    {
        $this->submission = $submission;
        $this->file = $file;
        $this->feedback = $feedback;
        $this->stage = $stage;
        $this->status = $status;
        $this->messageContent = $messageContent; // Assign it to the class property
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.submission-status-update')
            ->subject('Guinness Press Submission Update');
    }
}
