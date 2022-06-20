<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EnquiryEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
     
		
		$this->fullname= $data["fullname"];
        $this->event_date= $data["event_date"];
        $this->city= $data["city"];
        $this->guests= $data["guests"];
        $this->event_type= $data["event_type"];
        $this->budget= $data["budget"];
        $this->email= $data["email"];
        $this->mobile= $data["mobile"];

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
			
			'event_date' => $this->event_date,
			
			'city' => $this->city,
			'guests' => $this->guests,
			'event_type' => $this->event_type,
			'budget' => $this->budget,
			'email' => $this->email,
			'mobile' => $this->mobile,
			
			
        ];
        
        
       
        return $this->view('mail.enquiryEmail', $data);
    }
}
