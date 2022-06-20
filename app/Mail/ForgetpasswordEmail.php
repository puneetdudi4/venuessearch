<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ForgetpasswordEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->hotel_name = $data["company_name"];
		$this->password = $data["password"];
		$this->name = $data["name"];
        $this->url = url('/merchant-verify/'.$data["email"].'/'.$data["email_token"]);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $data = [
            'hotel_name' => $this->hotel_name,
			
			'name' => $this->name,
			
			'password' => $this->password,
			
			
            'url' => $this->url
        ];
        return $this->view('mail.forgetpasswordEmail', $data);
    }
}
