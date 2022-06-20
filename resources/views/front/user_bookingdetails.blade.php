@include('front.layout.header')

<style>
.help-block strong
{
	color:red;
}
.active

{
	display: block ! IMPORTANT;
    opacity: 1 ! IMPORTANT;
}
ul.nav-tabs li a
{
	    padding: 10px 20px;
  
}
ul.nav-tabs li a.active
{
	background:#fea116;
}

.contact-form .btn {
    padding: 3px 12px ! important;
    font-size: 15px;
    border-radius: 36px ! important;
}

</style>
 
	<main>




            <section class="contact-form">
			
			<h3>  </h3>

<div class="container" style="margin-top:30px">

   
  <ul class="nav nav-tabs" style="margin-top:30px">
    <li ><a data-toggle="tab"   href="#user">Customer profile</a></li>
    <li><a data-toggle="tab" href="#hotel">Favorites</a></li>
    <li><a  class="active"  href="{{ url('user/bookinghistory') }}" > Booking </a></li>
	
	 <li><a data-toggle="tab" href="#supplier">Payment history</a></li>
	 
	 	
	 
    
  </ul>


  <div class="tab-content" >
  
    <div id="booking" class="tab-pane fade active" style="margin-top:30px">
      <h3>Bookings</h3>
	  
	    <h5 class="m-auto">
                                    Hotel Name:{{ $booking->hname }} 
                                </h5>
								 <h5 class="m-auto">
                                    Venue Name:{{ $booking->vname }} 
                                </h5>
	           <div class="card-body">
                            <table class="table table-bordered table-checkable" id="hotelKeyList">
                                <thead>
                                <tr>
                                    <th>Event Title</th>
                                    <th>Venue Name</th>
									  <th>Start Date</th>
									    <th>End  Date</th>
                                    
                                    <th>Menu Price</th>
									<th>Venue Price</th>
									<th>Total Price</th>
                                   
                                </tr>
                                </thead>
                                <tbody>
                               
                                    <tr>
                                        
                                        <td class="text-center">{{$booking->event_title}}</td>
										<td class="text-center">{{$booking->vname}}</td>
										<td class="text-center">{{$booking->start_time}}</td>
										<td class="text-center">{{$booking->end_time}}</td>
										
										
										<td class="text-center">{{$booking->menu_price}}</td>
										
										<td class="text-center">{{$booking->venue_price}}</td>
										
										<td class="text-center">{{$booking->total_price}}</td>
										
										
										
                                    
                                    </tr>
                               
                                </tbody>
                            </table>
							
							<?php
							if($menus!='')
							{
								?>
							<h3> Menu Details </h3>
							
							    <table class="table table-bordered table-checkable" id="hotelKeyList">
                                <thead>
                                <tr>
                                    <th>Menu Name</th>
                                    <th>Menu Category</th>
									 <th>Menu Type</th>
							
                                   
                                </tr>
                                </thead>
                                <tbody>
                               
                                    <tr>
                                        
                                        <td >{{$menus->menu_name}}</td>
										<td >{{$menus->menu_category}}</td>
										<td >{{$menus->menu_type}}</td>
									
										
                                    
                                    </tr>
                               
                                </tbody>
                            </table>
							<?php 
							}
							?>
							
							
							<table class="table table-bordered table-checkable" id="hotelKeyList">
                                <thead>
                                <tr>
                                    <th>Capacities</th>
                                    <td>{{$booking->capacities}}</td>
									 
							
                                   
                                </tr>
                                </thead>
                                <tbody>
                               
                                    <tr>
                                        
                                        <td >Facilities</td>
										<td>{{$booking->facilities}}</td>
										
									
										
                                    
                                    </tr>
                               
                                </tbody>
                            </table>
							
							<h3> Customer Details </h3>
							
							<table class="table table-bordered table-checkable" id="hotelKeyList">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <td>{{$booking->cname}}</td>
									 
							
                                   
                                </tr>
                                </thead>
                                <tbody>
                               
                                    <tr>
                                        
                                        <td >Address</td>
										<td>{{$booking->area}}</td>
										
									
										
                                    
                                    </tr>
									
									  <tr>
                                        
                                        <td >Email</td>
										<td>{{$booking->email}}</td>
										
									
										
                                    
                                    </tr>
                               <tr>
                                        
                                        <td >Mobile No</td>
										<td>{{$booking->mobile}}</td>
										
									
										
                                    
                                    </tr>
                                </tbody>
                            </table>
							
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