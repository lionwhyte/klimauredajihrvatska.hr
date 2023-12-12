<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;

class ContactFormSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        $subject = "Zatražen upit za Kompletan cjenik klima - Vedran Company";

        if($this->data["path"] === "/kompletan-cjenik-klima-25kw-za-prostore-od-7-25-m2"){
            $subject = "Zatražen upit za Kompletan cjenik klima 2,5kw - Vedran Company";
        } elseif($this->data["path"] === "/kompletan-cjenik-klima-35kw-za-prostore-od-25-40-m2"){
            $subject = "Zatražen upit za Kompletan cjenik klima 3,5kw - Vedran Company";
        } elseif($this->data["path"] === "/kompletan-cjenik-klima-5kw-za-prostore-od-40-60-m2"){
            $subject = "Zatražen upit za Kompletan cjenik klima 5kw - Vedran Company";
        } elseif($this->data["path"] === "/kompletan-cjenik-klima-7kw-za-prostore-od-60-90-m2"){
            $subject = "Zatražen upit za Kompletan cjenik klima 7kw - Vedran Company";
        }

        return new Envelope(
            from: new Address('toni.technoprom@gmail.com', 'Klima uređaji Hrvatska'),
            subject: $subject,
            
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'emails.contact_form_submitted',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
