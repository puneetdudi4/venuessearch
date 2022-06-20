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
	  
	  
	         <div class="card-body">
                            <table class="table table-bordered table-checkable" id="hotelKeyList">
                                <thead>
                                <tr>
                                    <th>Event Title</th>
                                    <th>Venue Name</th>
									  <th>Start Date</th>
									    <th>End  Date</th>
										<th>Days</th>
                                    
                                    <th>Menu Price</th>
									<th>Venue Price</th>
									<th>Total Price</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php
                                    $i=1;
                                @endphp
                                @foreach($bookings as $booking)
                                    <tr>
                                        
                                        <td class="text-center">{{$booking->event_title}}</td>
										<td class="text-center">{{$booking->vname}}</td>
										<td class="text-center">{{$booking->start_time}}</td>
										<td class="text-center">{{$booking->end_time}}</td>
										
										<td class="text-center">{{$booking->no_of_days}}</td>
										
										<td class="text-center">{{$booking->menu_price * $booking->no_of_days}}</td>
										
										<td class="text-center">{{$booking->venue_price *$booking->no_of_days}}</td>
										
										<td class="text-center">{{$booking->total_price}}</td>
										
										
										
                                        <td>
										<div>
                                            <a href="{{ url('user/bookinghistorydetails')}}/{{$booking->id}}" class="btn btn-sm btn-clean btn-icon mr-2"
                                               title="View details" >
                                                <button href="#" class="btn btn-warning btn-sm"
                                                        style=" margin-left: 13px;">View
                                                </button>
                                            </a>
										</div>
										
                                        <div style="margin-top:10px">										
											<a href="{{ url('user/bookinghistorydetails')}}/{{$booking->id}}" class="btn btn-sm btn-clean btn-icon mr-2"
                                               title="View details" >
                                                <button href="#" class="btn btn-warning btn-sm"
                                                        style=" margin-left: 13px;">Cancel
                                                </button>
                                            </a>
											</div>

                                        </td>
                                    </tr>
                                @endforeach
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