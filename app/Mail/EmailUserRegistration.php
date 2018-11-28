<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailUserRegistration extends Mailable
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
        return $this->subject('User Registration')->view('admin.email_templates.email_user_registration', [
            'url'               => $this->registration['url'],
            'receiver_name'     => $this->registration['receiver_name'],
            'login_url'         => $this->registration['login_url'],
            'receiver_email'    => $this->registration['receiver_email'],
            'receiver_password' => $this->registration['receiver_password'],
            'sender_email'      => $this->registration['sender_email'],
            'sender_name'       => $this->registration['sender_name'],
        ]);
    }
}
