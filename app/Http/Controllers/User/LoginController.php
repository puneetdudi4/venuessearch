<?php
namespace App\Http\Controllers\User;
use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Hesto\MultiAuth\Traits\LogsoutGuard;

use Session;
//use Illuminate\Http\Request;

class LoginController extends Controller
{
   
    use AuthenticatesUsers, LogsoutGuard {
        LogsoutGuard::logout insteadof AuthenticatesUsers;
    }
       /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    
    //public $redirectTo = '/user/profile';
 
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }
	
		
	  protected function authenticated()
    {
       /* if ( $user->isAdmin() ) {// do your magic here
            return redirect()->route('dashboard');
        }*/
		
		//$request->session()->get('book_url', $vid);
		 $vid= Session::get('book_url');
		 
		
		
		 if($vid !='')
		 {
			 return redirect('/venuedetails/'.$vid);
		 }
		 
         else
		 {
			 return redirect('/user/profile');
		 }
	
		

        
    }
    public function index()
    {
        //return view('user.auth.login');
		$data=array();
		
	    return view('front/login', $data);
    }
	
	 public function index_old()
    {
        return view('user.auth.login');
    }
	
	
	
      /**
     * Get the guard to be used during authentication.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('web');
    }
   
}
?>