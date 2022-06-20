@include('front.layout.header')

<style>
.help-block strong
{
	color:red;
}

.reg_bg
{
	    background: #efecec9c;
    padding: 30px;
    border-radius: 30px;
}
</style>







	<main>




            <section class="contact-form">
	


            <div class="container ">
                <div class="contact-form-wrap section-bg">
                    <h2 class="form-title">Hotel Registration</h2>
                    
					    <form method="POST"  class="reg_bg" oninput='verify_password.setCustomValidity(verify_password.value != password.value ? "Passwords do not match." : "")'  action="{{ route('insert-hotel') }}" enctype="multipart/form-data">
						
                     @csrf
                        <div class="row">
                           
							<div class="col-md-12 col-12">
							 <div class="pb-13 pt-lg-0 pt-5">
                                            <p class="text-muted font-weight-bold font-size-h4">Enter your details to
                                                create your account</p>
                                        </div>
							 </div>
							 
							 
							   <div class="col-md-6 col-12">
                                <div class="input-wrap">
                                    
									<input type="text" placeholder="Your Hotel Name"   required oninvalid="this.setCustomValidity('Please Enter Hotel Name')"  oninput="setCustomValidity('')"  name="company_name" value="{{ old('company_name') }}" >

                                    <i class="fab fa-wordpress"></i>
									
								 </div>
								 
								 @if ($errors->has('company_name'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('company_name') }}</strong>
                                                </span>
                                            @endif
                            </div>

							
							
                            <div class="col-md-6 col-12">
                                <div class="input-wrap">
                                    <input  name="email" type="email" placeholder="Your Email"  required="" oninvalid="this.setCustomValidity('Please Enter Valid Email')"   oninput="setCustomValidity('')" id="email" value="{{ old('email') }}" >
                                    <i class="far fa-envelope"></i>
                                </div>
								@if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                            </div>
                          
						  
						    <div class="col-md-6 col-12">
                                <div class="input-wrap">
                                    <input type="password" placeholder="Password"  name="password" required="" oninvalid="this.setCustomValidity('Please Enter Password')"  oninput="setCustomValidity('')"  id="password" value="{{ old('password') }}" >
                                   <i class="fas fa-key"></i>
                                </div>
								  @if ($errors->has('password'))
                                                    <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                                @endif
                            </div>
							
							
							
							 <div class="col-md-6 col-12">
                                <div class="input-wrap">
                                    <input type="password" placeholder="Confirm Password"  name="verify_password" id="verify_password"  required oninvalid="this.setCustomValidity('Please Enter Verify Password')"  oninput="setCustomValidity('')" value="{{ old('verify_password') }}"  >
                                    
									<i class="fas fa-key"></i>
                                </div>
                            </div>
							
							 
                                           <div class="col-md-6 col-12">
										   <div class="input-wrap">
                                                <input
                                                     type="text" 
                                                    disabled type="location" placeholder="UAE" name="country" id="country"
                                                    autocomplete="off" value="UAE"/>
                                                @if ($errors->has('location'))
                                                    <span class="help-block">
                                                    <strong>{{ $errors->first('location') }}</strong>
                                                </span>
                                                @endif
												
												<span class="error country_error"> </span>
												</div>
												
												
												
                                            </div>
                                            <div class="col-md-6 col-12">
											<div class="input-wrap">
                                                <select name="city"  id="city"  value="{{ old('city') }}"  >
                                                    <option value="">City</option>
                                                    @foreach($city as $i=>$value)
                                                        <option value="{{ $value->id }}">
                                                            {{ $value->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
												<span class="error city_error"> </span>
												</div>
                                            </div>
                             
							 

                             <div class="col-md-12 col-12">
                                <div class="input-wrap">
                                    <input type="text" placeholder="Area"  name="area" id="area" required oninvalid="this.setCustomValidity('Please Enter Area')"  oninput="setCustomValidity('')" value="{{ old('area') }}" >
                                    
									<i class="fas fa-address-card"></i>
                                </div>
								
								  @if ($errors->has('area'))
                                                    <span class="help-block">
                                                    <strong>{{ $errors->first('area') }}</strong>
                                                </span>
                                                @endif
                            </div>
							
							<div class="col-md-2 col-12"  >
							  <div class="input-wrap">
                                          
												
												<input
                                                     type="text" 
                                                    disabled type="location" placeholder="+971 " name="country" id="country"
                                                  style="background: #ccc;" autocomplete="off" value="+971"/>
                                               
												
							  </div>
                            </div>			
                           <!-- <div class="col-md-2 col-12" >
							  <div class="input-wrap" >							
                                            	<input
                                                     type="text" 
                                                    disabled type="location" placeholder="5" name="country" id="country"
													style="background: #ccc;"
                                                    autocomplete="off" value="5"/>
                               </div>
                            </div> -->

                            <div class="col-md-10 col-12">
							  <div class="input-wrap">							
												<input
                                                    class=""
                                                    name="mobile_no" id="mobile_no" style="width: 100%;" 
                                                    type="number" placeholder="Mobile No"  required oninvalid="this.setCustomValidity('Please Enter Mobile')"  oninput="setCustomValidity('')" value="{{ old('mobile_no') }}" 
													  >
                                         </div>

			@if ($errors->has('mobile_no'))
                                                    <span class="help-block">
                                                    <strong>{{ $errors->first('mobile_no') }}</strong>
                                                </span>
                                                @endif										 
                                 </div> 
                               								 
												   
												   
                                            </div>
											
											
							 <div class="row">
							 
							 <div class="col-md-2 col-12"  >
							  <div class="input-wrap">
                                          
												
												<input
                                                     type="text" 
                                                    disabled type="location" placeholder="+971 " name="country" id="country"
                                                  style="background: #ccc;" autocomplete="off" value="+971"/>
                                               
												
							  </div>
                            </div>			
                            <!--<div class="col-md-2 col-12" >
							  <div class="input-wrap" >							
                                            	<select name="city_code">
                                                        <option value="04">04</option>
                                                        <option value="02">02</option>
                                                        <option value="03">03</option>
                                                        <option value="06">06</option>
                                                        <option value="07">07</option>
                                                        <option value="09">09</option>
                                                    </select>
                               </div>
                            </div> -->

                            <div class="col-md-10 col-12">
							  <div class="input-wrap">							
												<input
                                                    class=""
                                                    name="landline_no" id="landline_no" style="width: 100%;" 
                                                    type="number" placeholder="LandLine No"  required oninvalid="this.setCustomValidity('Please Enter LandLine')"  oninput="setCustomValidity('')" value="{{ old('landline_no') }}" >
                                         </div>

			@if ($errors->has('landline_no'))
                                                    <span class="help-block">
                                                    <strong>{{ $errors->first('landline_no') }}</strong>
                                                </span>
                                                @endif										 
                                 </div> 
                               							
                             </div>							 
											
											
												
										


                           <div class="row" style="margin-bottom:20px"
								>
										
							 <div class="col-md-1 col-12">
										   <div class="input-wrap">	
							    <input type="checkbox" id="terms-checkbox" required  name="agree" value="true"
                                                    style="height:30px; margin-right: 10px; margin-left: 0;"/>
							  </div>
							  
							  </div>
							  
							   <div class="col-md-11 col-12">
										   <div class="input-wrap">	
							  
                                                {{--                                                <a href="{{ asset('/front_assets/HOTEL_VENUES_PLATFORM.pdf') }}" target="_blank" preview="">&nbsp;  &nbsp;</a>--}}
                                                I Accept the <a data-toggle="modal" data-tab="true"
                                                                data-target="#tandc-modal"
                                                                class="font-color-darkgoldenrod"> terms and
                                                    conditions </a> and zero-tolerance policy on spam.
							  </div>
							  
							   @if ($errors->has('agree'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('agree') }}</strong>
                                                </span>
                                            @endif
							  
							  </div>
							  
							  </div>
							  
							  
							  
							 
							  
							  
				
                            <div class="col-12 text-center">
                                <button type="submit" class="btn filled-btn">Submit <i
                                        class="far fa-long-arrow-right"></i></button>
                            </div>
                        </div>
                    </form>
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


		
			@if(Session::has('message'))
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
							<p> Your Hotel registration was successful!</p>
						
							
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
    margin-bottom: 30px;
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

<script>

	
	   $(window).load(function(){
         $('#successbox').modal('show');
      });

</script>


@endif