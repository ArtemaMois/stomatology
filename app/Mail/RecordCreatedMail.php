<?php

namespace App\Mail;

use App\Models\Record;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class RecordCreatedMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        private Record $record
    ) {}
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Запись на прием',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'mail.record_created',
            with: ['record' => $this->record]
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
