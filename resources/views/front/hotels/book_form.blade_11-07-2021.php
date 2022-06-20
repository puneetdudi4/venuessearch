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
		
			<form id="hotelsvenues-form" method="post" action="{{ url('/savebookvenues') }}">
					
					                @csrf <!-- {{ csrf_field() }} -->
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
									
									
									
									<table class="table" >
									 <tr>
									   <td> <strong>Name:</strong> </td>
									   <td> <?php echo $user->name ?> </td>
									     <td> <strong>Mobile:</strong>  </td>
									   <td> <?php echo $user->mobile ?> </td>
									 </tr>
									 
									 <tr>
									   <td> <strong>Address:</strong> </td>
									   <td> <?php echo $user->area ?>,<?php echo $city ?> ,
									   <?php echo $user->country ?></td>
									     <td><strong> Email:</strong>  </td>
									   <td> <?php echo $user->email ?> </td>
									 </tr>
									 <tr>
									   <td> <strong>No of Days:</strong> </td>
									   <td> <?php echo $no_of_dates; ?> </td>
									   <td></td>  <td></td>
									  </tr> 
									 
									 
									 </table>
								   </div>	 
									
									<div class="row" style="margin-top:50px">
									
											<h5 class="tab-title">Menus</h5>
											
									
									<table class="table" >
									 <tr>
									
									 <td width="10%"># </td>
										 
									 <td width="10%">
											<strong>Image</strong>
									 </td>
										   
									
									<td width="50%">
											<strong>Menu Name</strong>
									 </td>
								
										
									<td width="30%">
										<strong>Total Price</strong>
									</td>
									</tr>
										
										
									
									
									<?php
									$i=1;
								foreach ($menus	 as $menu)
								{
									
									
												if($menu->discount !='0.00')
												{
													$price=$menu->cost;
													
													
													
													$discount=$price*($menu->discount/100);
													$cost=$price-$discount;
													$total_price=$cost +10;
													
												}
												else
												{
												$total_price=$menu->cost+10;
												}
									?>
									<tr>
									
									  <td>
											<input type="radio"  name="menu_id" onclick="menu_price(<?php echo $total_price ?>,<?php echo $i?>)" style="height:30px">
									  </td>
										 
										<td>
											<div class="food-img">
												
												
												<img src="{{ asset('storage/hotels_sub_entity_menu/'.$menu->image)}}" alt="{{ $menu->title  }} "   >
												
												
											</div>
										 </td>
										 <td>
											<div class="food-dec">
												<h4><?php echo $menu->title ?>  </h4>
												<p><?php echo $menu->category_title ?></p>
											
												<p class="price"> 
												<?php 
												if($menu->discount !='0.00')
												{
													//$price=$menu->cost;
													echo "Original Price:<del style='color:red'> AED".$price ."</del>";
													
													
													$discount=$price*($menu->discount/100);
													$cost=$price-$discount;
													?>
													<span style="margin-left:20px; color:green">Discount Price:AED<?php echo $total_price?> </span>
													<?php
													
												}
												else
												{
												echo "Price: AED".$total_price;
												}
												?>
												</p>
												
													<p>
												 
												 
												  <a href="{{ asset('storage/hotels_sub_entity_menu/'.$menu->doc_file)}}" target="_blank" > View Menu </a>
												</p>
											</div>
										</td>
									
										<td>
										<input type="text" name="menu_total_price[<?php echo $menu->id?>]"  class="price" id="price<?php echo $i?>" >
										</td>
										
										
									</tr>
						
						 <?php
						     $i++;
								}
						  ?>		
						
					           <input type="hidden" id="menu_count" value="<?php echo $i?>">
							   
							   	 
									
									 <td width="10%"> </td>
										 
									 <td width="10%">
											
									 </td>
											
									 </td>
									<td width="20%">
										<strong>Venue Price</strong>
									</td>
										
									<td width="60%">
									<input type="text" name="venue_price" id="venue_price"   value="<?php echo $VenuesDetails->final_price ?>">
									</td>
									</tr>
									
									
									 <tr>
									
									 <td width="10%"> </td>
										 
									  <td width="10%">
											
									 </td>
											
									 </td>
									<td width="20%">
										<strong>Total Price</strong>
									</td>
										
									<td width="60%">
									<input type="text" name="total_price" id="total_price"   value="<?php echo $VenuesDetails->final_price * $no_of_dates ?>">
									
									<input type="hidden" id="no_of_dates" name="no_of_dates" value="<?php echo $no_of_dates?>" >
									
									<input type="hidden" name="no_of_days" value="<?php echo $no_of_dates ?>" >
										
										
									</td>
									</tr>
									
									<tr>
									
									 <td width="10%"> </td>
										 
									  <td width="10%">
											
									 </td>
											
									 </td>
									<td width="20%">
										
									</td>
										
									<td width="60%">
											<div class="input-wrap">
										<button type="submit"  style="padding:30px" class="btn filled-btn btn-block">
											book now <i class="far fa-long-arrow-right"></i>
										</button>
									</div>
									</td>
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
					<div class="col-lg-4">
						<!-- Sidebars Area -->
						<div class="sidebar-wrap">
							<div class="widget booking-widget">
								<h4 class="widget-title">Venue Price: AED{{ $VenuesDetails->final_price }}</h4>
							
									
								<div class="input-wrap">
									   <label>Event Title </label>
									   
										<input type="text" name="event_title" autocomplete="off" value="<?php echo @$event_title?>"  >
										
									</div>
									
									
									<div class="input-wrap">
									   <label>Start Date </label>
									   
										<input type="text" name="start_date"  required autocomplete="off"  value="<?php echo $start_date?>" id="arrive-date">
										<i class="far fa-calendar-alt"></i>
									</div>
									<div class="input-wrap">
									   <label>Start Time </label>
									   
										<input type="time" autocomplete="off" required  value="<?php echo $start_time?>"  name="start_time"  >
									
									</div>
									<div class="input-wrap">
									   <label>End Date </label>
										<input type="text" name="end_date" required autocomplete="off"  value="<?php echo $end_date?>" placeholder="End Date" id="depart-date">
										<i class=""></i>
										<i class="far fa-calendar-alt"></i>
									</div>
									
									<div class="input-wrap">
									   <label>End Time </label>
									   
										<input type="time" name="end_time" required autocomplete="off"  value="<?php echo $end_time?>"   >
										
									</div>
									
									<div class="input-wrap">
									   <label>No of Guests </label>
										<input type="text" name="no_guests" required  autocomplete="off" id="no_guests" value="<?php echo $no_guests?>"   placeholder="No of Guests" id="f-location">
										<i class="far fa-search"></i>
									</div>
								
									
									<input type="hidden" name="vid" value="<?php echo $vid?>" >
									
									<input type="hidden" name="hid" value="<?php echo $hid?>" >
									
									<input type="hidden" name="cid" value="<?php echo $user->id ?>" >
									
									
								
									
									
									
									
								
							</div>
						
						
						</div>
					</div>
				</div>
			</div>
		</section>
		
		</form>
		
		
		
	
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
