@include('front.layout.header')

	<main>
		<!-- Breadcrumb section -->
		<section class="breadcrumb-area d-flex align-items-center position-relative bg-img-center"
			style="background-image: url({{asset('front_end/img/bg/breadcrumb-01.jpg')}});">
			
			
			<div class="container">
				<div class="breadcrumb-content text-center">
					<h1>Venue Lists</h1>
					<ul class="list-inline">
						<li><a href="{{ URL::to('/') }}">Home</a></li>
						<li><i class="far fa-angle-double-right"></i></li>
						<li>Venue Lists</li>
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
						
						
						
						 @foreach($hotelList as $image=>$fi)
						 
						 
						 
						 <?php
			
				$description=strip_tags($fi->description);
				$description=substr($description,0,50);
				
				
				
				?>
					
							<div class="col-md-6">
								<!-- Single Room -->
								<div class="single-room">
									<div class="room-thumb">
									<a href="{{ url('/hoteldetails/'.$fi->id) }}">
                  			 <img  src="{{ asset('uploads/hotels_featured_images/'.$fi->featured_image)}}" alt="{{ $fi->hname }}" width="100%" style="height:250px">
											 
									 </a>
									 
									</div>
									<div class="room-desc">
										<div class="room-cat">
											<p>
											<a href="{{ url('/hoteldetails/'.$fi->id) }}">
											{{ $fi->hname }}
											</a>
											</p>
										</div>
										<h4><a href="{{ url('/hoteldetails/'.$fi->id) }}">{{ $fi->city_name }}</a></h4>
										<p>
											<?php echo $description ?>
										</p>
										<ul class="room-info list-inline">
											<li><i class="far fa-bed"></i>{{ $fi->city_name }}</li>
										
										   <li><i class="far fa-star"></i> {{ $fi->grade }} Star</li>
										</ul>
										
										<div class="room-cat1">
											<p>
											<a href="">
											
											</a>
											</p>
										</div>
										
									</div>
								</div>
							</div>
						


					    @endforeach
						
						
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