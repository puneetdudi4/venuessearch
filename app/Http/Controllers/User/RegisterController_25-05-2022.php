<?php
namespace App\Http\Controllers\User;
use App\Otp;
use App\User;

use App\Merchant;

use App\Supplier;


use Carbon\Carbon;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;

use App\Model\City;


use Session;


use DB;

use App\Mail\ForgetpasswordEmail;


use App\Mail\RegisterEmail;


use Illuminate\Support\Facades\Mail;


class RegisterController extends Controller
{
	
	public function customerregister()
	{
		
		 $data['city'] = City::getAllApprovedCity();
		  return view('front/register', $data);
	}
	
	public function hotelregister()
	{
		 $data['city'] = City::getAllApprovedCity();
		  return view('front/hotel_register', $data);
	}
	
		public function supplierregister()
	{
		 $data['city'] = City::getAllApprovedCity();
		  return view('front/supplier_register', $data);
	}
	
	
	
		 public function insertSupplier(Request $request)
    {
		
		   $allUser = Merchant::get();
        /*foreach($allUser as $key=>$value) {
            if($request->email == $value->email) {
                $error = "Email already exists";
               // return view('user.auth.register')->with('error',$error);
				
				return redirect('/')->with('error', ' Email already exists');	
            }
        }
		*/
		
	  
	   
	$validatedData = $request->validate([
            'company_name'=> 'required|max:255',
            'email'=> 'required|email|max:255|unique:merchants',
           // 'mobileno'=> 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:8',
		   
		     'mobile_no'=>  'required|min:8|max:8',
		   'landline_no'=>  'required|min:7|max:7',
		   'password' => 'required',
            //'password' => 'required|min:8|confirmed',
            // 'company_name'=> 'max:255',
            // 'company_email'=> 'email|max:255|unique:users',
            ]);
			
	
		
		$mobile_no='+9715'.$request->mobile_no;
		
		$landline_no='+971'.$request->city_code.$request->landline_no;
		
		
        $supplieruser = new Supplier();
		
		
		  $supplieruser->name  ='';
          $supplieruser->email =$request->email;
          $supplieruser->company_name=$request->company_name;
          $supplieruser->area=$request->area;
		  $supplieruser->location='';
          $supplieruser->landline_no=$landline_no;
          $supplieruser->mobile_no=$mobile_no;
          $supplieruser->password=Hash::make($request->password);
          $supplieruser->supplier_password=$request->password;
          $supplieruser->city=$request->city;
          $supplieruser->city_code=$request->city_code;
          $supplieruser->agree =$request->agree;
          $supplieruser->country= '1';
		  $supplieruser->status='Active';
		  
		  $supplieruser->save();
            
			
		
		
		//return redirect('/')->with('success', ' Registered Successfully');	
		
		 Session::flash('message', 'Supplier Registered Successfully'); 


       	$id=$supplieruser->id;
		
		  if (Auth::guard('supplier')->attempt(['email' => $request->email, 'password' => $request->password])) {

            //return redirect()->intended('/admin');
			
			return redirect('/supplier/home')->with('success', ' Registered Successfully');
        }
		
		return redirect('/supplier/register')->with('success', ' Registered Successfully');
		
	}
	
	
    public function register()
    {
        return view('user.auth.register')->with('error','');
    }
	
	 public function insertHotel(Request $request)
    {
		
		   $allUser = Merchant::get();
        /*foreach($allUser as $key=>$value) {
            if($request->email == $value->email) {
                $error = "Email already exists";
               // return view('user.auth.register')->with('error',$error);
				
				return redirect('/')->with('error', ' Email already exists');	
            }
        }
		*/
		
	  
	   
	$validatedData = $request->validate([
            'company_name'=> 'required|max:255',
            'email'=> 'required|email|max:255|unique:merchants',
           // 'mobileno'=> 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:8',
		   
		   'mobile_no'=>  'required|min:8|max:8',
		   'landline_no'=>  'required|min:7|max:7',
		   'password' => 'required',
            //'password' => 'required|min:8|max8',
            // 'company_name'=> 'max:255',
            // 'company_email'=> 'email|max:255|unique:users',
            ]);
			
	
		$mobile_no='+9715'.$request->mobile_no;
		
		$landline_no='+971'.$request->city_code.$request->landline_no;
		
        $hoteluser = new Merchant();
		
		
		  $hoteluser->name  ='';
          $hoteluser->email =$request->email;
          $hoteluser->company_name=$request->company_name;
          $hoteluser->area=$request->area;
          $hoteluser->landline_no=$landline_no;
          $hoteluser->mobile_no=$mobile_no;
          $hoteluser->password=Hash::make($request->password);
          $hoteluser->merchant_password=$request->password;
          $hoteluser->city=$request->city;
          $hoteluser->city_code=$request->city_code;
          $hoteluser->agree =$request->agree;
          $hoteluser->country= '1';
		  $hoteluser->is_active=1;
		  
		  $hoteluser->save();
            
			
		
		
		//return redirect('/')->with('success', ' Registered Successfully');	
		
		 Session::flash('message', 'Hotel Registered Successfully'); 

		

		$id=$hoteluser->id;
		
		  if (Auth::guard('merchant')->attempt(['email' => $request->email, 'password' => $request->password])) {

            //return redirect()->intended('/admin');
			
			return redirect('/merchant/hotel/hotelMerchantView/'.$id)->with('success', ' Registered Successfully');
        }
	
		
       return redirect('/hotel/register')->with('success', ' Registered Successfully');
		
		
	}
	
    public function insertUser(Request $request)
    {
        //return $request;
      
        $allUser = User::get();
		
		
		$user = DB::table('users')->where('email', $request->email)->first();
		
		
		
        $user_mobile = DB::table('users')->where('mobile', $request->mobileno)->first();

       /* $city = City::getAllApprovedCity();
       
           if($user->email == $request->email)
		     {
                $error = "Email already exists";
				
				
		  //return view('front/register', $data);
               // return view('front.register')->with('error',$error);
			   
			   return view('front.register', array('error' => $error,
               'city' => $city ));
			   
            }
			
			if($user_mobile->mobile == $request->mobileno)
			{
				
                $error = "Mobile No already exists";
               // return view('front.register')->with('error',$error);
			   
			      return view('front.register', array('error' => $error,
               'city' => $city ));
			   
            }
        */
		
		
	   
	$validatedData = $request->validate([
            'fullname'=> 'required|max:255',
            'email'=> 'required|email|max:255|unique:users',
           // 'mobileno'=> 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:8',
		   
		   'mobile'=> 'required|unique:users',
		   //'password' => 'required',
            //'password' => 'required|min:8|confirmed',
            // 'company_name'=> 'max:255',
            // 'company_email'=> 'email|max:255|unique:users',
            ]);
			//return $request;
         $user = new User();

        /*if($request->user_type == "Company"){
            $user->user_type = 'C';
            $user->company_name = $request->company_name;
            $user->company_email = $request->company_email;
        }
        if($request->user_type == "Indiviual"){
            $user->user_type = 'I';
        }*/
		
		
		
		$user->country = 'UAE';
		/*$user->city = $request->city;
		$user->area = $request->area;*/
		  
		  
	    //return $request;
        $user->name = $request->fullname;
        $user->email = $request->email;
        $user->mobile = $request->mobile;
        //$user->password = Hash::make($request->password);
        $user->save();
        //return $user;
       // return redirect('/');
        $maildata= array('user' => $user);
       $message='customer information';
       $to='hotelsvenuessuppilers@gmail.com';
       $subject='contact request';
        Mail::send('mail.contactmail', $maildata, function($message) use($to, $subject)
        {
            $message->to($to)->subject($subject);
        });
	   
	   Session::flash('message', 'Customer Registered Successfully'); 
	   
	        //   $this->guard()->login($user);
			
			Auth::loginUsingId($user->id);


	           //return Auth::loginUsingId($user->id);


		
		//return redirect('/customer/register')->with('success', ' Registered Successfully');

		//return redirect('/user/profile')->with('success', ' Registered Successfully');
		
			 $vid= Session::get('book_url');
		 
		
		
		 if($vid !='')
		 {
			 return redirect('/venuedetails/'.$vid);
		 }
		 
         else
		 {
			 //return redirect('/user/profile');
			 return redirect('/user/profile')->with('success', ' Registered Successfully');
		 }
    
    }

    public function addVerificationOtp(Request $request) {
        $url = 'http://customers.smartvision.ae/sms/smsapi?api_key=C20032916088730a26b613.98770523&type=text&contacts='.$request->mobile.'&senderid=7891&msg=Greetings%20from%20HotelsVenues,%20Your%20OTP%20for%20mobile%20verification%20is%20'.$request->otp.'%20!';
        $ch = curl_init($url);
        $result = curl_exec ($ch);
        $otp = new otp();
        $otp->mobile = $request->mobile;
        $otp->otp = $request->otp;
        $otp->return_id = $result;
        $otp->created_at = Carbon::now()->toDateTimeString();
        $otp->save();
        return 1;
    }

    public function verifyOtp(Request $request) {
        $verify = Otp::where('mobile', $request->mobile)->orderBy('created_at', 'desc')->first();
//        dd($request, $verify);
        if($verify->otp == $request->otp)
            return true;
        else
            return false;
    }

    public function resetPassword(Request $request) {
        return redirect('/');
    }
	
	public function forgotpasswordHotel(Request $request) {
		$user = DB::table('merchants')->where('email', $request->email)->first();
		
		
		
         if(@$user =='')
         {
             	 Session::flash('forgot_error', 'Invalid Email'); 

		
		return redirect('/user/login')->with('success', ' Invalid email address , Please check your email');
             
         }
         else
         {
		 
		 
		  $data['mobile_no'] = '+9715';
        $data['landline_no'] = '+971' ;
        $data['email_token'] = str_random(30);
        $data['email']=$request->email;
        
        $data['company_name']='Hotels Venues';
		
		$data['name']=$user->company_name;

         $data['password'] = str_random(5);
         
		 
		        Merchant::where('id', $user->id)->update([
                'password' => Hash::make($data['password']),
                'merchant_password' => $data['password'],
                
				
            ]);

        Mail::to($data['email'])->send(new ForgetpasswordEmail($data));
		
		 Session::flash('forgot', 'Hotel Registered Successfully'); 

		
		return redirect('/user/login')->with('success', ' Passed Reset Successfully, Please check your email');
        
		
         }
		
	}
	
	
	
	
	
	
		
	public function forgotpasswordUser(Request $request) {
		$user = DB::table('users')->where('email', $request->email)->first();
		
		
		
         if(@$user =='')
         {
             	 Session::flash('forgot_error', 'Invalid Email'); 

		
		return redirect('/user/login')->with('success', ' Invalid email address , Please check your email');
             
         }
         else
         {
		 
		 
		  $data['mobile_no'] = '+9715';
        $data['landline_no'] = '+971' ;
        $data['email_token'] = str_random(30);
        $data['email']=$request->email;
        
        $data['company_name']='Hotels Venues';
		
		$data['name']=$user->name;

         $data['password'] = str_random(5);
         
		 
		        User::where('id', $user->id)->update([
                'password' => Hash::make($data['password'])
                
                
				
            ]);

        Mail::to($data['email'])->send(new ForgetpasswordEmail($data));
		
		 Session::flash('forgot', 'User  Password changed  Successfully'); 

		
		return redirect('/user/login')->with('success', ' Passed Reset Successfully, Please check your email');
        
		
         }
		
	}
	
	
	
		public function forgotpasswordSupplier(Request $request) {
		$user = DB::table('suppliers')->where('email', $request->email)->first();
		
		
		
         if(@$user =='')
         {
             	 Session::flash('forgot_error', 'Invalid Email'); 

		
		return redirect('/user/login')->with('success', ' Invalid email address , Please check your email');
             
         }
         else
         {
		 
		 
		  $data['mobile_no'] = '+9715';
        $data['landline_no'] = '+971' ;
        $data['email_token'] = str_random(30);
        $data['email']=$request->email;
        
        $data['company_name']='Hotels Venues';
		
		$data['name']=$user->company_name;

         $data['password'] = str_random(5);
         
		 
		        Supplier::where('id', $user->id)->update([
                'password' => Hash::make($data['password']),
                'supplier_password' => $data['password'],
                
				
            ]);

        Mail::to($data['email'])->send(new ForgetpasswordEmail($data));
		
		 Session::flash('forgot', 'Supplier  password changed Successfully'); 

		
		return redirect('/user/login')->with('success', ' Passed Reset Successfully, Please check your email');
        
		
         }
		
	}
	
	
	
	
	
	
	
}
