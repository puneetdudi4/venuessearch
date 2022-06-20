$@include('front.layout.header')


<?php

        if(Session::get('lang')=='arabic')
        {
   
		   
		
		   $book_your='لحجز القاعات للمناسبات ';
		   $yourbudget='بميزانيتك، قاعتك، بطريقتك';
		  
		   
		    $home_city='ألامارة';
		   $home_eventtype='نوع المناسبة';
		   $home_venuetype='نوع القاعة';
		   $home_search='بحث';
		   
		   $venuetypes=array('indoor'=>'داخلي',
									'outdoor'=>'خارجي'
									);
									
			$welcome_msg='اهلآ و سهلآ بكم في هوتلز ڨنيوز';	

           $bestvenue='أفضل قاعات للمناسبات';
           $bestvenue_text='إختار مكان لمناسبتك ضمن أروع قاعات لهذا الشهر';	

          $clickmore='للتفاصيل';
          $viewmore='للمزيد';

          $venuebyevent='أماكن و قاعات حسب نوع المناسبة';
          $venuebyevent_text='قاعات متميزة بأدائها الرائع في استضافة جميع انواع المناسبات';			

         $home_supplierlist='الموردون';	

         $customer_visit_text='عدد الزائرين';
         $no_hotels_text='Nعدد الفنادق';	
         $no_venues_text='عدد القاعات';	
         $no_suppliers_text='Nعدد الموردين';	
         $r_quote='اطلب عرض سعر';

           $r_quote1='الأسم';	
           $r_quote2='المكان المفضل';	
           $r_quote3='انوع المناسبة';
           $r_quote4='عدد المدعوين';	
           $r_quote5='ميزانيتك للشخص الواحد';	
           $r_quote6='إيميل ';	
           $r_quote7='رقم الموبايل';	
           $send='ارسال';		   
		   
		   
        }
        else
        {
  
		  
		  $book_your=' Book Your <span class="home-text" style="">Hotel Venue</span>';
		  $yourbudget='Your Budget, Your Event, Your Way.';
		  
		  $home_city='City';
		   $home_eventtype='Event Type';
		   $home_venuetype='Venue Type';
		   $home_search='Search';
		   
		   $venuetypes=array('indoor'=>'Indoor',
									'outdoor'=>'Outdoor'
									);
			$welcome_msg='Welcome To HotelsVenues';		
            $bestvenue='Best Venues For Events';	
            $bestvenue_text='Explore event spaces at these outstanding venues this month';
			$clickmore='Click for More Details';
            $viewmore='View More';	
            $venuebyevent='Venues By Event Type';
            $venuebyevent_text='Venues recognised for their outstanding performance in hosting particular event types';	

           $home_supplierlist='Suppliers List';		
           $customer_visit_text='Customer visit';
           $no_hotels_text='No Of Hotels';	
           $no_venues_text='No of Venues';	
           $no_suppliers_text='No of Suppiler list';	
           $r_quote='Request for quotation';	
           $r_quote1='Full Name';	
           $r_quote2='Preffered Location';	
           $r_quote3='Event Type';
           $r_quote4='No of Guests';	
           $r_quote5='Budget per Person';	
           $r_quote6='Your Email';	
           $r_quote7='Your Mobile';			
           $send='Send';		   

			
		  
		 
		   
		   
        }
      ?>  

	<main>



<section class="hero-section" id="heroSlideActive">
<video autoplay muted loop controls src="{{asset('front_end/img/bg/hv.mp4')}}"></video>

</section>

	
		<!-- Book Form Start -->
		<section class="booking-section" style="">
			<div class="container-fluid">
			
	
			   
			<div class="web_text" style="">
			   
			   
			         <!-- Book Your     <span class="home-text" style="">Hotel Venue</span>-->
					 <?php echo $book_your ?>

                          </br>
						<span style="" class="home-title"> {{ $yourbudget}}</span>
					
					</div>
					
				<div class="booking-form-wrap bg-img-center section-bg" style="background:#FFF ! important; border-radius:8px">
				    
				    <!--SEARch Start-->
					<form id="bookIng-form" method="post" action="{{ url('/hotelLists') }}">
					
					@csrf <!-- {{ csrf_field() }} -->

						<div class="row">
						
							
							
							<div class="col-lg-3 col-md-6 col-sm-6  col-6 search_padding">
								<div class="input-wrap">
								<!--<label class="label_color">Location</label>-->
									<select name="city" id="city">
									     <option  class="none" value="" >{{ $home_city}}</option>
										 @foreach($city as $i=>$value)
                                                    <option value="{{ $value->id }}">
                                                        {{ $value->name }}
                                                    </option>
                                         @endforeach
									
									</select>
								</div>
							</div>
							<div class="col-lg-3 col-md-6  col-sm-6 col-6 search_padding">
								<div class="input-wrap">
								<!--<label class="label_color">Event Type</label> -->
									<select name="event_type" id="event_type">
									     <option value="" >{{ $home_eventtype }}</option>
										 @foreach($event as $i=>$value)
                                                    <option value="{{ $value->id }}">{{ $value->title }}</option>
                                         @endforeach
									
									</select>
								</div>
							</div>
							
							<div class="col-lg-3 col-md-6 col-sm-6  col-6 search_padding">
								<div class="input-wrap">
								<!--<label class="label_color">Guests</label>-->
								
									
									<select name="venue_types" id="venue_types">
									            <option value="" > {{ $home_venuetype }}</option>
										
                                                  <?php
											foreach($venuetypes as  $i=>$value)
											{

											
											?>
											
											<option   value="<?php echo $i?>"><?php echo $value?></option>
											
											<?php
											}
											?>
									
									</select>
								</div>
							</div>
							
							<?php
									$guests=array('100-200'=>'100-200',
									'201-400'=>'201-400' ,
									'401-600'=>'401-600',
									'601-800'=>'601-800', 
									'801-1000'=>'801-1000',
									'1001'=>'1000 Above'
									);
									?>
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
									
							
							
								<!--<div class="col-lg-2 col-md-6 search_padding">-->
								<!--<div class="input-wrap">-->
								<!--<input value="Start date" class="textbox-n"  style="color:#3e3737;  background-color: #FFF ! important;" type="text" onfocus="(this.type='date')" id="date">-->

								<!--</div>-->
								<!--</div>-->
								
								<!--<div class="col-lg-2 col-md-6 search_padding">-->
								<!--<div class="input-wrap">-->
								<!--<input value="End date" class="textbox-n"  style="color:#3e3737; background-color: #FFF ! important;" type="text" onfocus="(this.type='date')" id="date">-->

								<!--</div>-->
								<!--</div>-->
								
								
							<div class="col-lg-3 col-md-6 col-sm-6 col-6">
								<div class="input-wrap" >
								
									<button type="submit" class="btn filled-btn btn-block" style="background: #FFF;
    border: solid 1px #bc9b6a;">
	{{ $home_search}}<i class="far fa-search" style="color:#d0cbcb"></i>
									</button>
								</div>
							</div>
						
						
						</div>
					</form>
					<!--Serach End-->
					
				</div>
			</div>
		</section>
		<!-- Book Form End -->
		
		
		
			<section class="section-bg " style="margin-top:5%">
			<div class="container">
			
			<div class="row">
			
		
			
			 <div class="col-lg-12 col-md-12">
			 
			  <h3 class="color_darkgoldenrod text-center" style="margin-bottom:10px">{{ $welcome_msg }} </h3>
			  <div class="col-lg-6 col-md-6" style="float:left;">
			      <div class="room-cat" style="background:#efecec9c ; padding:5px; border-radius:0px 0px 10px 10px; height: 200px;">
											<p style="text-align:left;color:#FFF; font-size:13px ; font-weight:bold ">
											<a style="padding:3px 15px; font-size:17px" href="javascript:;">Book your venue 
And everything you need for your events
From one place at the best prices and benefit from massive discounts and savings according to your budget and your way.</a></p>
										
										</div>
			  </div>
			  
			  <div class="col-lg-6 col-md-6" style="float:right;">
			      <div class="room-cat" style="background:#efecec9c ; padding:5px; border-radius:0px 0px 10px 10px; height: 200px;">
											<p style="text-align:left;color:#FFF; font-size:13px ; font-weight:bold ">
											<a style="padding:3px 15px; font-size:17px" href="javascript:;">احجزوا القاعه 
و كل شئ تحتاجونه لمناسباتكم 
من مكان واحد و بأفضل الاسعار و استفيدوا من الخصومات الرائعه و التوفير على حسب ميزانيتكم و ذوقكم</a></p>
																			</div>
			  </div>
               <!--<p style="width:100%; text-align:center; margin-bottom:10px">Throughout the years, Hotels Venues team have built connections with events managers and hotel venues to providing comprehensive platform to search and book for venues for special occasions. HotelsVenues.com is a unique platform that makes thousands of venues in UAE a click away, thus, delivering business owners and customers satisfaction in minimal time consumption, and avoids venues over booking or cancellation. </p>-->
			   
			      <!--<p style="width:100%; text-align:center; margin-bottom:10px">Our platform permits its users to search and reserve their most suitable venue and search for related supplier at a glance according to their desired district, guest numbers and budget per guest, venue start rating, preferred schedule, and Budget. HotelsVenues.com is committed to providing venues and caterings at competitive prices, making it consumer’s No.1 platform for their occasions. </p>-->
			
			 </div>
         </div>
         </div>
        </section>
		
		
		
		
		
		
		
		
		
		
		
		
			<section class="section-bg " style="margin-top:5%">
			<div class="container">
			
			<div class="row">
			
		
			
			 <div class="col-lg-12 col-md-12">
			 
			  <h3 class="color_darkgoldenrod text-center" style="margin-bottom:0px">{{ $bestvenue}} </h3>
               <p style="width:100%; text-align:center; margin-bottom:10px">{{ $bestvenue_text}}</p>
			  
			   <div class="row">
			   
			    <!-- 4 hotels started -->
			   
			   
			   	<div  class="carousel"  style="width:100%">
			  <div class="carousel-inner">
			  
			  
			   <div class="carousel-inner">
			  
			   <div class="carousel-item active" style="background:#FFF">
			    <div class="row">
			   <?php
			           $cols = 4;

						$tdCount = 1; // Don't change
						$c = 1;
			   ?>
			   
			       @foreach($hotel_featured as $key=>$value)
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
			   
			                      <div class="col-lg-4 col-md-4">
									<div class="single-room" style="background:#FFF">
									<div class="room-thumb1">
									
								
									
									
                                    <div class="hproduct-img">
								
								<img data-src="{{ asset('uploads/hotels_featured_images/'.$value->featured_image)}}" alt="{{ $value->name }}"  style="height: 250px; width:100%" class="1hrotate_image lazyload bestvenue"  >
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
    font-size: 13px;" >{{ $clickmore }}</a>

											</p> 	
											
											
											
									
											
											
										</div>
									
										
									</div>
									</div>
									</div>
						
						      
			            
						
						
						  <?php
            // Close and open new rows
            if (($key + 1) % $cols === 0 && $key + 1 !== count($hotel_featured)) { ?>
				</div>
                </div>
                <div class="carousel-item " style="background:#FFF">
				 <div class="row">
                <?php }

            // Increment column count
            $tdCount++;

            // Fill with empty columns at the end
            if ($key + 1 === count($hotel_featured) && $tdCount <= $cols) {
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
		       
			   
			   
			   		
				
			   
			   
			   
			   
			   
			   
			   
		       
		       	   <a class="button_image link buttonimage-fade btn_hoimecoursal" href="https://hotelsvenues.com/hotels" style=" font-weight: bold; color: #FFF ! important;background:#000; padding:10px  20px;"> {{ $viewmore }} </a>
			   
	
			  
			 </div>

			 
			  
			</div>
			
			
		</div>
		</section>
	

		<!--modal start-->
	



<!--MoDALK END-->
		
			





	<section class="latest-product section-padding" style="margin-top: 1%;">
            <div class="container-fluid">
                <!-- Section Title -->
                <div class="section-title text-center">
                    
                    <style>
                        .color_darkgoldenrod1 {
    color: #bc9b6a ! important ;
    font-size: 61px ;
    color: darkgoldenrod;
    font-weight: bolder;
    /* border-bottom: 2px solid goldenrod; */
    padding-bottom: 13px;
    /* width: 50%; */
    /*font-family: SloopScriptTwo;*/
   font-family: "Playfair Display", Constantia, "Lucida Bright", Lucidabright, "Lucida Serif", Lucida, "DejaVu Serif", "Bitstream Vera Serif", "Liberation Serif", Georgia, serif;
    /* margin-left: 25%; */
    margin-bottom: 0px ! important;
}
                    </style>
                    
                    <h1 class="color_darkgoldenrod1">{{ $venuebyevent }}</h1>
                </div>
				
				<div class="row">
				
				 <p style="width:100%; text-align:center">{{ $venuebyevent_text }}</p>
				  
				</div>
				
				
				<style>


.rotate_image {
  opacity: 1;
  display: block;
  width: 100%;
  /*height: auto;*/
  height:100%;
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
..product-box{
    height:300px;
}

</style>
            <div class="row" >
				
				 <div class="col-lg-6 col-md-6" style="">
				 <div class="row" style="margin-top:30px">
				 
				 
				  @foreach($event_social as $i=>$value)
                    <div class="col-lg-4 col-md-6 nopadding">
                         <!--Single feature boxes -->
                        <div class="product-box text-center width_95 product_hotelvenue">
						    <div class="product-head" >
							  <a class="white text-white"  href="{{ url('/eventtypes/'.$value->id) }}"> {{ $value->title }} </a>
							</div>
							<a href="{{ url('/eventtypes/'.$value->id) }}">
                             <div class="product-img hotelvenuve_product">
                             
								
								<img data-src="{{ asset('storage/eventTypeImg/'.$value->image)}}" alt="{{ $value->title }}" class="rotate_image hotelvneuve_image lazyload" >
									  <div class="middle">
										<div class="text"> <a style="color:#000" href="{{ url('/eventtypes/'.$value->id) }}">View More</a></div>
									  </div>
  
  
                            </div>
							</a>
                           
                        </div>
                    </div>
					
				  @endforeach

				  
			      </div>
                 </div>
				 
				 
				 <div class="col-lg-6 col-md-6" style="">
				 <div class="row" style="margin-top:30px">
				 
				  @foreach($event_corporate as $i=>$value)
                    <div class="col-lg-4 col-md-6 nopadding">
                         <!--Single feature boxes -->
                        <div class="product-box text-center width_95 product_hotelvenue">
						    <div class="product-head" >
							  <a class="white"  href="{{ url('/eventtypes/'.$value->id) }}"> {{ $value->title }} </a>
							</div>
							<a href="{{ url('/eventtypes/'.$value->id) }}">
                            <div class="product-img hotelvenuve_product">
                             
								
								<img data-src="{{ asset('storage/eventTypeImg/'.$value->image)}}" alt="{{ $value->title }}" class="rotate_image hotelvneuve_image lazyload" >
									  <div class="middle">
										<div class="text"> <a style="color:#000" href="{{ url('/eventtypes/'.$value->id) }}">View More</a></div>
									  </div>
  
  
                            </div>
							</a>
                           
                        </div>
                    </div>
					
				  @endforeach
					</div>
                 </div>
            </div>
				
				
            
				 
                
                </div>
            </div>
        
        </section>



    		
		    <section class="latest-product section-padding">
            <div class="container-fluid">
                <!-- Section Title -->
                <div class="section-title text-center">
                    
                    <h1 class="color_darkgoldenrod">{{ $home_supplierlist }}</h1>
                </div>
				<style>
				    .middle1 {
    transition: .5s ease;
    /* opacity: 0; */
    position: absolute;
 top: 33%;
    left: 53%;
    width:63%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    text-align: center;
    background: #FFF;
    color: #000;
    padding: 3px 20px;
}
				</style>
				
				
				
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
                             
								
								<img data-src="{{ asset('storage/supplierTypeImg/'.$value->image)}}"  alt="{{ $value->title }}" class="rotate_image lazyload" >
									  <div class="middle1">
										<div class="text">
										    	 <a class=""  href="/getsupplierlist/{{ $value->menu_name }}"> {{ $value->title }} 
							        	 </a>
							        	 </div>
							        	 </div>
							        	 <div class="middle">
										<div class="text">
										     <a style="color:#000" href="{{ url('/getsupplierlist/'.$value->menu_name) }}">View More</a></div>
									  </div>
  
  
                            </div>
                           
                        </div>
                    </div>
					
                   @endforeach
                   
                   
                    

					</div>
					
					<div class="section-title text-center mb-4">
                        <a class="" href="{{ url('/supplierList') }}" style=" font-weight: bold; color: #FFF ! important;background:#000; padding:10px  20px; border-radius:10px;"> {{ $viewmore }} </a>
                    </div>
              
             
               
				 
	          
            </div>
           
        </section>
        <!-- Latest Product end -->
	
		
		
  
	</main>
	<!-- Main Wrap end -->
	<!-- Footer Start -->
	
	
	
	
		
		
		
		
		
		
	<section class="counter-up primary-bg hide-mobile" >
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6">
						<div class="counter-box style-two">
							<div class="fact-icon">
								<img data-src="{{asset('front_end/img/icons/07.png')}}" alt="Icon" class="lazyload">
							</div>
							<p class="fact-num"><span class="counter-number">
							
							
							<?php
					
				
				              echo (500+$customer_visit);

							?>
							</span></p>
							<p>{{ $customer_visit_text }}</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="counter-box style-two">
							<div class="fact-icon">
								<img data-src="{{asset('front_end/img/icons/08.png')}}"  alt="Icon" class="lazyload">
							</div>
							<p class="fact-num"><span class="counter-number"><?php echo $no_hotels ?></span></p>
							<p>{{ $no_hotels_text }}</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="counter-box style-two">
							<div class="fact-icon">
								<img data-src="{{asset('front_end/img/icons/09.png')}}" alt="Icon" class="lazyload">
							</div>
							<p class="fact-num"><span class="counter-number"><?php echo $no_venues ?></span></p>
							<p>{{ $no_venues_text}}</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="counter-box style-two">
							<div class="fact-icon">
								<img data-src="{{asset('front_end/img/icons/10.png')}}" alt="Icon" class="lazyload">
							</div>
							<p class="fact-num"><span class="counter-number"><?php echo $no_suppliers ?></span></p>
							<p>{{ $no_suppliers_text }}</p>
						</div>
					</div>
				</div>
			</div>
		</section>



	
	
	<style>
	.input-wrap {
    position: relative;
    margin-bottom: 14px;
}
	</style>
	
		<section class="latest-product section-padding" id="rquote"  style="margin-bottom:50px">
		    
            <div class="container">
                
                <div class="row">
                    
                   <div class="col-md-6 col-12">
    		 
    		 	  <img class="d-block w-100 lazyload" data-src="{{asset('front_end/img/request.jpeg')}}"  style="height:475px; border-radius:15px" alt="First slide">
    									
             
             </div>
    		 
    		       <div class="col-md-6 col-12">
    		   
    		           <div class="contact-form-wrap section-bg">
                        <h2 class="form-title" style="margin-bottom: 15px;">{{ $r_quote }}</h2>
                        
                        
                        
                        <form class="form mt-2" id="enquiry_form" novalidate="novalidate" role="form" method="POST" action="{{ url('sendenquiry') }}" enctype="multipart/form-data">
                    @csrf
                        <!--<form name="quotation" method="POST">-->
                            <div class="row">
                                <div class="col-md-12 col-12">
                                    <div class="input-wrap">
                                        <!--<input type="text"   name="name" required placeholder="Your Full Name" id="name" style="color:#3e3737;  background-color: #efecec9c ! important;">-->
                                        <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6"
                            type="text" id="full_name" placeholder="{{ $r_quote1 }}" name="fullname" required  value="" autocomplete="off" style="color:#3e3737;  background-color: #efecec9c ! important;">
                            <i class="far fa-user-alt"></i>
                         
                                        
                                    </div>
                                </div>
    							
    							<div class="col-md-12 col-12">
                                    <div class="input-wrap">
                                        <input placeholder="Event Date" class="textbox-n"  required value="" name="event_date"  style="color:#888181;  background-color: #efecec9c ! important;" type="date"  >
    
                                       
                                    </div>
                                </div>
    							
    							
    							
    								<div class="col-md-12 col-12">
                                    <div class="input-wrap enquiry">
                       <select name="city" id="city">
    									     <option  class="none" value="" >{{ $r_quote2 }}</option>
    										 @foreach($city as $i=>$value)
                                                        <option value="{{ $value->name }}">
                                                            {{ $value->name }}
                                                        </option>
                                             @endforeach
    									
    									</select>
    									
                                        <i class="far fa-user-alt"></i>
                                    </div>
                                </div>
    							
    							
    							
    							
    							
    							<div class="col-md-12 col-12">
                                    <div class="input-wrap enquiry">
                                       <select name="event_type" id="event_type"  required style="color:#3e3737;  background-color: #efecec9c ! important; text-align:left">
    									     <option value="" >{{ $r_quote3 }}</option>
    										 @foreach($event as $i=>$value)
                                                        <option value="{{ $value->title }}">{{ $value->title }}</option>
                                             @endforeach
    									
    </select>
                                        <i class="far fa-user-alt"></i>
                                    </div>
                                </div>
    							
    							<style>
    							div.enquiry div.nice-select
    							{
    								text-align:left ! important;
    							}
    							</style>
    							
    							
    							
    							
    							
    							
    															<div class="col-md-12 col-12">
                                    <div class="input-wrap enquiry">
                      <select name="guests" id="guests">
    									            <option value="" >{{ $r_quote4 }}</option>
    										
                                                      <?php
    											foreach($guests as  $i=>$value)
    											{
    
    											
    											?>
    											
    											<option   value="<?php echo $i?>"><?php echo $value?></option>
    											
    											<?php
    											}
    											?>
    									
    									</select>
    									
                                        <i class="far fa-user-alt"></i>
                                    </div>
                                </div>
    							
    							
    							
    							
    							
    							
    							
    															<div class="col-md-12 col-12">
                                    <div class="input-wrap enquiry">
                      <select name="budget" id="budget">
    									
    									  <option value="" >{{ $r_quote5 }}</option>
                                                      <?php
    											foreach($budgets as  $i=>$value)
    											{
    
    											
    											?>
    											
    											<option   value="<?php echo $i?>"><?php echo $value?></option>
    											
    											<?php
    											}
    											?>
    										
    									</select>
    									
                                        <i class="far fa-user-alt"></i>
                                    </div>
                                </div>
    							
    							
    							
    							
    							
    							<style>
    							    ::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
                                  color: #88818;
                                  opacity: 1; /* Firefox */
                                }
                                
                                :-ms-input-placeholder { /* Internet Explorer 10-11 */
                                  color: #88818;
                                }
                                
                                ::-ms-input-placeholder { /* Microsoft Edge */
                                  color: #88818;
                                }
                                    							</style>
                                <div class="col-md-12 col-12">
                                    <div class="input-wrap">
                                        <input type="email" placeholder="{{ $r_quote6 }}"   required  name="email" autocomplete="off"  id="email"  style="color:#888181;  background-color: #efecec9c ! important;" >
                            <!--          <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6"-->
                            <!--type="email" id="full_name" placeholder="Full Name" name="fullname" value="" autocomplete="off" style="color:#3e3737;  background-color: #efecec9c ! important;">-->
                            <i class="far fa-envelope"></i>
                       
                   
                                        
                                    </div>
                                </div>
                                <div class="col-md-12 col-12">
                                    <div class="input-wrap">
                                        <input type="text" placeholder="{{ $r_quote7 }}" required  name="mobile"  id="mobile"   autocomplete="off" value="" onkeypress="return MobileNumber(event);"  style="color:#888181;  background-color: #efecec9c ! important;" >
                            <!--            <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6"-->
                            <!--type="number" id="mobile_no" placeholder="Mobile No" name="mobileno" autocomplete="off" value="" onkeypress="return MobileNumber(event);" style="color:#3e3737;  background-color: #efecec9c ! important;">-->
                            
                             <i class="fab fa-wordpress"></i>
                    
                                       
                                    </div>
                                </div>
                              
                                <div class="col-12 text-center">
                                    <button type="button"  onclick="enquiry_form()" class="btn filled-btn">{{ $send }}  <i
                                            class="far fa-long-arrow-right"></i></button>
                                </div>
                            </div>
                        </form>
                      
                    </div>
              
    		   
    		   </div>
    		   
    		 	</div>
		 
		   </div>
		   
        </section>
	

@include('front.layout.footer')


<script>
$(document).ready(function(){

    $(".button_image").toggleClass("buttonimage-fade");
  
});

</script>

<style>


.button_image {
  float: left;
  padding: 10px;
  border-radius: 10px;
}
.buttonimage-fade {
 /* -webkit-transform:rotate(360deg);
  -webkit-transition-duration: 5s;*/
}

.link {
    background: orange;
    color: #FFF;
    text-decoration: none;
}


.carousel-control-prev-icon {
    background-color: #000;
    padding: 30px;

}


.carousel-control-next-icon {
    background-color: #000;
    padding: 30px;

}

</style>





@if(!Auth::guard('web')->user() && @guest)

@if($popup=='')
<script>

$(window).scroll(function(e){ 
  var $el = $('.fixedElement'); 
  
  var pbox=$("#pbox").val();
  
  if ($(this).scrollTop() > 500 ){ 
      
     $(document).ready(function(){
         if(pbox =='')
         {
        $("#myModal").modal('show');
         }
    }); 
  }
  /*else
  {
	  alert('popup  2'); 
  }*/
  
});

</script>
@endif
@endif

<style>
.modal-header {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: start;
    align-items: flex-start;
    -ms-flex-pack: justify;
    background: #997814 ! important;
    color: #FFF;
    justify-content: space-between;
    padding: 1rem 1rem;
    border-bottom: 1px solid #dee2e6;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}

.modal.show .modal-dialog {
    -webkit-transform: none;
    transform: none;
    border: solid #545454 15px  !important;
}

</style>

<script>
    function cityhotels(id)
    {
        window.location.href ="?city="+id;
    }
</script>

<!--<div id="myModal" class="modal fade">-->
<!--    <div class="modal-dialog">-->
<!--        <div class="modal-content">-->
<!--            <div class="modal-header">-->
<!--                <h5 class="modal-title" style="color:#FFF; text-align:center">Login</h5>-->
                <!--<button type="button" class="close"  data-dismiss="modal"   >&times;</button> -->
                
                
<!--                <button type="button"  onclick="closepopup()"    >&times;</button>-->
                
<!--            </div>-->
<!--            <div class="modal-body">-->
<!--                <p>Please login to book the hotels venues.</p>-->
<!--                 <form class="form" role="form" method="POST" action="{{ url('/user/login-user') }}">-->
<!--                                        {{ csrf_field() }}-->
										
<!--                    <div class="form-group">-->
                     
						
<!--						 <input  name="email" class="form-control" type="email" placeholder="Your Email"  required="" oninvalid="this.setCustomValidity('Please Enter Valid Email')"   oninput="setCustomValidity('')" id="email" value="{{ old('email') }}" >-->
											
                   
<!--                             	@if ($errors->has('email'))-->
<!--                                                <span class="help-block">-->
<!--                                                    <strong>{{ $errors->first('email') }}</strong>-->
<!--                                                </span>-->
<!--                                            @endif-->
<!--				   </div>-->
<!--                    <div class="form-group">-->
<!--                         <input  name="password" class="form-control"  type="password" placeholder="Your Password"  required="" oninvalid="this.setCustomValidity('Please Password')"   oninput="setCustomValidity('')" id="email" value="{{ old('password') }}" >-->
<!--									@if ($errors->has('password'))-->
<!--                                                <span class="help-block">-->
<!--                                                    <strong>{{ $errors->first('password') }}</strong>-->
<!--                                                </span>-->
<!--                                            @endif		-->
<!--                    </div>-->
                    
					
<!--					<button type="submit" class="btn filled-btn">Sign In-->
<!--                                                </button>-->
												
<!--												<p>-->
<!--										 <a href="{{ url('/customer/register') }}" > Register </a>-->
<!--										</p>-->
<!--                </form>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->



<!--modal popup start-->


<div id="myModal_quote" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header " style="background-color:white !important;">
                <h5 class="modal-title ">HOTEL VENUE</h5>
                
                <button type="button" class="close" onclick="closepopup()"  data-dismiss="modal">&times;</button>
              
            </div>
            <div class="modal-body">
				<p>Thanks for submit the request quote, Your request quote details sent to hotelsvenus , They contact you soon.</p>

               
            </div>
        </div>
    </div>
</div>  

<!--
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header " style="background-color:white !important;">
                <h5 class="modal-title ">HOTEL VENUE</h5>
                <button type="button" class="close" onclick="closepopup()"  data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
				<p>Book your venue 
And everything you need for your events
From one place at the best prices and benefit from massive discounts and savings according to your budget and your way.</p>

<form class="form mt-2" id="company_form" novalidate="novalidate" role="form" method="POST" action="{{ route('insert-user') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-0">
                        <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6"
                            type="text" id="full_name" placeholder="Full Name" name="fullname" value="" autocomplete="off"><br>
                        <span style="color:red;">@error('fullname'){{$message}}@enderror</span>
                    </div>
                    <div class="form-group mb-0">
                        <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6"
                            type="email" id="email_id" placeholder="Email" name="email" autocomplete="off" value=""><br>
                       <span style="color:red;">@error('email'){{$message}}@enderror</span>
                    </div>
                    <div class="form-group mb-0">
                        <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6"
                            type="text" id="mobile_no" placeholder="Mobile No" name="mobile" autocomplete="off" value="" onkeypress="return MobileNumber(event);"><br>
                       <span style="color:red;">@error('mobileno'){{$message}}@enderror</span>
                    </div>
                     <a href="{{ url('/user/login') }}" > Already Have a Member </a>
                    <div class="form-group text-center">
                        <button type="submit" id="kt_login_signup_submit"
                            class="btn submit_btn  font-weight-bolder font-size-h6 submitButton"  onclick="myFunction()">Submit</button>
                    </div>
                    <style>
                        button#kt_login_signup_submit {
    background: #bc9b6a ! important;
    padding: 3px 15px;
}
                    </style>
                   
                </form>
               
            </div>
        </div>
    </div>
</div>  -->
<script>
    function MobileNumber(event) {
        var regex = new RegExp("^[0-9+]");
        var key = String.fromCharCode(event.charCode ? event.which : event.charCode);
        if (!regex.test(key)) {
            event.preventDefault();
            return false;
        }
    }
    </script>
    <!--ALERT BOX START-->
<script>
function enquiry_form() {
  var name=$('#full_name').val();
  
  var email=$('#email').val();
  
  var mobile=$('#mobile').val();
  if(name=='')
  {
      alert('Please Enter Name');
      $('#full_name').focus();
      
  }
    else if(email=='')
  {
      alert('Please Enter Email');
      $('#email').focus();
      
  }
   else if(mobile=='')
  {
      alert('Please Enter Mobile');
      $('#mobile').focus();
      
  }
  else
  {
      $('#enquiry_form').submit();
  }
  
}
</script>


<!--ALERT BOX END-->
<script>
	
	setTimeout(function() {
    $('#myModal').modal();
}, 10000);
</script>
<!--end-->

<?php

if(	 Session::get('enquiry_mail')=='yes')
{
    ?>
    <script>
	
	setTimeout(function() {
    $('#myModal_quote').modal();
}, 10000);
</script>
    <?php
    Session::put('enquiry_mail','no');
}

?>


