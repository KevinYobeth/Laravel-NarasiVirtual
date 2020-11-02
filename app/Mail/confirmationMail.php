<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ConfirmationMail extends Mailable
{
    use Queueable, SerializesModels;
    private $data;

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
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        $mailAddress = env('MAIL_FROM_ADDRESS');

        return $this->from($mailAddress, 'NARASI - Confirmation')
            ->subject('NARASI - Confirmation')
            ->markdown('mails.confirmation')->with([
                'data' => $this->data,
            ]);
    }
}
