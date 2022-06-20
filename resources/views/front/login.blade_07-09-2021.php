@include('front.layout.header')

<style>
.help-block strong
{
	color:red;
}
.active

{
	/*display: block ! IMPORTANT;*/
    opacity: 1 ! IMPORTANT;
}
ul.nav-tabs li a
{
	  
		
		padding: 10px 20px;
    line-height: 45px;
    font-size: 19px;
    font-weight: bold;
  
}
ul.nav-tabs li a.active
{
	background:#efecec9c;
}

.login_bg
{
	    background: #efecec9c;
    padding: 30px;
    border-radius: 30px;
}
</style>
 
	<main>




            <section class="contact-form">
			

<div class="container" style="margin-top:30px">
<div class="row">
										
										<div class="col-md-3 col-3"> </div>
										
										<div class="col-md-6 col-6 ">
  <h2>Are You  SignIn as a:</h2>
  <ul class="nav nav-tabs" style="margin-top:30px">
    <li ><a data-toggle="tab"  class="active" href="#user">User</a></li>
    <li><a data-toggle="tab" href="#hotel">Hotel</a></li>
    <li><a data-toggle="tab" href="#supplier">Supplier</a></li>
    
  </ul>
  </div>
  <div class="col-md-3 col-3"> </div>
  </div>
  
  
  

  <div class="tab-content" >
    <div id="user" class="tab-pane fade in active"  style="margin-top:30px">
      
	  
	   <form class="form" role="form" method="POST" action="{{ url('/user/login-user') }}">
                                        {{ csrf_field() }}
										
										<div class="row">
										
										<div class="col-md-3 col-3"> </div>
										
										<div class="col-md-6 col-6 login_bg">
										<h3 style="margin-left:2.5%; margin-bottom:5px">User Sign In</h3>
	  
                                          <div class="col-md-12 col-12">
                                            <div class="input-wrap">
											 <input  name="email" type="email" placeholder="Your Email"  required="" oninvalid="this.setCustomValidity('Please Enter Valid Email')"   oninput="setCustomValidity('')" id="email" value="{{ old('email') }}" >
											</div>
											
											@if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
											
											</div>
											
											
											
											<div class="col-md-12 col-12">
                                            <div class="input-wrap">
											 <input  name="password" type="password" placeholder="Your Password"  required="" oninvalid="this.setCustomValidity('Please Password')"   oninput="setCustomValidity('')" id="email" value="{{ old('password') }}" >
											</div>
											
											@if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
											
											</div>
								
                                      
                                        <div class="clearfix action">
                                            <div class="form-group ">
                                                <button type="submit" class="btn filled-btn">Sign In
                                                </button>
                                            </div>
									    </div>		
											
											</div>
										<div class="col-md-3 col-3"> </div>	
					                 </div>
									 

					</form>
						 
   
    </div>
    <div id="hotel" class="tab-pane fade"  style="margin-top:30px">
	
	<div class="row">
										
										<div class="col-md-3 col-3"> </div>
										
										<div class="col-md-6 col-6 login_bg">
      <h3 style="margin-left:2.5%; margin-bottom:5px">Hotel Sign In</h3>
	  
	   <form class="form" role="form" method="POST" action="{{ url('/merchant/login') }}">
                                        {{ csrf_field() }}
										
										 <div class="col-md-12 col-12">
                                            <div class="input-wrap">
											 <input  name="email" type="email" placeholder="Your Email"  required="" oninvalid="this.setCustomValidity('Please Enter Valid Email')"   oninput="setCustomValidity('')" id="email" value="{{ old('email') }}" >
											</div>
											
											@if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
											
											</div>
											
											
											
											<div class="col-md-12 col-12">
                                            <div class="input-wrap">
											 <input  name="password" type="password" placeholder="Your Password"  required="" oninvalid="this.setCustomValidity('Please Password')"   oninput="setCustomValidity('')" id="email" value="{{ old('password') }}" >
											</div>
											
											@if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
											
											</div>
								
                                      
                                        <div class="clearfix action">
                                            <div class="form-group ">
                                                <button type="submit" class="btn filled-btn">Sign In
                                                </button>
                                            </div>
									    </div>	
										
										<p>
										 <a href="#" data-toggle="modal" data-target="#forgotbox"> Forgot Password </a>
										</p>
		</form>

		
	  
	  </div>
	  <div class="col-md-3 col-3"> </div>
	  </div>
	  
									
									
									
      
    </div>
    <div id="supplier" class="tab-pane fade" style="margin-top:30px">
	
	<div class="row">
										
										<div class="col-md-3 col-3"> </div>
										
										<div class="col-md-6 col-6 login_bg">
      <h3 style="margin-left:2.5%; margin-bottom:5px">Supplier Sign In</h3>
	  
	  <form class="form" role="form" method="POST" action="{{ url('/supplier/login') }}">
                                        {{ csrf_field() }}
										
			  <div class="col-md-12 col-12">
                                            <div class="input-wrap">
											 <input  name="email" type="email" placeholder="Your Email"  required="" oninvalid="this.setCustomValidity('Please Enter Valid Email')"   oninput="setCustomValidity('')" id="email" value="{{ old('email') }}" >
											</div>
											
											@if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
											
											</div>
											
											
											
											<div class="col-md-12 col-12">
                                            <div class="input-wrap">
											 <input  name="password" type="password" placeholder="Your Password"  required="" oninvalid="this.setCustomValidity('Please Password')"   oninput="setCustomValidity('')" id="email" value="{{ old('password') }}" >
											</div>
											
											@if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
											
											</div>
								
                                      
                                        <div class="clearfix action">
                                            <div class="form-group ">
                                                <button type="submit" class="btn filled-btn">Sign In
                                                </button>
                                            </div>
									    </div>	
										
	  </form>
	  </div>
	  <div class="col-md-3 col-3"> </div>
	  </div>
    </div>
  
  </div>
</div>

 </section>
 




















	</main>
	<!-- Main Wrap end -->
	<!-- Footer Start -->

  <script>
  function user_types(value)
  {
	  if(value =='Indiviual')
	  {
		  $('#company_name').hide();
		  $('#company_email').hide();
		 
	  }
	  else
	  {
		   $('#company_name').show();
		  $('#company_email').show();
	  }
	  
	  
  }
  
  </script>
  <style>
  #company_name , #company_email
  {
	  display:none;
  }
  </style>
  
@include('front.layout.footer')





<!--Model Popup starts-->
<div class="container">
    <div class="row">
   
        <div class="modal fade" id="forgotbox" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label=""><span>×</span></button>
                     </div>
					
                    <div class="modal-body">
                       
						<div class="thank-you-pop">
							
							<h1 style="color:darkgoldenrod">Forgot Password </h1>
							 <form class="form" role="form" method="POST" action="{{ route('forgotpassword-hotel') }}">
                                        {{ csrf_field() }}
										
										 <div class="col-md-12 col-12">
                                            <div class="input-wrap">
											 <input  name="email" type="email" placeholder="Your Email"  required="" oninvalid="this.setCustomValidity('Please Enter Valid Email')"   oninput="setCustomValidity('')" id="email" value="{{ old('email') }}" >
											</div>
											
											@if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
											
											</div>
											
											
											
											
								
                                      
                                        <div class="clearfix action">
                                            <div class="form-group  contact-form " style="padding-bottom:0px ! important">
                                                <button type="submit"    class="btn filled-btn">Submit
                                                </button>
                                            </div>
									    </div>	
										
		</form>
						
							
 						</div>
                         
                    </div>
					
                </div>
            </div>
        </div>
    </div>
</div>


<style>

/*--thank you pop starts here--*/
.thank-you-pop{
	width:100%;
 	padding:20px;
	text-align:center;
}
.thank-you-pop img{
	width:76px;
	height:auto;
	margin:0 auto;
	display:block;
	margin-bottom:25px;
}

.thank-you-pop h1{
	font-size: 42px;
    margin-bottom: 25px;
	color:#5C5C5C;
}
.thank-you-pop p{
	font-size: 20px;
    margin-bottom: 27px;
 	color:#5C5C5C;
}
.thank-you-pop h3.cupon-pop{
	font-size: 25px;
    margin-bottom: 40px;
	color:#222;
	display:inline-block;
	text-align:center;
	padding:10px 20px;
	border:2px dashed #222;
	clear:both;
	font-weight:normal;
}
.thank-you-pop h3.cupon-pop span{
	color:#03A9F4;
}
.thank-you-pop a{
	display: inline-block;
    margin: 0 auto;
    padding: 9px 20px;
    color: #fff;
    text-transform: uppercase;
    font-size: 14px;
    background-color: #8BC34A;
    border-radius: 17px;
}
.thank-you-pop a i{
	margin-right:5px;
	color:#fff;
}
#ignismyModal .modal-header{
    border:0px;
}
/*--thank you pop ends here--*/


</style>





			@if(Session::has('forgot_error'))
   <!--<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>-->



<!--Model Popup starts-->
<div class="container">
    <div class="row">
   
        <div class="modal fade" id="successbox_error" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label=""><span>×</span></button>
                     </div>
					
                    <div class="modal-body">
                       
						<div class="thank-you-pop">
							
							
							<p> Invalid Error, Please check your email</p>
						
							
 						</div>
                         
                    </div>
					
                </div>
            </div>
        </div>
    </div>
</div>


<script>

	
	   $(window).load(function(){
         $('#successbox_error').modal('show');
      });

</script>


@endif


			@if(Session::has('forgot'))
   <!--<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>-->



<!--Model Popup starts-->
<div class="container">
    <div class="row">
   
        <div class="modal fade" id="successbox" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label=""><span>×</span></button>
                     </div>
					
                    <div class="modal-body">
                       
						<div class="thank-you-pop">
							<img src="http://goactionstations.co.uk/wp-content/uploads/2017/03/Green-Round-Tick.png" alt="">
							<h1>Thank You!</h1>
							<p> Your Password reset successful, Please check your email</p>
						
							
 						</div>
                         
                    </div>
					
                </div>
            </div>
        </div>
    </div>
</div>


<script>

	
	   $(window).load(function(){
         $('#successbox').modal('show');
      });

</script>


@endif
