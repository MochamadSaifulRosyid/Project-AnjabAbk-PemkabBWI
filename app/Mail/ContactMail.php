<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

class ContactMail extends Mailable
{
    public $details;

    // Konstruktor untuk menerima data email
    public function __construct($details)
    {
        $this->details = $details;
    }

    public function build()
    {
        // Menentukan subject dan view untuk email
        return $this->subject('Pesan dari Kontak Form')
                    ->view('emails.contactmail');
    }
}
