<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMessagesContact extends Mailable
{
    use Queueable, SerializesModels;

    public $info;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->info = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $subject = $this->info['subject'];
        $bodyMessage = $this->info['bodyMessage'];
        $mailFrom = $this->info['mailFrom'];
        $nameFrom = $this->info['nameFrom'];
        $phoneFrom = $this->info['phoneFrom'];

        return $this->subject($subject)
                    ->from($mailFrom,$nameFrom)
                    ->view('contactMail',$this->info)
                    ->with([
                        'subject' => $subject,
                        'bodyMessage' =>$bodyMessage,
                        'phoneFrom' => $phoneFrom
                        ]);
    }
}
