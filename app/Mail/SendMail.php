<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
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
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        $msg = $this->data['msg'];
        $name = $this->data['name'];
        $email = $this->data['email'];
        $subject = $this->data['subject'];
        $to = $this->data['to'];


        return $this->to($to)->from($email)->subject($subject)
            ->view('jobs.success', compact('email'));

    }
}
