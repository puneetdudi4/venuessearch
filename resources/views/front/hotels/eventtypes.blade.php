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
						<li>{{ $eventtype->title }}</li>
					</ul>
				</div>
			</div>
			
		</section>
		<!-- Breadcrumb section End-->
		<!-- Latest Food Section -->
		<section class="latest-food section-padding">
			<div class="container">
				<div class="section-title text-center">
					
					<h1 class="color_darkgoldenrod">{{ $eventtype->title }}</h1>
				</div>
				<!-- Foods Wrap -->
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="single-latest-food">
						
						
						   	<div class="text-center">
								<h3 class="color_darkgoldenrod">
								<a href="{{ url('/eventtypes/indoor/'.$eventtype->id) }}" style="color:#000">In Door</h3>
							
							</div>
								<a href="{{ url('/eventtypes/indoor/'.$eventtype->id) }}">
							<div class="product-img ">
						
								<img src="{{ asset('storage/eventTypeImg/'.$eventtype->indoor_image)}}" alt=""  class="rotate_image">
								
								<div class="middle">
										<div class="text"> <a style="color:#000" href="{{ url('/eventtypes/indoor/'.$eventtype->id) }}">More Details</a></div>
									  </div>
  
								
							</div>
							</a>
						
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6">
						<div class="single-latest-food">
						
						  <div class="text-center">
								<h3 class="color_darkgoldenrod">
								<a href="{{ url('/eventtypes/outdoor/'.$eventtype->id) }}" style="color:#000">
								Out Door
								</a>
								</h3>
							
							</div>
							<a href="{{ url('/eventtypes/outdoor/'.$eventtype->id) }}">
							<div class="product-img ">
							
								<img src="{{ asset('storage/eventTypeImg/'.$eventtype->outdoor_image)}}" alt="Out Door">
								
								<div class="middle">
										<div class="text"> <a style="color:#000" href="{{ url('/eventtypes/outdoor/'.$eventtype->id) }}">More Details</a></div>
									  </div>
  
						
							</div>
								</a>	
							
						</div>
					</div>
					
			</div>
			</div>
		</section>
	
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
	<!-- Footer Start -->
	
	
	
					<style>



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
	
	
@include('front.layout.footer')



