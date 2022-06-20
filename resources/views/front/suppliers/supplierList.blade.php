@include('front.layout.header')

	<main>
		<!-- Breadcrumb section -->
		<section class="breadcrumb-area d-flex align-items-center position-relative bg-img-center"
			style="background-image: url({{asset('front_end/img/bg/breadcrumb-01.jpg')}});">
			
			
			<div class="container">
				<div class="breadcrumb-content text-center">
					<h1>Hotel Lists</h1>
					<ul class="list-inline">
						<li><a href="{{ URL::to('/') }}">Home</a></li>
						<li><i class="far fa-angle-double-right"></i></li>
						<li>Spplier Lists</li>
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
									$stars=array(1=>'1 Star', 2=>'2 Star' , 3=>'3 Star', 4=>'4 Star', 5=>'5 Star');
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
									
									
									
									
								
									
									
									<div class="input-wrap">
										<div class="price-range-wrap">
											<div class="slider-range">
												<div id="slider-range"></div>
											</div>
											<div class="price-ammount">
												<input type="text" id="amount" name="price"
													placeholder="Add Your Price" />
											</div>
										</div>
									</div>
						
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
					
					    <div class="row" >
					
					
        					 @foreach($supplierlist as $i=>$value)
                            <div class="col-lg-4 col-md-6">
                                <!-- Single feature boxes -->
                                <div class="product-box text-center">
        						    <div class="product-head" >
        								 <!--<a class="white"  href="/getsupplierlist/{{ $value->title }}"> {{ $value->title }} -->
        								 <!--</a>-->
        							</div>
                                    <div class="product-img ">
                                     
        								
        								<img src="{{ asset('storage/supplierTypeImg/'.$value->image)}}" alt="{{ $value->title }}" class="rotate_image" >
        									  <div class="middle1">
        										<div class="text">
        										    	 <a class=""  href="/getsupplierlist/{{ $value->title }}"> {{ $value->title }} 
        							        	 </a>
        							        	 </div>
        							        	 </div>
        							        	 <div class="middle">
        										<div class="text">
        										     <a style="color:#000" href="{{ url('/getsupplierlist/'.$value->title) }}">View More</a></div>
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
					</div> -->
					
					
					
				</div>
			</div>
		</section>
	

	<!-- Latest Room Section Ends -->
		<!-- Brands section start -->
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


