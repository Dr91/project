<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class YexkMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public $title;
    public $message;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data,$title,$message)
    {
        $this->data = $data;
        $this->title = $title;
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('back/email/message')->with($this->data)->with(['title'=>$this->title,'message'=>$this->message]);
    }
}
