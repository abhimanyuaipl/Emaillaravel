<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Contactme extends Mailable
{
    use Queueable, SerializesModels;
    public $topic;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( string $topic)
    {
    $this->topic=$topic     ;   
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('email.contact')
        ->subject('more information about ' .$this->topic);
    }
}