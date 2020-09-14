<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ApplyMail extends Mailable
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

        $from = $this->data['from'];
        $subject = $this->data['subject'];


        return $this->from($from)->subject($subject)
            ->view('jobs.success', compact('from'))
            ->attach($this->data['image']->getRealPath(), [
                'as' => $this->data['image']->getClientOriginalName()]);
    }
}
