@include('front.layout.header')

<style>
.help-block strong
{
	color:red;
}
section.bg_black 
{
	background:#000 ! important;
}

p 
{
	color:#FFF ! important;
}

.section-title h1 {
    font-size: 45px;
    line-height: 55px;
    margin-bottom: 30px;
    color:#FFF ! important;
}

.single-feature-box h4
{
	color:#FFF ! important;
}
.mission-box h4
{
	color:#FFF ! important;
}

.section-title span.title-top.with-border::before
{
	background:none;
}

</style>

<main>
		<!-- Breadcrumb section -->
		<section class="breadcrumb-area d-flex align-items-center position-relative bg-img-center"
		style="background-image: url({{asset('front_end/img/bg/main_banner.jpg')}});">
			<div class="container">
				<div class="breadcrumb-content text-center">
					<h1>About Us</h1>
					<ul class="list-inline">
						<li><a href="{{ URL::to('/') }}">Home</a></li>
						<li><i class="far fa-angle-double-right"></i></li>
						<li>About us</li>
					</ul>
				</div>
			</div>
			
		</section>
		<!-- Breadcrumb section End-->
		<!-- About Welcome Area -->
		<section class="bg_black section-padding">
			<div class="container">
				<!-- Section Title Start -->
				<div class="row">
					<div class="col-md-6">
						<div class="section-title text-right">
							<span class="title-top with-border">About Us</span>
							<h1>Welcome To HotelsVenus</h1>
						</div>
					</div>
					<div class="col-md-6">
						<p class="mb-30">
							Throughout the years, Hotels Venues team have built connections with events managers and 
							hotel venues to providing comprehensive platform to search and book for venues for special occasions. 
							HotelsVenues.com is a unique platform that makes thousands of venues in UAE a click away, thus, 
							delivering business owners and customers satisfaction in minimal time consumption,
							and avoids venues over booking or cancellation. Our platform permits its users to search and reserve 
							their most suitable venue and search for related supplier at a glance according to their desired district, 
							guest numbers and budget per guest, venue start rating, preferred schedule, and Budget. 
							HotelsVenues.com is committed to providing venues and caterings at competitive prices, making it consumer’s No.1 platform for their occasions.


						</p>
						
					</div>
				</div>
				<!-- Section Title End -->
				
				
			
			
			</div>
		</section>
		<!-- About Welcome Area End -->
		<section class="section-padding bg_black">
			<div class="container">
				<div class="section-title text-center">
					
					<h1>How It Works</h1>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="mission-box">
							<div class="mission-bg bg-img-center" style="background-image: url({{asset('front_end/img/about/02.jpg')}});"></div>
							<div class="mission-desc">
								<h4>Event Brief</h4>
								<p>Provide us with your event brief by submitting an enquiry through the website outlining briefly what you are looking for. You can also email, or call us directly.</p>
								
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="mission-box">
							<div class="mission-bg bg-img-center" style="background-image: url({{asset('front_end/img/about/03.jpg')}});"></div>
							<div class="mission-desc">
								<h4>Venue Shortlist</h4>
								<p>Our team of experts respond with an initial venue list for you to review.
								We then assist you with cost analysis, information gathering and decision making.</p>
								
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 mx-auto">
						<div class="mission-box">
							<div class="mission-bg bg-img-center" style="background-image: url({{asset('front_end/img/about/04.jpg')}});"></div>
							<div class="mission-desc">
								<h4>Selection & Booking</h4>
								<p>We help you to negotiate rates and once you're entirely happy with the selection, we'll help confirm the best venue for your event. After your event, we'll thank you with one of our client rewards.</p>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Feature Section Start -->
		<section class=" section-padding bg_black">
			<div class="container">
				<!-- Section Title -->
				<div class="section-title text-center">
					<span class="title-top">Popular Features</span>
					<h1>Explore Our Hotels Benefits <br> Why Take Our Services?</h1>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<!-- Single feature boxes -->
						<div class="single-feature-box text-center">
							<div class="feature-icon">
								<img src="{{asset('front_end/img/icons/icon.png')}}" alt="Icon">
							</div>
							<h4>Customer Register</h4>
							<p>Has any right to find fault with man who chooses to enjoy a pleasure that has no annoying
								conseque</p>
							<a href="#" class="read-more">raed more <i class="far fa-long-arrow-right"></i></a>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<!-- Single feature boxes -->
						<div class="single-feature-box text-center">
							<div class="feature-icon">
								<img src="{{asset('front_end/img/icons/icon-2.png')}}" alt="Icon">
							</div>
							<h4>Hotels Register</h4>
							<p>Has any right to find fault with man who chooses to enjoy a pleasure that has no annoying
								conseque</p>
							<a href="#" class="read-more">raed more <i class="far fa-long-arrow-right"></i></a>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 mx-auto">
						<!-- Single feature boxes -->
						<div class="single-feature-box text-center">
							<div class="feature-icon">
								<img src="{{asset('front_end/img/icons/icon-3.png')}}" alt="Icon">
							</div>
							<h4>Supplier Register</h4>
							<p>Has any right to find fault with man who chooses to enjoy a pleasure that has no annoying
								conseque</p>
							<a href="#" class="read-more">raed more <i class="far fa-long-arrow-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Feature section end -->

		
		
		
		
		
		
		
		
		
		<section class="wcu-section bg_black " style="background:#ccc; margin1:30px 0px; padding:60px 30px">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6">
						<!-- Section Title -->
						<div class="section-title">
							
							<h1 class="nopadding" style="color:darkgoldenrod"> <i class="far fa-check-square"></i> Qualified venues</h1>
							<span class="title-top" style="color:#000; margin-left:20px">We shortlist, so you don't have to</span>
						</div>
						<p>
						We apply a rigorous selection process to all the venues that we recommend and only venues that successfully meet our criteria are selected.
						</p>
					
					
					</div>
					<div class="col-lg-6">
						<div class="feature-accordion-img text-right">
							<img src="{{asset('front_end/img/about/a1.jpg')}}" alt="Image">
						
						</div>
					</div>
				</div>
			</div>
		</section>
		
		
		
				<section class="wcu-section bg_black" style="background:#FFF; margin1:30px 0px; padding:60px 30px">
			<div class="container">
				<div class="row align-items-center">
				
				<div class="col-lg-6">
						<div class="feature-accordion-img text-right">
							<img src="{{asset('front_end/img/about/a2.jpg')}}" alt="Image">
						
						</div>
					</div>
					
					<div class="col-lg-6">
						<!-- Section Title -->
						<div class="section-title">
							
							<h1 class="nopadding" style="color:darkgoldenrod"> <i class="far fa-check-square"></i> Free, fast and simple</h1>
							<span class="title-top" style="color:#000; margin-left:20px">Venue and supplier search made easy
                           </span>
						</div>
						<p>
						Our team of venue experts provide a complimentary service dedicated to finding the best venue and suppliers for your specific event.
						</p>
					
					
					</div>
					
				</div>
			</div>
		</section>
		
		
		
		
				<section class="wcu-section bg_black" style="background:#ccc; margin1:30px 0px; padding:60px 30px">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6">
						<!-- Section Title -->
						<div class="section-title">
							
							<h1 class="nopadding" style="color:darkgoldenrod"> <i class="far fa-check-square"></i> Booking incentives</h1>
							<span class="title-top" style="color:#000; margin-left:20px">Rewards for every event you book</span>
						</div>
						<p>
						Whether you contact the venue directly or through our team, you'll get the same price and often we'll negotiate better rates. Additionally, when you book the venues we recommend, you'll also qualify for our Collect Champagne program.
						</p>
					
					
					</div>
					<div class="col-lg-6">
						<div class="feature-accordion-img text-right">
							<img src="{{asset('front_end/img/about/a3.jpg')}}" alt="Image">
						
						</div>
					</div>
				</div>
			</div>
		</section>
		
		
		
		
		
		
		
		
		
		<section class="wcu-section bg_black" style="background:#ccc; margin1:30px 0px; padding:60px 30px">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6">
						<!-- Section Title -->
						<div class="section-title">
							
							<h1 class="nopadding" style="color:darkgoldenrod"> <i class="far fa-check-square"></i> Qualified venues</h1>
							<span class="title-top" style="color:#000; margin-left:20px">We shortlist, so you don't have to</span>
						</div>
						<p>
						We apply a rigorous selection process to all the venues that we recommend and only venues that successfully meet our criteria are selected.
						</p>
					
					
					</div>
					<div class="col-lg-6">
						<div class="feature-accordion-img text-right">
							<img src="{{asset('front_end/img/about/a4.jpg')}}" alt="Image">
						
						</div>
					</div>
				</div>
			</div>
		</section>
		
		
		
				<section class="wcu-section bg_black" style="background:#FFF; margin1:30px 0px; padding:60px 30px">
			<div class="container">
				<div class="row align-items-center">
				
				<div class="col-lg-6">
						<div class="feature-accordion-img text-right">
							<img src="{{asset('front_end/img/about/a5.jpg')}}" alt="Image">
						
						</div>
					</div>
					
					<div class="col-lg-6">
						<!-- Section Title -->
						<div class="section-title">
							
							<h1 class="nopadding" style="color:darkgoldenrod"> <i class="far fa-check-square"></i> Free, fast and simple</h1>
							<span class="title-top" style="color:#000; margin-left:20px">Venue and supplier search made easy
                           </span>
						</div>
						<p>
						Our team of venue experts provide a complimentary service dedicated to finding the best venue and suppliers for your specific event.
						</p>
					
					
					</div>
					
				</div>
			</div>
		</section>
		
		
		
		
				<section class="wcu-section bg_black" style="background:#ccc; margin1:30px 0px; padding:60px 30px">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6">
						<!-- Section Title -->
						<div class="section-title">
							
							<h1 class="nopadding" style="color:darkgoldenrod"> <i class="far fa-check-square"></i> Booking incentives</h1>
							<span class="title-top" style="color:#000; margin-left:20px">Rewards for every event you book</span>
						</div>
						<p>
						Whether you contact the venue directly or through our team, you'll get the same price and often we'll negotiate better rates. Additionally, when you book the venues we recommend, you'll also qualify for our Collect Champagne program.
						</p>
					
					
					</div>
					<div class="col-lg-6">
						<div class="feature-accordion-img text-right">
							<img src="{{asset('front_end/img/about/a6.jpg')}}" alt="Image">
						
						</div>
					</div>
				</div>
			</div>
		</section>
		
		
		
		
		
	
	</main>














	</main>
	<!-- Main Wrap end -->
	<!-- Footer Start -->

  <script>
  function user_types(value)
  {
	  if(value =='Indiviual')
	  {
		  $('#company_name').hide();
		  $('#company_email').hide();
		 
	  }
	  else
	  {
		   $('#company_name').show();
		  $('#company_email').show();
	  }
	  
	  
  }
  
  </script>
  <style>
  #company_name , #company_email
  {
	  display:none;
  }
  </style>
  
@include('front.layout.footer')