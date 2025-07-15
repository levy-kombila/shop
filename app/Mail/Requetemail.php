<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Requetemail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $nom_complet;

    /**
     * Create a new message instance.
     */
    public function __construct($user, $nom_complet)
    {
        //
        $this->user = $user;
        $this->nom_complet = $nom_complet;
    }

    public function build(): RequeteMail
        {
            return $this->subject(subject: 'bienvenue sur shop')
            ->view(view: 'emails.requete_shop')
            ->with(key: [
                'name' => $this->nom_complete
            ]);
        }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Requetemail',
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
