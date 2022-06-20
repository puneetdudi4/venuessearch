@include('front.layout.header')

	<main>
		<!-- Breadcrumb section -->
		<section class="breadcrumb-area d-flex align-items-center position-relative bg-img-center"
			style="background-image: url({{ asset('storage/eventTypeImg/'.$eventtype->image)}});">
			
			
			<div class="container">
				<div class="breadcrumb-content text-center">
					<h1>{{ $eventtype->title }}</h1>
					<ul class="list-inline">
						<li><a href="{{ URL::to('/') }}">Home</a></li>
						<li><i class="far fa-angle-double-right"></i></li>
						<li>{{ $event_types }}</li>
					</ul>
				</div>
			</div>
			
		</section>
		<!-- Breadcrumb section End-->
		<!-- Latest Room Section -->
		<section class="rooms-warp gird-view section-bg section-padding">
			<div class="container">
				<div class="row">
					
					
					
						
							
									
					
					<div class="col-lg-4">
						<div class="sidebar-wrap">
							<div class="widget fillter-widget">
								<h4 class="widget-title">Search</h4>
								
								
								<form id="hotelsvenues-form" method="post" action="{{ url('/venuesLists') }}">
					
					@csrf <!-- {{ csrf_field() }} -->
					
									<div class="input-wrap">
										<input type="text" name="location" value="<?php echo $location?> "  placeholder="Location" id="location">
										<i class="far fa-search"></i>
									</div>
								
								
									<div class="input-wrap"> 
										<select name="city" id="city" >
											<option value=""  >City</option>
										 @foreach($city as $i=>$value)
										   <?php
										    if($cityid == $value->id)
                                            { 
                                              $selected='selected';
											  
											}
											else
											{
												$selected='';
											}
											?>
                                                    <option <?php echo $selected?>  value="{{ $value->id }}">
                                                        {{ $value->name }}
                                                    </option>
                                         @endforeach
										</select>
									</div>
									<div class="input-wrap">
										<select name="event_type" id="event_type">
											<option value="" >Event Type</option>
											 @foreach($event as $i=>$value)
											   <?php
										    if($event_type == $value->id)
                                            { 
                                              $selected='selected';
											  
											}
											else
											{
												$selected='';
											}
											?>
											
                                                    <option <?php echo $selected?> value="{{ $value->id }}">{{ $value->title }}</option>
                                         @endforeach
										</select>
									</div>
									<div class="input-wrap">
									<?php
									$stars=array(5=>'5 Star', 7=>'7 Star');
									?>
										<select name="star" id="star">
											<option value=""  >Star</option>
											<?php
											foreach($stars as  $i=>$value)
											{
												
										    if($star == $i)
                                            { 
                                              $selected='selected';
											  
											}
											else
											{
												$selected='';
											}
											?>
											
                                           
											<option <?php echo $selected ?> value="<?php echo $i?>"><?php echo $value?></option>
											
											<?php
											}
											?>
										</select>
									</div>
									
										<div class="input-wrap">
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
											<option value="" >No of Guests</option>
											<?php
											foreach($guests as  $i=>$value)
											{

												
										    if($star == $i)
                                            { 
                                              $selected='selected';
											  
											}
											else
											{
												$selected='';
											}
											?>
											
											<option <?php echo $selected?>  value="<?php echo $i?>"><?php echo $value?>"</option>
											
											<?php
											}
											?>
										</select>
									</div>
									
									
										
										<div class="input-wrap">
									<?php
									$types=array('indoor'=>'Indoor',
									'outdoor'=>'Outdoor'
									);
									?>
										<select name="type" id="type">
											<option value="" >Types</option>
											<?php
											foreach($types as  $i=>$value)
											{
												
										     if($type == $i)
                                            { 
                                              $selected='selected';
											  
											}
											else
											{
												$selected='';
											}
											?>
											<option <?php echo $selected?>  value="<?php echo $i?>"><?php echo $value?></option>
											
											<?php
											}
											?>
										</select>
									</div>
									
									
									
									
								
									
									
									<!--<div class="input-wrap">-->
									<!--	<div class="price-range-wrap">-->
									<!--		<div class="slider-range">-->
									<!--			<div id="slider-range"></div>-->
									<!--		</div>-->
									<!--		<div class="price-ammount">-->
									<!--			<input type="text" id="amount" name="price"-->
									<!--				placeholder="Add Your Price" />-->
									<!--		</div>-->
									<!--	</div>-->
									<!--</div>-->
						
								<div class="input-wrap">
										<button type="submit" class="btn filled-btn btn-block">
											Search Results <i class="far fa-long-arrow-right"></i>
										</button>
									</div>
								</form>
							</div>
						
						</div>
						
						
						
						
						
						
						
					</div>
					
					
			
					
					<div class="col-lg-8">
					    
					    
					    
								
					   <div class="row">
			   
			   <!-- 4 hotels started -->
			   
			   
			   	<div id="carouselExampleControlss" class="carousel slide" data-ride="carousel" style="width:100%">
			  <div class="carousel-inner">
			  
			  
			   <div class="carousel-inner">
			  
			   <div class="carousel-item active" style="background:#FFF">
			    <div class="row">
			   <?php
			           $cols = 8;

						$tdCount = 1; // Don't change
						$c = 1;
			   ?>
			   
			       @foreach($hotelList as $key=>$value)
			    <?php
				
				 if ($c == 1) {
                $active = 'active'; ?>
				
				<?php
            } else {
                $active = '';
            } 

				$description=strip_tags($value->description);
				$description=substr($description,0,50);
				
				if(strlen($value->description) >50)
				{
					$description=$description."...";
				}
				
				
				
				$hname=substr($value->hname,0,50);
				
				if(strlen($value->hname) >50)
				{
					$hname=$hname."...";
				}
				
				$location=substr($value->location,0,50);
				if(strlen($value->location	)>50)
				{
					$location=$location."...";
				}
			     ?>
			   
			                      <div class="col-lg-6 col-md-6">
									<div class="single-room" style="background:#FFF">
									<div class="room-thumb1">
									
								
									
									
                                    <div class="hproduct-img">
                             
								
								<img src="{{ asset('uploads/hotels_featured_images/'.$value->featured_image)}}" alt="{{ $value->hname }}"  style="height: 250px; width:100%" class="hrotate_image" >
									  <div class="hmiddle">
										<div class="htext"> <a style="color:#000" href="{{ url('/hoteldetails/'.$value->id) }}">View More</a></div>
									  </div>
  
  
                            </div>
                            
                            
									
									
									</div>
									<div class="room-desc1">
											<div class="room-cat" style="background:#efecec9c ; padding:5px; border-radius:0px 0px 10px 10px; height: 190px;">
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
											</a>
											
											  <a class="button_image link" href="{{ url('/hoteldetails/'.$value->id) }}" style="margin-left: 25%;color: #FFF ! important;background:#000
											  margin-left: 25%;
    ;color: #FFF ! important;
    background: #000;
    padding: 5px 10px ! important;
    font-size: 13px;" >Click for More Details </a>

											</p> 	
											
											
											
									
											
											
										</div>
									
										
									</div>
									</div>
									</div>
						
						      
			            
						
						
						  <?php
            // Close and open new rows
            if (($key + 1) % $cols === 0 && $key + 1 !== count($hotelList)) { ?>
				</div>
                </div>
                <div class="carousel-item " style="background:#FFF">
				 <div class="row">
                <?php }

            // Increment column count
            $tdCount++;

            // Fill with empty columns at the end
            if ($key + 1 === count($hotelList) && $tdCount <= $cols) {
                $spacers = $cols - $tdCount;
                for ($i = $spacers; $i >= 0; $i--) { ?>
                    <div class="col spacer">&nbsp;</div>
                    <?php }
            }

            // Reset columns count
            if ($tdCount > $cols) {
                $tdCount = 1;
            }

            $c++;
			?>
						
					    @endforeach	
						
						</div>
	
		
			  
			  
	               </div>
						
						
				
						
						</div>
						</div>
						
						
						
						<!-- 4 hotels end -->
						
						
						
						
						
						
			  
		       </div>
		       
			   
			   
			   		
							  <a class="carousel-control-prev fprev" href="#carouselExampleControlss" role="button" data-slide="prev">
				<< Prev
			  </a>
			  <a class="carousel-control-next fnext" href="#carouselExampleControlss" role="button" data-slide="next">
				Next >>
			  </a>
						
			   
			   
			   
			   
			   
			   
			   
		       
		       	   <a class="button_image link buttonimage-fade" href="{{ url('/')}}" style="margin-left: 45%; font-weight: bold; color: #FFF ! important;background:#000; padding:10px  20px">Back to Home </a>
			   
	
			  
			 </div>

		
				
				
				
				
				
					</div>
					
					
	
					
                <!--
					<div class="col-12">
						<div class="pagination-wrap">
							<ul class="list-inline">
								<li><a href="#"><i class="far fa-angle-left"></i></a></li>
								<li class="active"><a href="#">01</a></li>
								<li><a href="#">02</a></li>
								<li><a href="#">03</a></li>
								<li><a href="#"><i class="far fa-angle-right"></i></a></li>
							</ul>
						</div>
					</div>
				-->
				
					
					
				</div>
			</div>
		</section>
		<!-- Latest Room Section Ends -->
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




		<style>
		
		.fprev, .fnext {
    position: absolute;
    top: 97% ! important;
    font-size: 17px;
    font-weight: bold;
	color: #000 ! important;
		}
		
		.fprev
		{
			margin-left:30%;
		}
		
		.fnext
		{
			margin-right:21%;
		}
		
		#carouselExampleControlss.sr-only {
 
    overflow: visible ! important;
		}
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
  background:#FFF;
  color:#000;
  padding:3px 20px;
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