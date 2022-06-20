<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RegisterEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->fullname = $data["fullname"];
		$this->email = $data["email"];
		$this->mobileno = $data["mobileno"];
		//$this->name = $data["name"];
       // $this->url = url('/merchant-verify/'.$data["email"].'/'.$data["email_token"]);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $data = [
            'fullname' => $this->fullname,
			
			'email' => $this->email,
			
			'mobileno' => $this->mobileno,
			
			
        ];
        return $this->view('mail.RegisterEmail', $data);
    }
}
