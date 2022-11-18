<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Symfony\Component\Mime\Email;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $contact_data;
    public function __construct($contact_data)
    {
        $this->contact_data = $contact_data;
       
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        
    return $this->from('example@gmail.com')
	    ->to('example@gmail.com')
        ->view('emails.contact_mail')
        ->subject(
            $this->contact_data['subject']
        )
        ->with([
          'contact_data' => $this->contact_data
        ]);
    }
}
