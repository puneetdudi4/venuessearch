@include('front.layout.header')
<style>
.venue_img
{
	height:430px;
	width:100%
}

.venue_subimg
{
	height:60px;
	width:75px;
	
    width: 75px ! important;
    max-width: 75px ! important;
}

.error
{
    color:red;
}
</style>

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
													<img src="{{ asset('uploads/hotels_venue_images/'.$gallery->image)}}"  class="venue_img" alt="Image">
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
													<img src="{{ asset('uploads/hotels_venue_images/'.$gallery->image)}}"  class="venue_subimg" alt="image">
												</div>
											</div>
											
											  <?php
										    }
												?>
											
										</div>
									</div>
									<!--<div class="price-tag"> Original Cost <del style="color:red"> AED {{ $VenuesDetails->cost }} </del> <span style="margin-left:20px"> HV Offer price: AED {{ $VenuesDetails->final_price }}</span></div>-->
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
												<a class="nav-link " href="#specification" role="tab"
													data-toggle="tab">Specification Layout</a>
											</li>
											
											<h5 >  </h5>
											<li class="nav-item">
												<a class="nav-link" href="#location" role="tab"
													data-toggle="tab">Food Menu</a>
											</li>
											
											<li class="nav-item">
												<a class="nav-link" href="#packages" role="tab"
													data-toggle="tab">Special Packages</a>
											</li>
											
											
											<li class="nav-item">
												<a class="nav-link" href="{{ url('calendar/'.$VenuesDetails->id)}}">Avilability Calendar</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#capacities" role="tab"
													data-toggle="tab">Guest Capacity</a>
											</li>
											
											<li class="nav-item">
												<a class="nav-link" href="#rules" role="tab"
													data-toggle="tab">Cancelation Rules</a>
											</li>
											
											
										</ul>
									</div>
									<div class="col-sm-9">
									<style>
									.btn-group
									{
										/*background:#efecec9c*/ ;
									}
									.menu-col
									{
										background:#efecec9c ;
									}
									.btn-group-vertical>.btn, .btn-group>.btn {
											position: relative;
											-ms-flex: 1 1 auto;
											flex: 1 1 auto;
											padding: 10px 0px;
											font-size:13px;
											background:none ;
										}
									
									 .show>.btn-danger.dropdown-toggle {
											color: #fff;
											background-color: #efecec9c  ! important;
											border-color: #efecec9c  ! important;
											border:none ! important;
										}
										.menuwhite
										{
											color:#888181  ! important;
										}
										
										.menuwhite:hover
										{
											color:#888181  ! important;
										}

									</style>
									
										<div class="tab-content desc-tab-content">
										
										
										
											<div role="tabpanel" class="tab-pane fade in active  show" id="maindesc">
												
												<div class="entry-content">
												
												 <h3 style="margin-bottom:0px; color:#888181 ">{{ $VenuesDetails->title }}</h3>
												 <h5 style="margin-bottom:0px; color:#888181 ">{{ @$hotels->name}}</h5>
												 
												  <p>{{ $hotels->location}}</p>
												 
												 
												 <p> <i class="fas fa-home mr-1 text-theme" style="color:#888181 "></i>  {{ @$VenuesDetails->include_type }} 
												 <i class="fa fa-chair mr-1 text-theme" style="color:#888181 "></i>  Seating Setup

												 <i class="fas fa-utensils mr-1 text-theme" style="font-size: 14px; color:#888181 "></i> Menus Available
</p>

                             
												
												<p style="margin-top:5px">
                                                {{ strip_tags($VenuesDetails->description) }}

											</p>
												
												 <h5 style="margin-bottom:0px; color:#888181 ">Food Menu</h5>
									<div class="row"  style="width:100%">
									
									<?php
									 foreach($menu_types as $menu_type)
									 {
										 ?>
												<div class="col-sm-3 menu-col" >
												
												<!-- Example single danger button -->
														<div class="btn-group" >
														  <button type="button"   class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															<?php echo $menu_type->title ?>
														  </button>
														  <div class="dropdown-menu" style="background:#efecec9c">
														  
														   <?php
														   $menu_category = DB::table('menu_category')
															->select('id', 'title')
															->where('is_deleted', 0)
														   ->where('menu_type',$menu_type->id )
															->get();	
															foreach($menu_category as $menucat)
															{
                                                            ?>															
															
															<a class="dropdown-item menuwhite"  onclick="getmenulist('<?php echo $menucat->title?>',<?php echo $menucat->id?>,<?php echo $VenuesDetails->id?>)"><?php echo $menucat->title?></a>
															<?php
															}
															?>
														  </div>
														</div>
														
												 </div>
										<?php
									 }
                                      ?>									 
												 
												 
												 
												 
												 
												 
												 
												 
											

											   </div>		




										   <div id="menubox"> </div>											   

												
													
												
												</div>
												
												
												
									

										</div>
								






                                       	<div role="tabpanel" class="tab-pane fade in  show" id="specification">
												<h5 class="tab-title">Specification Layout </h5>
												<div class="entry-content">
												
																						   

													<p>
													
													
													
													
													<?php
													if($VenuesDetails->specification_pdf !='')
													{
													?>
												
														<a  href="<?php echo asset("uploads/specification/$VenuesDetails->specification_pdf") ?>"   target="_blank" >
											<img src="{{asset('uploads/pdf.png')}}" alt="PDF" width="75px" height="75px"  >
											</a>
											
											
											     <?php
													}
													?>
													
													
													
											</div>
											
										</div>
										
										
										
											<div role="tabpanel" class="tab-pane fade in  show" id="packages">
												<h5 class="tab-title">Special Packages </h5>
												<div class="entry-content">
												
																						   

													<p>
													
													
													
													
													<?php
													if($packages !='')
													{
													?>
													
													<table class="table" >
													<tr>
													<th> Name </th>
													
													<th> Pdf </th>
													</tr>
													
													<?php
													foreach($packages as $package)
													{
														?>
														
														<tr>
													<td> <?php echo $package->name?> </td>
													
													<td> 
														<a  href="<?php echo asset("uploads/packages/$package->pdf") ?>"   target="_blank" >
											<img src="{{asset('uploads/pdf.png')}}" alt="PDF" width="75px" height="75px"  >
											</a> </td>
													</tr>
													
													
												
											
											
											     <?php
													}
													?>
													</table>
													<?php
													}
													?>
													
													
													
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
									
									<?php
									 foreach($menu_types as $menu_type)
									 {
										 ?>
												<div class="col-sm-3 menu-col" >
												
												<!-- Example single danger button -->
														<div class="btn-group" >
														  <button type="button"   class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															<?php echo $menu_type->title ?>
														  </button>
														  <div class="dropdown-menu" style="background:#efecec9c">
														  
														   <?php
														   $menu_category = DB::table('menu_category')
															->select('id', 'title')
															->where('is_deleted', 0)
														   ->where('menu_type',$menu_type->id )
															->get();	
															foreach($menu_category as $menucat)
															{
                                                            ?>															
															
															<a class="dropdown-item menuwhite"  onclick="getmenulist1('<?php echo $menucat->title?>',<?php echo $menucat->id?>,<?php echo $VenuesDetails->id?>)"><?php echo $menucat->title?></a>
															<?php
															}
															?>
														  </div>
														</div>
														
												 </div>
										<?php
									 }
                                      ?>									 
												 
												 
												 
												 
												 
												 
												 
												 
											

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
					 
					 
					 <div role="tabpanel" class="tab-pane fade" id="rules">
												<h5 class="tab-title">Cancelation Rules</h5>
												
												
												<table class="table">
												<tr> <td> Duration </td> 
												<td> Percentage </td>
												
												</tr>
												
												<tr> <td> Cancellation before 6 month to the Events: </td> 
												<td> <?php echo @$cancelrule->sixmonth ?>% </td>
												
												</tr>
												
												<tr> <td> Cancellation before 3 month to the Events: </td> 
												<td>  <?php echo @$cancelrule->threemonth ?>% </td>
												
												</tr>
												
												<tr> <td> Cancellation before 1 month to the Events: </td> 
												<td>  <?php echo @$cancelrule->onemonth ?>% </td>
												
												</tr>
												
												<tr> <td> Cancellation before 15 days to the Events: </td> 
												<td>  <?php echo @$cancelrule->fifteenday ?>% </td>
												
												</tr>
												
												<tr> <td> Cancellation before 1 weeks to the Events: </td> 
												<td>  <?php echo @$cancelrule->oneweek ?>% </td>
												
												</tr>
												
												
												
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
								<h4 class="widget-title"><!--AED {{ $VenuesDetails->final_price }}--> Booking Form</h4>
								<form id="hotelsvenues-form" method="post" action="{{ url('/bookvenues') }}">
					
					                @csrf <!-- {{ csrf_field() }} -->
									
									
									<div class="input-wrap">
									   <label>Event Title </label>
									   
										<input type="text" name="event_title"   id="event_title" required autocomplete="off" value="<?php echo @$event_title?>"  >
										
									</div>
									
									
									<div class="input-wrap">
									   <label>Start Date </label>
									   
										<input type="date" min="<?php echo date('Y-m-d', strtotime("+1 day"))?>" required  name="start_date"  id="start_date" autocomplete="off" value="<?php echo @$start_date?>"  >
										
									</div>
									<div class="input-wrap">
									   <label>Start Time </label>
									   
										<input type="time"  name="start_time"  id="start_time"  autocomplete="off"  required   value="<?php echo @$start_time?>"  >
									
									</div>
									<div class="input-wrap">
									   <label>End Date </label>
										<input type="date" name="end_date" id="end_date" min="<?php echo date('Y-m-d', strtotime("+1 day"))?>"  required  autocomplete="off" value="<?php echo @$end_date?>"  placeholder="End Date" >
										
									</div>
									
									<div class="input-wrap">
									   <label>End Time </label>
									   
										<input type="time" name="end_time" id="end_time" autocomplete="off" required value="<?php echo @$end_time?>"  >
										
									</div>
									
									<div class="input-wrap">
									   <label>No of Guests </label>
										<input type="text" name="no_guests" autocomplete="off" required value="<?php echo @$no_guests?>"  placeholder="No of Guests" id="no_guests">
										<i class="far fa-search"></i>
									</div>
								
									
									<input type="hidden" name="vid" value="{{$VenuesDetails->id}}">
									
									<input type="hidden" name="hid" value="{{$VenuesDetails->hotel_id}}">
									
									<input type="hidden" name="login_check" id="login_check"  value="">
									
									
									<div class="input-wrap">
									    <?php
									    if(Auth::guard('web')->user())
									    {
									        ?>
									        <button type="submit" class="btn filled-btn btn-block" >
											book now <i class="far fa-long-arrow-right"></i>
										</button>
									        <?php
									    }
									    else
									    {
									        ?>
									        <button type="button" class="btn filled-btn btn-block" onclick="book_check1()">
											book now <i class="far fa-long-arrow-right"></i>
										</button>
									        <?php
									    }
									    ?>
										
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
					
					<h1 class="color_#888181 ">Latest Hotel</h1>
				</div>
				
							<div class="row">
				
				   <?php
				   foreach ($hotel_featured as $i=>$value)
				   {
					   
					  $description=strip_tags($value->description);
				$description=substr($description,0,50);
				
				if(strlen($value->description) >50)
				{
					$description=$description."...";
				}
				
				
				
				$hname=substr($value->name,0,50);
				
				if(strlen($value->name) >50)
				{
					$hname=$hname."...";
				}
				
				$location=substr($value->location,0,50);
				if(strlen($value->location	)>50)
				{
					$location=$location."...";
				}
					   ?>
					<div class="col-lg-4 col-md-6">
					<div class="single-room" style="background:#FFF">
									<div class="room-thumb">
									
									<a href="{{ url('/hoteldetails/'.$value->id) }}">
										<img src="{{ asset('uploads/hotels_featured_images/'.$value->featured_image)}}" width="100%"  style="height:260px" alt="Room">
									</a>	 
									</div>
									<div class="room-desc1">
											<div class="room-cat" style="background:#efecec9c ; padding:5px; border-radius:0px 0px 10px 10px">
											<p style="text-align:left;color:#FFF; font-size:13px ; font-weight:bold ">
											<a  style="padding:3px 15px; font-size:17px" href="{{ url('/hoteldetails/'.$value->id) }}">{{ $hname }}</a></p>
										<p style="text-align:left;color:#FFF">
											<a href="{{ url('/hoteldetails/'.$value->id) }}" style="font-size: 11px; line-height: 13px;padding:3px 15px ">
											<?php
											for($r=0;$r<$value->grade; $r++)
											{
												?>
											
											<i class="far fa-star"></i> 
											<?php
											}
											?>
											
											</a></p> 
											
											
										<p style="text-align:left;color:#FFF">
											<a href="{{ url('/hoteldetails/'.$value->id) }}" style="font-size: 11px; line-height: 13px;padding:3px 15px ">
											<i class="far fa-map-marker"></i> <?php echo $location ?>
											</a></p> 	
											
											
										</div>
									
										
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



        <div class="modal fade" id="booking_alert" role="dialog" style="top:20%">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label=""><span>×</span></button>
                     </div>
					
                    <div class="modal-body">
                       
						<div class="thank-you-pop">
							
							<p style="color:darkgoldenrod; padding:10% 20%" >Please <a href="#" onclick="bookauth('login')">Login</a> or <a href="#" onclick="bookauth('register')">Register</a> for Booking </p>

						
							
 						</div>
                         
                    </div>
					
                </div>
            </div>
        </div>
    
	
	
	
	<script>


       function book_check1()
       {
           
           $("#hotelsvenues-form").valid();
            var event_title =$('#event_title').val();

        var start_date =$('#start_date').val();
        
        var start_time =$('#start_time').val();
        
        var end_date =$('#end_date').val();
        
        var end_time =$('#end_time').val();
        
        var no_guests =$('#no_guests').val();

       if(event_title !='' &&  start_date !='' && start_time !='' && end_date !='' && end_time != '' && no_guests !='')
       {

         $('#booking_alert').modal('show');
       }
           
       }
	
	   function bookauth(value)
	   {
	       $('#login_check').val(value);
	       
	       
	        $("#hotelsvenues-form").submit();
	   }
	   
    </script>


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
	

