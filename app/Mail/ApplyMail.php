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

        $name = $this->data['name'];

        return $this->from('hsn42476@gmail.com')->subject('email')
            ->view('jobs.success', compact('name'))
            ->attach($this->data['image']->getRealPath(), [
                'as' => $this->data['image']->getClientOriginalName()]);
    }
}
