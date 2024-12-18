<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CandidatureMail extends Mailable
{
     use Queueable, SerializesModels;

    public $user; // Les données du formulaire
    public $cvPath;
    public $lettrePath;

    /**
     * Create a new message instance.
     *
     * @param  array  $user
     * @return void
     */
    public function __construct($user,$cvPath,$lettrePath)
    {
        $this->user = $user;
        $this->cvPath = $cvPath;
        $this->lettrePath = $lettrePath;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Nouvelle candidature')->attach($this->cvPath)->attach($this->lettrePath)->view('emails.candidature', ['user' => $this->user]);
    }
}
