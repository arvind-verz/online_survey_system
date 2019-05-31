<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailProjectRegistration extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $registration;

    public function __construct($registration)
    {
        $this->registration = $registration;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //dd($this->registration);
        return $this->subject('Verz Survey')->view('admin.email_templates.email_project_registration', [
            'url'           => $this->registration['url'],
            'receiver_name' => $this->registration['receiver_name'],
            'sender_email'  => $this->registration['sender_email'],
            'sender_name'   => $this->registration['sender_name'],
        ]);
    }
}
