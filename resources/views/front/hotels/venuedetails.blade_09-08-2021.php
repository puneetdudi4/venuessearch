@include('front.layout.header')

	<main>
		<!-- Breadcrumb section -->
			<section class="breadcrumb-area d-flex align-items-center position-relative bg-img-center"
			style="background-image: url({{ asset('uploads/hotels_featured_images/'.$VenuesDetails->feature_image )}}" alt="{{ $VenuesDetails->title }});">
			<div class="container">
				<div class="breadcrumb-content text-center">
					<h1>{{ $VenuesDetails->title }}</h1>
					<ul class="list-inline">
						<li><a href="{{ URL::to('/') }}">Home</a></li>
						<li><i class="far fa-angle-double-right"></i></li>
						<li>{{ $VenuesDetails->title }}</li>
					</ul>
				</div>
			</div>
			
		</section>
		<!-- Breadcrumb section End-->
		<section class="room-details-wrapper section-padding">
		
					@if(Session::has('message'))
<p class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('message') }}</p>
@endif

			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						<!-- Room Details -->
						<div class="room-details">
							<div class="entry-header">
								<div class="post-thumb position-relative">
									<div class="post-thumb-slider">
										<div class="main-slider">
											
										   <?php
										    foreach($gallery_images as $gallery)
											{
												?>
	   
											<div class="single-img">
									<a href="{{ asset('uploads/hotels_venue_images/'.$gallery->image)}}" class="main-img">
													<img src="{{ asset('uploads/hotels_venue_images/'.$gallery->image)}}" alt="Image">
												</a>
											</div>
											
											<?php
											
											}
											?>
											
										</div>
										<div class="dots-slider row">
											    <?php
										    foreach($gallery_images as $gallery)
											{
												?>
											<div class="col-lg-3">
												<div class="single-dots">
													<img src="{{ asset('uploads/hotels_venue_images/'.$gallery->image)}}" alt="image">
												</div>
											</div>
											
											  <?php
										    }
												?>
											
										</div>
									</div>
									<div class="price-tag"> Original Cost <del style="color:red"> AED {{ $VenuesDetails->cost }} </del> <span style="margin-left:20px"> HV Offer price: AED {{ $VenuesDetails->final_price }}</span></div>
								</div>
								
								<h2 class="entry-title"><?php echo $VenuesDetails->sub_title  ?></h2>
								<ul class="entry-meta list-inline">
									<li><i class="far fa-ruler-triangle"></i>{{ $VenuesDetails->include_type }}</li>
									
									
								</ul>
							</div>
							
							
							
							<div class="room-details-tab">
							
							
							
								<div class="row">
									<div class="col-sm-3">
										<ul class="nav desc-tab-item" role="tablist">
											<li class="nav-item">
												<a class="nav-link " href="#desc" role="tab"
													data-toggle="tab">Venue Details</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#location" role="tab"
													data-toggle="tab">Food Menu</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="{{ url('calendar/'.$VenuesDetails->id)}}">Avilability Calendar</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#capacities" role="tab"
													data-toggle="tab">Guest Capacity</a>
											</li>
											
										</ul>
									</div>
									<div class="col-sm-9">
									<style>
									.btn-group
									{
										background:darkgoldenrod;
									}
									.menu-col
									{
										background:darkgoldenrod;
									}
									.btn-group-vertical>.btn, .btn-group>.btn {
											position: relative;
											-ms-flex: 1 1 auto;
											flex: 1 1 auto;
											padding: 10px 0px;
											font-size:13px;
										}
									
									 .show>.btn-danger.dropdown-toggle {
											color: #fff;
											background-color: darkgoldenrod ! important;
											border-color: darkgoldenrod ! important;
											border:none ! important;
										}
										.menuwhite
										{
											color:#FFF ! important;
										}
										
										.menuwhite:hover
										{
											color:darkgoldenrod ! important;
										}

									</style>
									
										<div class="tab-content desc-tab-content">
										
										
										
											<div role="tabpanel" class="tab-pane fade in active  show" id="maindesc">
												
												<div class="entry-content">
												
												 <h3 style="margin-bottom:0px; color:darkgoldenrod">{{ $VenuesDetails->title }}</h3>
												 <h5 style="margin-bottom:0px; color:darkgoldenrod">{{ $hotels->name}}</h5>
												 
												  <p>{{ $hotels->location}}</p>
												 
												 
												 <p> <i class="fas fa-home mr-1 text-theme" style="color:darkgoldenrod"></i>  {{ $VenuesDetails->include_type }} 
												 <i class="fa fa-chair mr-1 text-theme" style="color:darkgoldenrod"></i>  Seating Setup

												 <i class="fas fa-utensils mr-1 text-theme" style="font-size: 14px; color:darkgoldenrod"></i> Menus Available
</p>

                             
												
												<p style="margin-top:5px"> The hotel holds eleven state-of-the-art meeting rooms available for conferences or business seminars, and one divisible ballroom accommodating up to 250 delegates</p>
												 </p>
												
												 <h5 style="margin-bottom:0px; color:darkgoldenrod">Food Menu</h5>
									<div class="row"  style="width:100%">
												<div class="col-sm-2 menu-col" >
												
												<!-- Example single danger button -->
														<div class="btn-group" >
														  <button type="button"   class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															Set Menu
														  </button>
														  <div class="dropdown-menu" style="background:#000">
															
															<a class="dropdown-item menuwhite"  onclick="getmenulist('Indian Menu',1,<?php echo $VenuesDetails->id?>)">Indian Menu</a>
															<a class="dropdown-item menuwhite" onclick="getmenulist('Arabic Menu',1,<?php echo $VenuesDetails->id?>)">Arabic Menu</a>
															<a class="dropdown-item menuwhite" onclick="getmenulist('International Menu',1,<?php echo $VenuesDetails->id?>)">International Menu</a>
															
														  </div>
														</div>
														
												 </div>
												 
												 
												 	<div class="col-sm-2 menu-col">
												
												<!-- Example single danger button -->
														<div class="btn-group">
														  <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															Buffet 
														  </button>
														  <div class="dropdown-menu" style="background:#000">
															
															<a class="dropdown-item menuwhite" >Indian Menu</a>
															<a class="dropdown-item menuwhite" >Arabic Menu</a>
															<a class="dropdown-item menuwhite" >International Menu</a>
															
														  </div>
														</div>
														
												 </div>
												 
												 
												 	<div class="col-sm-3 menu-col">
												
												<!-- Example single danger button -->
														<div class="btn-group">
														  <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															Familly Style
														  </button>
														  <div class="dropdown-menu"  style="background:#000">
															
															
															<a class="dropdown-item menuwhite" >Arabic Menu</a>
															<a class="dropdown-item menuwhite" >International Menu</a>
															
														  </div>
														</div>
														
												 </div>
												 
												 
												 	 	<div class="col-sm-2 menu-col">
												
												<!-- Example single danger button -->
														<div class="btn-group">
														  <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															Cocktail   
														  </button>
														  <div class="dropdown-menu" style="background:#000">
															
														
															<a class="dropdown-item menuwhite" >Arabic Menu</a>
															<a class="dropdown-item menuwhite" >International Menu</a>
															
														  </div>
														</div>
														
												 </div>
												 
												 
												 	 	<div class="col-sm-3 menu-col">
												
												<!-- Example single danger button -->
														<div class="btn-group">
														  <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															Western  
														  </button>
														  <div class="dropdown-menu" style="background:#000">
															
														
															<a class="dropdown-item menuwhite" >Arabic Menu</a>
															<a class="dropdown-item menuwhite" >International Menu</a>
															
														  </div>
														</div>
														
												 </div>
												 

											   </div>		




										   <div id="menubox"> </div>											   

												
													
												
												</div>
												
												
												
									

										</div>
								

										
										
											<div role="tabpanel" class="tab-pane fade in  show" id="desc">
												<h5 class="tab-title">Venue Details </h5>
												<div class="entry-content">
												
																						   

													<p>
													
													<?php echo $VenuesDetails->description  ?>
														
													</p>
													<h5 > Facilities </h5>
													<p>
													
													 <?php
													 if(@$facility !='')
													 {
													  echo  $facility=implode(",",$facility);
													 }
													  ?> 
														
													</p>
													
													<h5 > Event Type </h5>
													<p>
													
													 <?php
													 if(@$eventtype !='')
													 {
													  echo  $eventtype=implode(",",$eventtype);
													 }
													  ?> 
														
													</p>
													
													
													
													<div class="entry-gallery-img">
														<figure class="entry-media-img">
															<img src="{{ asset('uploads/hotels_featured_images/'.$VenuesDetails->feature_image )}}" alt="Image">
														</figure>
													</div>
												</div>
												
												
												
									

										</div>
								

								<div role="tabpanel" class="tab-pane fade" id="location">
												<h5 class="tab-title">Food Menu</h5>
											
								
									
															<div class="row"  style="width:100%">
												<div class="col-sm-2 menu-col" >
												
												<!-- Example single danger button -->
														<div class="btn-group" >
														  <button type="button"   class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															Set Menu
														  </button>
														  <div class="dropdown-menu" style="background:#000">
															
															<a class="dropdown-item menuwhite"  onclick="getmenulist1('Indian Menu',1,<?php echo $VenuesDetails->id?>)">Indian Menu</a>
															<a class="dropdown-item menuwhite" onclick="getmenulist1('Arabic Menu',1,<?php echo $VenuesDetails->id?>)">Arabic Menu</a>
															<a class="dropdown-item menuwhite" onclick="getmenulist1('International Menu',1,<?php echo $VenuesDetails->id?>)">International Menu</a>
															
														  </div>
														</div>
														
												 </div>
												 
												 
												 	<div class="col-sm-2 menu-col">
												
												<!-- Example single danger button -->
														<div class="btn-group">
														  <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															Buffet 
														  </button>
														  <div class="dropdown-menu" style="background:#000">
															
															<a class="dropdown-item menuwhite" >Indian Menu</a>
															<a class="dropdown-item menuwhite" >Arabic Menu</a>
															<a class="dropdown-item menuwhite" >International Menu</a>
															
														  </div>
														</div>
														
												 </div>
												 
												 
												 	<div class="col-sm-3 menu-col">
												
												<!-- Example single danger button -->
														<div class="btn-group">
														  <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															Familly Style
														  </button>
														  <div class="dropdown-menu"  style="background:#000">
															
															
															<a class="dropdown-item menuwhite" >Arabic Menu</a>
															<a class="dropdown-item menuwhite" >International Menu</a>
															
														  </div>
														</div>
														
												 </div>
												 
												 
												 	 	<div class="col-sm-2 menu-col">
												
												<!-- Example single danger button -->
														<div class="btn-group">
														  <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															Cocktail   
														  </button>
														  <div class="dropdown-menu" style="background:#000">
															
														
															<a class="dropdown-item menuwhite" >Arabic Menu</a>
															<a class="dropdown-item menuwhite" >International Menu</a>
															
														  </div>
														</div>
														
												 </div>
												 
												 
												 	 	<div class="col-sm-3 menu-col">
												
												<!-- Example single danger button -->
														<div class="btn-group">
														  <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															Western  
														  </button>
														  <div class="dropdown-menu" style="background:#000">
															
														
															<a class="dropdown-item menuwhite" >Arabic Menu</a>
															<a class="dropdown-item menuwhite" >International Menu</a>
															
														  </div>
														</div>
														
												 </div>
												 

											   </div>		




                                             <div id="menubox1"> </div>	
											
											
											
											</div>
											
											
											
											
											
											
					<div role="tabpanel" class="tab-pane fade" id="reviews">
												<h5 class="tab-title">Avilability Calendar</h5>
					 </div>
					 
					 <div role="tabpanel" class="tab-pane fade" id="capacities">
												<h5 class="tab-title">Guest Capacity</h5>
												
							<table cellpadding="10" class="table">	

                               <tr>
							     <td> Name </td>
								 <td> Image </td>
								 <td> Capacity </td>
								 <td> Social Distance </td>
                               </tr>							   
												
								<?php
                                foreach($capacities  as $capacitie)
                                {
									?>
									<tr>
									<td> <?php echo $capacitie->ctitle?></td>
									<td>
									 <img class="image_fade"
                                                        src="{{ asset('storage/capacityAttributeImg/'.$capacitie->image)}}"
                                        
										style="width:100px; height: 100px;">
									</td>
                                    <td><?php echo $capacitie->capacity_value?> </td>	
                                   <td> <?php echo $capacitie->socialdistancing_capacity?></td>											
									</tr>	
									<?php
                                }
                               ?>	
                              </table>							   
					 </div>
					 
					 
											
											
											
										</div>
									</div>
								</div>
							</div>
						</div>
						
						
						
						
						
						
						
						
						
						
						
					</div>
					<div class="col-lg-4">
						<!-- Sidebars Area -->
						<div class="sidebar-wrap">
							<div class="widget booking-widget">
								<h4 class="widget-title">{{ $VenuesDetails->final_price }}</h4>
								<form id="hotelsvenues-form" method="post" action="{{ url('/bookvenues') }}">
					
					                @csrf <!-- {{ csrf_field() }} -->
									
									
									<div class="input-wrap">
									   <label>Event Title </label>
									   
										<input type="text" name="event_title" required autocomplete="off" value="<?php echo @$event_title?>"  >
										
									</div>
									
									
									<div class="input-wrap">
									   <label>Start Date </label>
									   
										<input type="date" min="<?php echo date('Y-m-d', strtotime("+1 day"))?>" required  name="start_date"  id="start_date" autocomplete="off" value="<?php echo @$start_date?>"  >
										
									</div>
									<div class="input-wrap">
									   <label>Start Time </label>
									   
										<input type="time"  name="start_time" autocomplete="off"  required   value="<?php echo @$start_time?>"  >
									
									</div>
									<div class="input-wrap">
									   <label>End Date </label>
										<input type="date" name="end_date" id="end_date" min="<?php echo date('Y-m-d', strtotime("+1 day"))?>"  required  autocomplete="off" value="<?php echo @$end_date?>"  placeholder="End Date" >
										
									</div>
									
									<div class="input-wrap">
									   <label>End Time </label>
									   
										<input type="time" name="end_time" autocomplete="off" required value="<?php echo @$end_time?>"  >
										
									</div>
									
									<div class="input-wrap">
									   <label>No of Guests </label>
										<input type="text" name="no_guests" autocomplete="off" required value="<?php echo @$no_guests?>"  placeholder="No of Guests" id="f-location">
										<i class="far fa-search"></i>
									</div>
								
									
									<input type="hidden" name="vid" value="{{$VenuesDetails->id}}">
									
									<input type="hidden" name="hid" value="{{$VenuesDetails->hotel_id}}">
									
									
									<div class="input-wrap">
										<button type="submit" class="btn filled-btn btn-block">
											book now <i class="far fa-long-arrow-right"></i>
										</button>
									</div>
								</form>
							</div>
						
						
						</div>
					</div>
				</div>
			</div>
		</section>
		
		
	
		<!-- Latest Room Start -->
		<section class="latest-room-d section-bg section-padding">
			<div class="container">
				<!-- Section Title -->
				<div class="section-title text-center">
					
					<h1 class="color_darkgoldenrod">Latest Hotel</h1>
				</div>
				<div class="row">
				
				   <?php
				   foreach ($hotel_featured as $hotels)
				   {
					   
					   $description=strip_tags($hotels->description);
				       $description=substr($description,0,50);
					   ?>
					<div class="col-lg-4 col-md-6">
						<!-- Single Room -->
						<div class="single-room">
							<div class="room-thumb">
									<a href="{{ url('/hoteldetails/'.$hotels->id) }}">
                  			 <img  src="{{ asset('uploads/hotels_featured_images/'.$hotels->featured_image)}}" alt="{{ $hotels->name }}" width="100%" style="height:250px">
											 
									 </a>
							</div>
							<div class="room-desc">
								
								<h4><a href="{{ url('/hoteldetails/'.$hotels->id) }}">{{ $hotels->name }}</a></h4>
								<p>
									<?php echo $description ?>
								</p>
								<ul class="room-info list-inline">
											<li><i class="far fa-star"></i> {{ $hotels->grade }} Star</li>
								</ul>
								
							</div>
						</div>
					</div>
				
				  <?php
				   }
				   ?>
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

$("#end_date").change(function(){
	
	
  var start_date = $('#start_date').val();
  
  var end_date = $('#end_date').val();
 
  var startDate = new Date(start_date);
var endDate = new Date(end_date);



if (startDate > endDate){
// Do something

alert('Start date greater than end date');

$('#end_date').val('');

$('#start_date').val('');


}
else
{

}

});


$("#start_date").change(function(){
	
	
  var start_date = $('#start_date').val();
  
  var end_date = $('#end_date').val();
 
  var startDate = new Date(start_date);
var endDate = new Date(end_date);



if (startDate > endDate){
// Do something

alert('Start date less than end date');

$('#end_date').val('');

$('#start_date').val('');
}
else
{

}

});
</script>

<script>
function getmenulist(name,id,vid)
{
	
	
	var formData = {name:name,id:id,vid:vid}; //Array 
  
$.ajax({
    url : "{{ url('getmenudetails')}}",
    type: "GET",
    data : formData,
    success: function(data, textStatus, jqXHR)
    {
		$('#menubox').html(data);
        //data - response from server
    },
    error: function (jqXHR, textStatus, errorThrown)
    {
		//$('#menubox').html(data);
		//alert('No');
 
    }
});
}



function getmenulist1(name,id,vid)
{
	
	
	var formData = {name:name,id:id,vid:vid}; //Array 
  
$.ajax({
    url : "{{ url('getmenudetails')}}",
    type: "GET",
    data : formData,
    success: function(data, textStatus, jqXHR)
    {
		$('#menubox1').html(data);
        //data - response from server
    },
    error: function (jqXHR, textStatus, errorThrown)
    {
		//$('#menubox').html(data);
		//alert('No');
 
    }
});
}
</script>


		<style>
	.carousel-indicators li{
	width:100px ! important;
	height:60px ! important;
	
	</style>
	
