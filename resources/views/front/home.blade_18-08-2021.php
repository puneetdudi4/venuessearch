@include('front.layout.header')

	<main>



<section class="hero-section" id="heroSlideActive">
<video autoplay muted loop controls src="{{asset('front_end/img/bg/hv.mp4')}}"></video>

</section>

	
		<!-- Book Form Start -->
		<section class="booking-section">
			<div class="container-fluid">
			
			<div class="web_text">
						 Your Budget, Your Event, Your Way.
					
					</div>
					
				<div class="booking-form-wrap bg-img-center section-bg">
					<form id="bookIng-form" method="post" action="{{ url('/hotelLists') }}">
					
					@csrf <!-- {{ csrf_field() }} -->

						<div class="row">
						
							
							
							<div class="col-lg-2 col-md-6">
								<div class="input-wrap">
								<!--<label class="label_color">Location</label>-->
									<select name="city" id="city">
									     <option value="" >City</option>
										 @foreach($city as $i=>$value)
                                                    <option value="{{ $value->id }}">
                                                        {{ $value->name }}
                                                    </option>
                                         @endforeach
									
									</select>
								</div>
							</div>
							<div class="col-lg-3 col-md-6">
								<div class="input-wrap">
								<!--<label class="label_color">Event Type</label> -->
									<select name="event_type" id="event_type">
									     <option value="" >Event Type</option>
										 @foreach($event as $i=>$value)
                                                    <option value="{{ $value->id }}">{{ $value->title }}</option>
                                         @endforeach
									
									</select>
								</div>
							</div>
							<div class="col-lg-2 col-md-6">
								<div class="input-wrap">
								<!--<label class="label_color">Guests</label>-->
								
								<?php
									$guests=array('100-200'=>'100-200',
									'201-400'=>'201-400' ,
									'401-600'=>'401-600',
									'601-800'=>'601-800', 
									'801-1000'=>'801-1000',
									'1001'=>'1000 Above'
									);
									?>
									
									<select name="guests" id="guests">
									            <option value="" >Guests</option>
										
                                                  <?php
											foreach($guests as  $i=>$value)
											{

											
											?>
											
											<option   value="<?php echo $i?>"><?php echo $value?></option>
											
											<?php
											}
											?>
									
									</select>
								</div>
							</div>
							
							<div class="col-lg-3 col-md-6">
								<div class="input-wrap">
								  <!--<label class="label_color">Budget Per Guests</label>-->
								  <?php

								  $budgets=array('100-150'=>'100-150',
									'151-200'=>'151-200' ,
									'201-250'=>'201-250',
									'251-300'=>'251-300', 
									'301-350'=>'301-350',
									
									'351-400'=>'351-400',
									
									'401-450'=>'401-450',
									
									'451-500'=>'451-500',
									
									'501-550'=>'501-550',
									
									'551-600'=>'551-600',
									
									'601-650'=>'601-650',
									'651-700'=>'651-700'
									
									
									
									);
									
									

									?>
									<select name="budget" id="budget">
									
									  <option value="" >Budget Per Person</option>
                                                  <?php
											foreach($budgets as  $i=>$value)
											{

											
											?>
											
											<option   value="<?php echo $i?>"><?php echo $value?></option>
											
											<?php
											}
											?>
										
									</select>
								</div>
							</div>
							
							<div class="col-lg-2 col-md-6">
								<div class="input-wrap">
								
									<button type="submit" class="btn filled-btn btn-block">
										Search<i class="far fa-search"></i>
									</button>
								</div>
							</div>
						</div>
					</form>
					
				</div>
			</div>
		</section>
		<!-- Book Form End -->
		

		
		
		        <section class="latest-product section-padding">
            <div class="container-fluid">
                <!-- Section Title -->
                <div class="section-title text-center">
                    
                    <style>
                        .color_darkgoldenrod1 {
    color: #888181 ! important;
    font-size: 61px ! important;
    color: darkgoldenrod;
    font-weight: bolder;
    /* border-bottom: 2px solid goldenrod; */
    padding-bottom: 13px;
    /* width: 50%; */
    font-family: Roboto Slab;
    /* margin-left: 25%; */
    margin-bottom: 40px ! important;
}
                    </style>
                    
                    <h1 class="color_darkgoldenrod1">Choose Your Event Type</h1>
                </div>
				
				<div class="row">
				
				  <div class="col-lg-6 col-md-6" style="">
				  <h3 class="color_darkgoldenrod text-center	">Social</h3>
				  </div>
				  
				  <div class="col-lg-6 col-md-6">
				  <h3 class="color_darkgoldenrod text-center	">Corporate</h3>
				  </div>
				  
				</div>
				
				
                <div class="row" >
				
				 <div class="col-lg-6 col-md-6" style="padding-right:30px">
				 <div class="row" style="margin-top:30px">
				 
				 
				  @foreach($event_social as $i=>$value)
                    <div class="col-lg-6 col-md-6 nopadding">
                        <!-- Single feature boxes -->
                        <div class="product-box text-center width_95">
						    <div class="product-head" >
							  <a class="white"  href="{{ url('/eventtypes/'.$value->id) }}"> {{ $value->title }} </a>
							</div>
							<a href="{{ url('/eventtypes/'.$value->id) }}">
                            <div class="product-img">
                                <img  src="{{ asset('storage/eventTypeImg/'.$value->image)}}" alt="{{ $value->title }}">
                            </div>
							</a>
                           
                        </div>
                    </div>
					
				  @endforeach

				  
			      </div>
              
             
                 </div>
				 
				 
				 <div class="col-lg-6 col-md-6" style="padding-left:30px">
				 <div class="row" style="margin-top:30px">
				 
				  @foreach($event_corporate as $i=>$value)
                    <div class="col-lg-6 col-md-6 nopadding">
                        <!-- Single feature boxes -->
                        <div class="product-box text-center width_95">
						    <div class="product-head" >
							  <a class="white"  href="{{ url('/eventtypes/'.$value->id) }}"> {{ $value->title }} </a>
							</div>
							<a href="{{ url('/eventtypes/'.$value->id) }}">
                            <div class="product-img">
                                <img  src="{{ asset('storage/eventTypeImg/'.$value->image)}}" alt="{{ $value->title }}">
                            </div>
							</a>
                           
                        </div>
                    </div>
					
				  @endforeach
					</div>
              
             
                 </div>
				 
				 
                
                </div>
            </div>
        
        </section>
        <!-- Latest Product end -->
  
		
		
		<!-- Welcome section start -->
		<section class="welcome-section section-padding">
			<div class="container-fluid">
				<div class="row align-items-center no-gutters">
					<!-- Tile Gallery -->
					<div class="col-lg-5">
						<div class="tile-gallery">
							
							
							
							<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
									  <div class="carousel-inner">
										<div class="carousel-item active">
										  <img class="d-block w-100" src="{{asset('front_end/img/about/slide/1.jpg')}}"  style="height:350px" alt="First slide">
										</div>
										<div class="carousel-item">
										  <img class="d-block w-100" src="{{asset('front_end/img/about/slide/2.jpg')}}" style="height:350px" alt="Second slide">
										</div>
										<div class="carousel-item">
										  <img class="d-block w-100" src="{{asset('front_end/img/about/slide/3.jpg')}}" style="height:350px"  alt="Third slide">
										</div>
									  </div>
									  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
										<span class="carousel-control-prev-icon" aria-hidden="true"></span>
										<span class="sr-only">Previous</span>
									  </a>
									  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
										<span class="carousel-control-next-icon" aria-hidden="true"></span>
										<span class="sr-only">Next</span>
									  </a>
									</div>
							
							
							
							
							
						</div>
					</div>
					<!-- End tile Gallery -->
					<div class="col-lg-7">
						<!-- Section Title -->
						<div class="section-title" style="padding-left:30px">
							<h1 style="color:#888181 ! important; text-align:center">About Us</h1>
							<h3>Welcome To HotelsVenues</h3>
							<p>Throughout the years, Hotels Venues team have built connections with
							events managers and hotel venues to providing comprehensive platform to search and book for venues for special occasions. 
							HotelsVenues.com is a unique platform that makes thousands of venues in UAE a click away,
							thus, delivering business owners and customers satisfaction in minimal time consumption, and 
							avoids venues over booking or cancellation. 
							</p>
							
							<p>Our platform permits its users to search and reserve their
							most suitable venue and search for related supplier at a glance according to their desired district, 
							guest numbers and budget per guest, venue start rating, preferred schedule, and Budget.

							HotelsVenues.com is committed to providing venues and caterings at competitive prices, making it consumer’s No.1 platform for their occasions.</p>
						</div>
			      </div>
				</div>
			</div>
		</section>
		<!-- Welcome section End -->
		
		
		

	
		
				<section class="section-bg ">
			<div class="container-fluid">
			
			<div class="row">
			
			 <div class="col-lg-4 col-md-4" style="display:none">
			 
			  <h3 class="color_darkgoldenrod">Featured Hotels</h3>
			
			<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
			  <div class="carousel-inner">
			  
			   @foreach($hotel_featured as $i=>$value)
			    <?php
				if($i==0)
				{
					$active = 'active';
				}
				else
				{
					$active = '';
				}
				
				$description=strip_tags($value->description);
				$description=substr($description,0,50);
				
				
				
				?>
				<div class="carousel-item <?php echo $active ?>">
				     	<div class="single-room" style="background:#efecec9c ">
							<div class="room-thumb">
								
								
								
								 <img  src="{{ asset('uploads/hotels_featured_images/'.$value->featured_image)}}" alt="{{ $value->name }}" width="100%">
								 
								

							</div>
							<div class="room-desc">
								<div class="room-cat">
									<p style="color:#FFF">Popular</p>
								</div>
								<h4><a href="" style="color:#FFF" >{{ $value->name }}</a></h4>
								<p style="color:#FFF">
									<?php echo $description?>
									
								</p>
								<ul class="room-info list-inline">
									<li style="color:#FFF"><i class="far fa-bed"></i>3 Bed</li>
									<li style="color:#FFF"><i class="far fa-bath"></i>2 Baths</li>
									<li style="color:#FFF"><i class="far fa-ruler-triangle"></i>72 m</li>
								</ul>
								<div class="room-price">
									<p>$205.00</p>
								</div>
							</div>
						</div>
						
						
				</div>
				
	          @endforeach
				
				
				
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			  </a>
            </div>
			
			</div>
			
			
			
			 <div class="col-lg-4 col-md-4" >
			 <style>
			 .example-1 {
    position: relative;
    overflow-y: scroll;
    height: 55%;
}

 .scrollbar-ripe-malinka::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
        background-color: #F5F5F5;
        border-radius: 10px; }

        .scrollbar-ripe-malinka::-webkit-scrollbar {
        width: 12px;
        background-color: #F5F5F5; }

        .scrollbar-ripe-malinka::-webkit-scrollbar-thumb {
        border-radius: 10px;
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
        background-image: -webkit-linear-gradient(330deg, #343a40 0%, #000000 100%);
        background-image: linear-gradient(120deg, #343a40 0%, #000000 100%); }

        .bordered-deep-purple::-webkit-scrollbar-track {
        -webkit-box-shadow: none;
        border: 1px solid #512da8; }
			 </style>
			 
			 <style>
			 ul.hl_ul li.hl_li
			 {
				 padding:10px 20px;
				 border-bottom:1px solid #fff;
				 background:#efecec9c ! important;
			 }
			 
			 .hotels-latest 
			 {
				 width:95%;
				 margin-left:2.5%;
			 }
			 </style>
			 
			 <div class="scrollbar scrollbar-ripe-malinka">
          <div class="force-overflow"></div>
        </div>
		
		<h3 class="color_darkgoldenrod text-center" style="margin-bottom:60px;     width: 100%;
    margin-left: 0%;">Hotel Lists</h3>
								
			 
		<div class="card example-1 scrollbar-ripe-malinka" style="border:solid 1px #fff ! important">
		
		<div class="widget hotels-latest">
		
								<ul class="hl_ul">
								<?php
								foreach($hotel_lists as $hotel_list)
								{
									?>
									<li class="hl_li">
										<a href="{{ url('/hoteldetails/'.$hotel_list->id) }}" style="color:#888181  ! important; font-size:24px"> <?php echo $hotel_list->name?> </a>
										
									<?php
								}
								?>
									
									
								
								</ul>
							</div>
          
        </div>
		
		
             </div>			  
			
			 <div class="col-lg-8 col-md-8">
			 
			  <h3 class="color_darkgoldenrod text-center" style="margin-bottom:60px">Featured Hotel Lists</h3>
			  
			   <div class="row">
			   
			   
			       @foreach($hotel_featured as $i=>$value)
			    <?php
				
				$description=strip_tags($value->description);
				$description=substr($description,0,50);
			     ?>
			   
			                      <div class="col-lg-6 col-md-6">
									<div class="single-room" style="background:#FFF">
									<div class="room-thumb">
									
									<a href="{{ url('/hoteldetails/'.$value->id) }}">
										<img src="{{ asset('uploads/hotels_featured_images/'.$value->featured_image)}}" width="100%"  style="height:260px" alt="Room">
									</a>	 
									</div>
									<div class="room-desc1">
											<div class="room-cat" style="background:#efecec9c ; padding:5px; border-radius:0px 0px 10px 10px">
											<p style="text-align:center;color:#FFF; font-size:17px font-weight:bold ">
											<a href="{{ url('/hoteldetails/'.$value->id) }}">{{ $value->name }}</a></p>
										<!--<p style="text-align:center;color:#FFF">
											<a href="">View More</a></p> -->
											
											
										</div>
									
										
									</div>
									</div>
									</div>
						
						      
			            
						
					    @endforeach	
			  
		       </div>
			   
			  
			  
			 </div>

			 
			  
			</div>
			
			
		</div>
		</section>
	






    		
		    <section class="latest-product section-padding">
            <div class="container-fluid">
                <!-- Section Title -->
                <div class="section-title text-center">
                    
                    <h1 class="color_darkgoldenrod">Suppliers List</h1>
                </div>
				
				
				
				
                <div class="row" >
				
				 @foreach($supplierlist as $i=>$value)
                    <div class="col-lg-4 col-md-6">
                        <!-- Single feature boxes -->
                        <div class="product-box text-center">
						    <div class="product-head" >
								 <a class="white"  href="/getsupplierlist/{{ $value->title }}"> {{ $value->title }} 
								 </a>
							</div>
                            <div class="product-img">
                          <a class="white"  href="/getsupplierlist/{{ $value->title }}"> 
								
								<img  style="width:100%" src="{{ asset('storage/supplierTypeImg/'.$value->image)}}" alt="{{ $value->title }}">
							</a>	
                            </div>
                           
                        </div>
                    </div>
					
                   @endforeach

					</div>
              
             
               
				 
	          
            </div>
           
        </section>
        <!-- Latest Product end -->
	
		
		
  
	</main>
	<!-- Main Wrap end -->
	<!-- Footer Start -->

@include('front.layout.footer')