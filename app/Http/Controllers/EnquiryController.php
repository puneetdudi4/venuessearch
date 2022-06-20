<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Mail;

class EnquiryController extends Controller
{
    public function enquiry(Request $request){
     
      $user = new User();
       
    
    
    $user->country = 'UAE';
      $cat = $request->category;
    $category = implode(',',$cat); 
      
        $user->name = $request->fullname;
        $user->email = $request->email;
        $user->mobile = $request->number;
        $user->message = $request->message;
        $user->category = $category;
    
        
        $maildata= array('user' => $user);
       $message='customer information';
       $to='hotelsvenuessuppilers@gmail.com';
       $subject='Enquiry request';
        Mail::send('mail.enquiryEmail', $maildata, function($message) use($to, $subject)
        {
            $message->to($to)->subject($subject);
        });
        
    return response()->json(['success'=>'Form is successfully submitted!']);
        // return redirect()->back()->with(['success' => "Form Submitted Successfully"]);

    }
}
