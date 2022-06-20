@include('front.layout.header')

	<main>
		<!-- Breadcrumb section -->
		<section class="breadcrumb-area d-flex align-items-center position-relative bg-img-center"
			style="background-image: url({{ asset('uploads/hotels_featured_images/'.@$hotelsDetails->featured_image)}}" alt="{{ $hotelsDetails->name }});">
			<div class="container">
				<div class="breadcrumb-content text-center">
					<h1><?php echo $hotelsDetails->name?></h1>
					<ul class="list-inline">
						<li><a href="{{ URL::to('/') }}">Home</a></li>
						<li><i class="far fa-angle-double-right"></i></li>
						<li><?php echo $hotelsDetails->name?></li>
					</ul>
				</div>
			</div>
			
		</section>
		<!-- Breadcrumb section End-->
	





	<section class="room-details-wrapper section-padding">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
					
					
						<!-- Room Details -->
						<div class="room-details">
							<div class="entry-header">
								<div class="post-thumb position-relative">
									
							   <!--Carousel Wrapper-->
    <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel" style="height:600px">
      <!--Slides-->
      <div class="carousel-inner" role="listbox" style="height:500px">
	  
	   <?php
	   $i=1;
		 foreach($gallery_images as $gallery)
		{
			if($i ==1)
			{
				$active='active';
			}
			else
			{
				$active='';
			}
					
		?>
        <div class="carousel-item <?php echo $active?>" style="height:450px">
		
	
		<img src="{{ asset('uploads/hotels_gallery_images/'.$gallery->image)}}"  height="450px"  class="d-block w-100" alt="Image">
        
        </div>
		<?php
			$i++;								
		}
		?>
       
      </div>
      <!--/.Slides-->
      <!--Controls-->
      <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
      <!--/.Controls-->
      <ol class="carousel-indicators" style="position:relative">
	  
	    <?php
	   $i=0;
		 foreach($gallery_images as $gallery)
		{
			if($i ==0)
			{
				$active='active';
			}
			else
			{
				$active='';
			}
					
		?>
        <li data-target="#carousel-thumb" data-slide-to="<?php echo $i ?>" class="<?php echo $active?>"> 
		
		
			
			<img src="{{ asset('uploads/hotels_gallery_images/'.$gallery->image)}}"  style="height:60px"  class="d-block " alt="Image">
			
		</li>
		
		<?php
			$i++;								
		}
		?>
       
      </ol>
    </div>
    <!--/.Carousel Wrapper-->
								
								</div>
								
							
								
							</div>
							
							
							
							<div class="room-details-tab">
								<div class="row">
									<div class="col-sm-3">
										<ul class="nav desc-tab-item" role="tablist">
											<li class="nav-item">
												<a class="nav-link active" href="#desc" role="tab"
													data-toggle="tab">Hotel Details</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="#location" role="tab"
													data-toggle="tab">Location</a>
											</li>
											
										</ul>
									</div>
									<div class="col-sm-9">
										<div class="tab-content desc-tab-content">
											<div role="tabpanel" class="tab-pane fade in active show" id="desc">
												<h5 class="tab-title">Hotel Details </h5>
												<div class="entry-content">
												
												  <ul class="entry-meta list-inline">
									<li><i class="far fa-star"></i> <?php echo $hotelsDetails->grade?> Star</li>
									
								</ul>
								
													<p>
													 <?php echo $hotelsDetails->summary ?>
													</p>
													
												</div>
												
												
												
												
														
		
			<div class="container">
				<div class="section-title text-center">
					
					<h1 class="color_darkgoldenrod" style="margin-bottom: 0px;" >Venues List</h1>
				</div>
				<!-- Foods Wrap -->
				<div class="row">
				
				<?php
				 foreach($venus as $venu)
				 {
				?>	 
					<!--<div class="col-lg-4 col-md-6 col-sm-6">
						<div class="single-latest-food">
						<a class="color_darkgoldenrod"   href="{{ url('/venuedetails/'.$venu->id) }}">
							<div class="food-img">
							
								<img src="{{ asset('uploads/hotels_featured_images/'.$venu->feature_image)}}" alt="{{ $venu->title }}" >
								
							</div>
						</a>	
							<div class="l-food-desc d-flex justify-content-between align-items-center">
								<h4><a class="color_darkgoldenrod" style="width:100%; margin-left:0px" href="{{ url('/venuedetails/'.$venu->id) }}"><?php echo $venu->title?></a></h4>
								
							</div>
						</div>
					</div>-->
					
					
					<div class="col-lg-6 col-md-6 col-sm-6">
                        <!-- Single feature boxes -->
                        <div class="product-box text-center width_95">
						    <div class="product-head">
							  <a class="white"  href="{{ url('/venuedetails/'.$venu->id) }}"> <?php echo $venu->title?> </a>
							</div>
							<a  href="{{ url('/venuedetails/'.$venu->id) }}">
                            <div class="product-img">
                                <img src="{{ asset('uploads/hotels_featured_images/'.$venu->feature_image)}}" alt="{{ $venu->title }}" class="rotate_image" >
                                
                                
                            
									 <!-- <div class="middle">-->
										<!--<div class="text"> <a style="color:#000" href="{{ url('/venuedetails/'.$venu->id) }}">Book Now</a></div>-->
									 <!-- </div>-->
									  
									  
                            </div>
							</a>
                           <style>
                               .middle_btn {
    margin: 25px 0;
    transition: .5s ease;
    /* opacity: 0; */
    position: absolute;
    /* top: 100px; */
    left: 50%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    text-align: center;
    background: #000;
    color: #FFF;
    padding: 3px 20px;
    font-weight: bold;
}
                           </style>
                           
                             <div class="middle_btn">
										<div class="text"> <a style="color:#000" href="{{ url('/venuedetails/'.$venu->id) }}">Book Now</a></div>
									  </div>
                        </div>
                    </div>
					
				<?php
				 }
                ?>				 
					
					
					
				</div>
			</div>
	
		
	
												
												
												
												
										</div>
											<div role="tabpanel" class="tab-pane fade" id="location">
												<h5 class="tab-title">Location</h5>
												<div id="roomMaps"></div>
												<div class="room-location">
													<div class="row">
														<div class="col-4">
															<h6>City</h6>
															<p>{{ $hotelsDetails->location}}</p>
															<p>{{ $hotelsDetails->city_name}}</p>
														</div>
														<div class="col-4">
															<h6>Phone</h6>
														
															<p>+971 4 435 7505</p>
														</div>
														<div class="col-4">
															<h6>Email</h6>
															<p>info@hotelsvenues.com</p>
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
	
		<!-- Brands section End -->
	</main>
	<!-- Main Wrap end -->
	
	
	
	
@include('front.layout.footer')



<script>
	
	$(function() {
	// Map for Room Details Page
	function roomMaps() {
		var mapOptions = {
			zoom: 12,
			scrollwheel: false,
			// The latitude and longitude to center the map (always required)
			center: new google.maps.LatLng(<?php echo $hotelsDetails->lat ?>, <?php echo $hotelsDetails->long ?>), // New York
			// This is where you would paste any style found on Snazzy Maps.
			styles: [
				{
					featureType: 'all',
					elementType: 'geometry.fill',
					stylers: [
						{
							weight: '2.00'
						}
					]
				},
				{
					featureType: 'all',
					elementType: 'geometry.stroke',
					stylers: [
						{
							color: '#9c9c9c'
						}
					]
				},
				{
					featureType: 'all',
					elementType: 'labels.text',
					stylers: [
						{
							visibility: 'on'
						}
					]
				},
				{
					featureType: 'landscape',
					elementType: 'all',
					stylers: [
						{
							color: '#f2f2f2'
						}
					]
				},
				{
					featureType: 'landscape',
					elementType: 'geometry.fill',
					stylers: [
						{
							color: '#ffffff'
						}
					]
				},
				{
					featureType: 'landscape.man_made',
					elementType: 'geometry.fill',
					stylers: [
						{
							color: '#ffffff'
						}
					]
				},
				{
					featureType: 'poi',
					elementType: 'all',
					stylers: [
						{
							visibility: 'off'
						}
					]
				},
				{
					featureType: 'road',
					elementType: 'all',
					stylers: [
						{
							saturation: -100
						},
						{
							lightness: 45
						}
					]
				},
				{
					featureType: 'road',
					elementType: 'geometry.fill',
					stylers: [
						{
							color: '#eeeeee'
						}
					]
				},
				{
					featureType: 'road',
					elementType: 'labels.text.fill',
					stylers: [
						{
							color: '#7b7b7b'
						}
					]
				},
				{
					featureType: 'road',
					elementType: 'labels.text.stroke',
					stylers: [
						{
							color: '#ffffff'
						}
					]
				},
				{
					featureType: 'road.highway',
					elementType: 'all',
					stylers: [
						{
							visibility: 'simplified'
						}
					]
				},
				{
					featureType: 'road.arterial',
					elementType: 'labels.icon',
					stylers: [
						{
							visibility: 'off'
						}
					]
				},
				{
					featureType: 'transit',
					elementType: 'all',
					stylers: [
						{
							visibility: 'off'
						}
					]
				},
				{
					featureType: 'water',
					elementType: 'all',
					stylers: [
						{
							color: '#46bcec'
						},
						{
							visibility: 'on'
						}
					]
				},
				{
					featureType: 'water',
					elementType: 'geometry.fill',
					stylers: [
						{
							color: '#c8d7d4'
						}
					]
				},
				{
					featureType: 'water',
					elementType: 'labels.text.fill',
					stylers: [
						{
							color: '#070707'
						}
					]
				},
				{
					featureType: 'water',
					elementType: 'labels.text.stroke',
					stylers: [
						{
							color: '#ffffff'
						}
					]
				}
			]
		};

		var mapElement = document.getElementById('roomMaps');

		// Create the Google Map using our element and options defined above
		var map = new google.maps.Map(mapElement, mapOptions);

		// Let's also add a marker while we're at it
		var iconBase = '../assets/img/mappin.png';
		var marker = new google.maps.Marker({
			position: new google.maps.LatLng(<?php echo $hotelsDetails->lat ?>, <?php echo $hotelsDetails->long ?>),
			map: map,
		//	icon: iconBase,
			title: 'Cryptox'
		});
	}
	if ($('#roomMaps').length != 0) {
		google.maps.event.addDomListener(window, 'load', roomMaps);
	}
	
	});
	</script>
	
		<style>
	.carousel-indicators li{
	width:100px ! important;
	height:60px ! important;
	
	</style>
	
	
	
					
				<style>


.rotate_image {
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
  background:#000;
  color:#FFF;
  padding:3px 20px;
  font-weight:bold;
}

.rotate_image:hover {
  opacity: 0.3;
  /* transform: rotate(360deg);*/
   transform: scale(1.1);
   border:solid #ccc 2px;
}

.product-img:hover .middle {
  opacity: 1;
}






.hrotate_image {
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;
}

.hmiddle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 40%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
  background:#000;
  color:#FFF;
  padding:3px 20px;
}

.hrotate_image:hover {
  opacity: 0.3;
   transform: rotateY(180deg);
   border:solid #ccc 2px;
   background:#ccc;
   -webkit-transition-duration: 5s;
}

.hproduct-img:hover .hmiddle {
  opacity: 1;
}

</style>









    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDUlGhRghOm7Q-x8rsHTFqzLT1DRjSOhSo&libraries=places"></script>

    <script>
     /* var markerCenter = new google.maps.LatLng(20.2547,44.2658);
      var marker = null;

     function initialize() {
      var mapProp = {
       center: markerCenter,
       zoom: 5,
       mapTypeId: google.maps.MapTypeId.ROADMAP
       };
      var map = new google.maps.Map(document.getElementById("map"),mapProp);
      
       var marker = new google.maps.Marker({
         position: markerCenter,
         animation: google.maps.Animation.BOUNCE
       });
       marker.setMap(map);
     }

     google.maps.event.addDomListener(window, 'load', initialize);
     */
    </script>


  <!--<div id="map" style="width:500px;height:300px;"></div> -->









	