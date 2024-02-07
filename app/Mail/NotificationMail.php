<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Symfony\Component\Mime\Email;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Attachment;
use Symfony\Component\Mime\Header\UnstructuredHeader;

class NotificationMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address('test@example.com', 'tester'),
            subject: 'Notification Email',
            using: [
                        function (Email $email) {
                          // Headers
                            $email->getHeaders()
                                ->addTextHeader('X-Message-Source', 'example.com')
                                ->add(new UnstructuredHeader('X-Mailer', 'Mailtrap PHP Client'));
                        },
                    ]
            );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.notification',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [
            Attachment::fromPath('https://mailtrap.io/wp-content/uploads/2021/04/mailtrap-new-logo.svg')
                ->as('logo.svg')
                ->withMime('image/svg+xml'),
        ];
    }
}
