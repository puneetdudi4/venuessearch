@include('front.layout.header')
<style>
.confirmed
{
	background:red ! important;
	color:white ! important;
}

.waiting
{
	background:yellow ! important;
	color:black ! important;
}
</style>
	<main>
		<!-- Breadcrumb section -->
			<section class="breadcrumb-area d-flex align-items-center position-relative bg-img-center"
			style="background-image: url({{ asset('uploads/hotels_featured_images/'.$VenuesDetails->feature_image )}}" alt="{{ $VenuesDetails->title }});">
			<div class="container">
				<div class="breadcrumb-content text-center">
					<h1><a href="{{ url('venuedetails/'.$VenuesDetails->id)}}">{{ $VenuesDetails->title }}</a></h1>
					<ul class="list-inline">
						<li><a href="{{ URL::to('/') }}">Home</a></li>
						<li><i class="far fa-angle-double-right"></i></li>
						<li><a href="{{ url('venuedetails/'.$VenuesDetails->id)}}"> >> {{ $VenuesDetails->title }}</a></li>
					</ul>
				</div>
			</div>
			
		</section>
		<!-- Breadcrumb section End-->
		<section class="room-details-wrapper section-padding">
			<div class="container">
				<div class="row">
				  <div class="col-lg-12">
				     <div id='calendar'></div>

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
				   foreach ($hotel_featured as $hotels)
				   {
					   
					   $description=strip_tags($hotels->description);
				       $description=substr($description,0,50);
					   ?>
					<div class="col-lg-4 col-md-6">
						<!-- Single Room -->
						<div class="single-room">
							<div class="room-thumb">
									<a href="{{ url('/hoteldetails/'.$hotels->id) }}">
                  			 <img  src="{{ asset('uploads/hotels_featured_images/'.$hotels->featured_image)}}" alt="{{ $hotels->name }}" width="100%" style="height:250px">
											 
									 </a>
							</div>
							<div class="room-desc">
								
								<h4><a href="{{ url('/hoteldetails/'.$hotels->id) }}">{{ $hotels->name }}</a></h4>
								<p>
									<?php echo $description ?>
								</p>
								<ul class="room-info list-inline">
											<li><i class="far fa-star"></i> {{ $hotels->grade }} Star</li>
								</ul>
								
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




<link href='https://cdn.jsdelivr.net/npm/fullcalendar@3.10.2/dist/fullcalendar.min.css' rel='stylesheet' />
<link href='https://cdn.jsdelivr.net/npm/fullcalendar@3.10.2/dist/fullcalendar.print.css' rel='stylesheet' media='print' />



<script src='https://cdn.jsdelivr.net/npm/moment@2.24.0/min/moment.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/jquery@3.5.0/dist/jquery.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@3.10.2/dist/fullcalendar.min.js'></script>








<style>

  html, body {
    margin: 0;
    padding: 0;
    font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
    font-size: 14px;
  }

  #calendar {
    max-width: 900px;
    margin: 40px auto;
  }

</style>


  <link href='https://use.fontawesome.com/releases/v5.0.6/css/all.css' rel='stylesheet'>
<link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' rel='stylesheet' />
<script>
   var vid=<?php echo $venue_id; ?>;
  $(function() {

    $('#calendar').fullCalendar({
      themeSystem: 'bootstrap4',
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay,listMonth'
      },
	    dayClick: function(date, jsEvent, view) {

        var date = date.format();
		
		var url ='<?php echo  url('venuedetails/'.$venue_id) ?>';
		
		url=url+'?date='+date;
		
		window.location=url;
		
		
		
		
		  //$.post('{{ route('merchant/hotel/booking_ajax_update') }}', data, function( result ) {
                   
       // location.reload(url);

   

    // change the day's background color just for fun
    $(this).css('background-color', 'green');

  },
	  displayEventEnd: {
                    month: true,
                    basicWeek: true,
                    "default": true
                },
      weekNumbers: true,
      eventLimit: true, // allow "more" link when too many events
      events:  [
                    @foreach($bookings as $booking)
                    {
						
						@if ($booking->is_booked==1)
							    title: 'Confirmed',
                                className: 'confirmed',
						@else
	                             className: 'waiting',
							     title: 'Waiting',
                        @endif
						
      start: '{{ $booking->start_time }}',
      end: '{{ $booking->end_time }}'
						
                    },
                    @endforeach
                ]
    });
   
  });

</script>




