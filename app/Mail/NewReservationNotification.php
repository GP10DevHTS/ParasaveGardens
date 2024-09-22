<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NewReservationNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $customer;
    public $number_of_people;
    public $reservation_date;
    public $number_of_days;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($customer, $number_of_people, $reservation_date, $number_of_days)
    {
        $this->customer = $customer;
        $this->number_of_people = $number_of_people;
        $this->reservation_date = $reservation_date;
        $this->number_of_days = $number_of_days;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Reservation Notification',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'mail.new-reservation-notification',
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
