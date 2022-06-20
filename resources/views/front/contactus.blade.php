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
	color:#888181 ! important ;
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

.input-wrap {
    position: relative;
    padding: 10px 0px;
}

.contact-info-section .contact-info-box {
    padding: 10px 25px 5px 95px;
}

.contact-info-section {
    padding-top: 25px ! important;
    padding-bottom: 45px;
}
</style>

<main>
		<!-- Breadcrumb section -->
		<section class="breadcrumb-area d-flex align-items-center position-relative bg-img-center"
		style="background-image: url({{asset('front_end/img/bg/breadcrumb-02.jpg')}});">
			<div class="container">
				<div class="breadcrumb-content text-center">
					<h1>Contact Us</h1>
					<ul class="list-inline">
						<li><a href="{{ URL::to('/') }}">Home</a></li>
						<li><i class="far fa-angle-double-right"></i></li>
						<li>Contact us</li>
					</ul>
				</div>
			</div>
			
		</section>
		
		
		
	<section class="contact-info-section">
            <div class="container">
          <div class="row">
                            <div class="col-md-6 col-12">
                <!-- Section Title End -->
                <div class="contact-info-boxes">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="contact-info-box">
                                <div class="contact-icon">
                                    <i class="far fa-map-marker-alt"></i>
                                </div>
                                <h4>Address</h4>
                                <p>Silver Tower, Business Bay,</p>
                                <p> Dubai, UAE</p>
								
								

                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="contact-info-box">
                                <div class="contact-icon">
                                    <i class="far fa-envelope-open"></i>
                                </div>
                                <h4>Gmail</h4>
                                <p><a href="#">info@hotelsvenue.com</a></p>
                               
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 mx-auto">
                            <div class="contact-info-box">
                                <div class="contact-icon">
                                    <i class="far fa-phone"></i>
                                </div>
                                <h4>Phone Us</h4>
                                <p>	+971524055060</p>
                                <!--<p>+971 4 435 7505</p>-->
                               
                            </div>
                        </div>
                    </div>
                </div>
          
         </div>
		 
		   <div class="col-md-6 col-12">
		   
		           <div class="contact-form-wrap section-bg">
                    <h2 class="form-title">Send A Message</h2>
                    <!--<form>-->
                    <form class="form" id="company_form" novalidate="novalidate" role="form" method="POST" action="{{ route('insert-user') }}" enctype="multipart/form-data">
                    @csrf
                        <div class="row">
                            <div class="col-md-12 col-12">
                                <div class="input-wrap">
                                    <input type="text" placeholder="Your Full Name" id="name">
                                    <i class="far fa-user-alt"></i>
                                </div>
                            </div>
                            <div class="col-md-12 col-12">
                                <div class="input-wrap">
                                    <input type="text" placeholder="Your Email" id="email">
                                    <i class="far fa-envelope"></i>
                                </div>
                            </div>
                            <div class="col-md-12 col-12">
                                <div class="input-wrap">
                                    <input type="text" placeholder="Your Mobile" id="website">
                                    <i class="fab fa-wordpress"></i>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="input-wrap text-area">
                                    <textarea placeholder="Write Message"></textarea>
                                    <i class="far fa-pencil"></i>
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <button type="submit" class="btn filled-btn">Send Message <i
                                        class="far fa-long-arrow-right"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
          
		   
		   </div>
		   
		   
		   
		 </div>

		  </div>
        </section>
		
		
		 <section class="contact-map" id="contactMap1">
		 
		 <div class="container">
          <div class="row">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3610.544824176435!2d55.26204584931689!3d25.184842838305716!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f6920bc7624c3%3A0x7c78d4a33ef3259f!2sLiali%20Events!5e0!3m2!1sen!2sin!4v1629712562696!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> 
		</div>
		</div>
		  </section>
        <!-- Map End -->
        <!-- Contact Form -->
       
		
		
	
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