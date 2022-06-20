<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BookingEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->booking = $data["booking"];
		$this->menus = $data["menus"];
		$this->type = $data["type"];
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
            'booking' => $this->booking,
			
			'menus' => $this->menus,
			
			'type' => $this->type,
			
			
        ];
        return $this->view('mail.BookingEmail', $data);
    }
}
