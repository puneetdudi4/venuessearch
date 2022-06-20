@include('front.layout.header')

	<main>
		<!-- Breadcrumb section -->
			<section class="breadcrumb-area d-flex align-items-center position-relative bg-img-center"
			style="background-image: url({{ asset('uploads/hotels_featured_images/'.$booking->feature_image )}}" alt="{{ $booking->vname }});">
			<div class="container">
				<div class="breadcrumb-content text-center">
					<h1>{{ $booking->hname}}</h1>
					<ul class="list-inline">
						<li><a href="{{ URL::to('/') }}">Home</a></li>
						<li><i class="far fa-angle-double-right"></i></li>
						<li>{{ $booking->vname }}</li>
					</ul>
				</div>
			</div>
			
		</section>
		<!-- Breadcrumb section End-->
		
		
		<section class="room-details-wrapper section-padding">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						<!-- Room Details -->
						<div class="room-details">
						
							 
							
							
							<div class="room-details-tab">
								<div class="row">
								
									<div class="col-sm-12">
										<div class="tab-content desc-tab-content">
									
								<div  id="location">
										
								
								   <div class="row">
								   
								   <div class="col-sm-12"><h3> Booking Details: </h3></div>
								   
								    <div class="col-sm-12"><h5> Hotel  : <?php echo $booking->hname ?> </h5></div>
									
								   <div class="col-sm-12"> <h5> Venue  : <?php echo $booking->vname ?> </h5></div>

                                    <div class="col-sm-12"><h5> Menu  : <?php echo $booking->mname ?> </h5></div>
                                   
                                   <div class="col-sm-12"><h5> Capacities  : <?php echo $booking->capacities ?> </h5></div>

                                   <div class="col-sm-12"><h5> Facilities  : <?php echo $booking->facilities ?> </h5></div>								   
									
									
									<table class="table" >
									 <tr>
									   <td> <strong>Name:</strong> </td>
									   <td> <?php echo $booking->cname ?> </td>
									     <td> <strong>Mobile:</strong>  </td>
									   <td> <?php echo $booking->mobile ?> </td>
									 </tr>
									 
									 <tr>
									   <td> <strong>Address:</strong> </td>
									   <td> <?php echo $booking->carea ?>,<?php echo $booking->cityname ?> ,
									   <?php echo $booking->country  ?></td>
									     <td><strong> Email:</strong>  </td>
									   <td> <?php echo $booking->cemail ?> </td>
									 </tr>
									 <tr>
									   <td> <strong>No of Days:</strong> </td>
									   <td> <?php echo $booking->no_of_days; ?> </td>
									   <td></td>  <td></td>
									  </tr> 
									  
									   
									 
									 
									 </table>
									 
									 
									 <table class="table" >
									 
									 <tr>
									   <td> <strong>Event Name:</strong> </td>
									   <td> <?php echo $booking->event_title ?></td>
									  </tr>
									  
									   <tr>
									   <td> <strong>Start Time:</strong> </td>
									   <td> <?php echo $booking->start_time ?></td>
									  </tr>
									  
									  <tr>
									   <td> <strong>End Time:</strong> </td>
									   <td> <?php echo $booking->end_time ?></td>
									  </tr>
									  
									  
									 <tr>
									   <td> <strong>Menu Price:</strong> </td>
									   <td> <?php echo $booking->menu_price ?></td>
									  </tr>
									  
									   <tr>
									   <td> <strong>Venue Price:</strong> </td>
									   <td> <?php echo $booking->venue_price ?></td>
									  </tr>
									  <tr>
									   <td> <strong>Total Price:</strong> </td>
									   <td> <?php echo $booking->total_price ?></td>
									  </tr>
									  
                                    </table>									  
									 
									 
								   </div>	 
									

									
						
					</div>
											
											
											
											</div>
											
									
											
											
											
											
										
										</div>
									</div>
								</div>
							</div>
						</div>
						
						
						
						
						
						
						
						
						
						
						
					</div>
				
				</div>
			</div>
		</section>
		
		
		
		
		
	
	<!-- Latest Room End -->
		<!-- Brands section start -->
				<section class="brands-section primary-bg">
			<div class="container">
				<div id="brandsSlideActive" class="row">
					<div class="col-lg-2">
						<div class="brand-item text-center">
							<img src="{{asset('front_end/img/brands/01.png')}}" alt="Brands">
							
							
						</div>
					</div>
					<div class="col-lg-2">
						<div class="brand-item text-center">
							<img src="{{asset('front_end/img/brands/02.png')}}" alt="Brands">
						</div>
					</div>
					<div class="col-lg-2">
						<div class="brand-item text-center">
							<img src="{{asset('front_end/img/brands/03.png')}}" alt="Brands">
						</div>
					</div>
					<div class="col-lg-2">
						<div class="brand-item text-center">
							<img src="{{asset('front_end/img/brands/04.png')}}" alt="Brands">
						</div>
					</div>
					<div class="col-lg-2">
						<div class="brand-item text-center">
							<img src="{{asset('front_end/img/brands/05.png')}}" alt="Brands">
						</div>
					</div>
					<div class="col-lg-2">
						<div class="brand-item text-center">
							<img src="{{asset('front_end/img/brands/06.png')}}" alt="Brands">
						</div>
					</div>
					
				</div>
			</div>
		</section>
	
		
	
	
	</main>
	
	
	
	
@include('front.layout.footer')


<script>
function menu_price(price,id)
{
	$('.price').val('');
	//var menuprice = $('#menu'+id).val() || 0;
 			
	var no_guests=$('#no_guests').val() || 0;
    var total = parseFloat(no_guests)* parseFloat(price);
	
	$('#price'+id).val(total);
	
	
	
	var venue_price=$('#venue_price').val();
	

	
	var total_price = parseFloat(venue_price) + parseFloat(total);
	
	var no_of_dates=$('#no_of_dates').val();
	
	total_price=parseFloat(no_of_dates) * parseFloat(total_price);
	
	
	$('#total_price').val(total_price);
	
	
	//total_price();
	
}

function total_price()
{
	var menu_count=$('#menu_count').val() ;
	  var menutotal = 0;
          for(j=1; j<=menu_count; j++)
          {

            menuprice = $('#price'+j).val() || 0;
			
		
            menutotal = parseFloat(menutotal) + parseFloat(menuprice);
			  
			
           }
		 $('#menu__totalprice').val(menutotal);  
		var venue__price= $('#venue__price').val();  
		var totalprice = parseFloat(venue_price) + parseFloat(menutotal);
		$('#final_price').val(totalprice);  
}


</script>
