<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderMail extends Mailable
{
    use Queueable, SerializesModels;

    public $order_url;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($order_url)
    {
        $this->order_url = $order_url;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Potwierdzenie zamówienia')->markdown('emails.order');
    }
}
