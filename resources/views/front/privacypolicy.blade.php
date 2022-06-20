@include('front.layout.header')

<style>
.help-block strong
{
	color:red;
}
</style>

<main>
		<!-- Breadcrumb section -->
		<section class="breadcrumb-area d-flex align-items-center position-relative bg-img-center"
		style="background-image: url({{asset('front_end/img/bg/main_banner.jpg')}});">
			<div class="container">
				<div class="breadcrumb-content text-center">
					<h1>PRIVACY POLICY</h1>
					<ul class="list-inline">
						<li><a href="{{ URL::to('/') }}">Home</a></li>
						<li><i class="far fa-angle-double-right"></i></li>
						<li>PRIVACY POLICY</li>
					</ul>
				</div>
			</div>
			
		</section>
		
		<!-- Breadcrumb section End-->
		<!-- About Welcome Area -->
		<section class="about-site section-padding">
		
				<div class="container">
	
				<!-- Section Title Start -->
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<span class="title-top with-border">PRIVACY POLICY</span>
						
						</div>
					</div>
					<div class="col-md-12">
						<p class="mb-30">
							Our Privacy Policy governs the privacy terms of our website, and the tools we provide you (the "Website" or the "Service"). Any capitalized terms not defined in our Privacy Policy, have the meaning as specified in our Terms of Use accessible at www.hotelavenues.com  


						</p>
						
					</div>
				</div>
				<!-- Section Title End -->
				
				
				
				<!-- Section Title Start -->
				<div class="row ">
					<div class="col-md-12">
						<div class="section-title">
							<span class="title-top with-border">Your Privacy</span>
						
						</div>
					</div>
					<div class="col-md-12">
						<p class="mb-30">
						Our Website follows all legal requirements to protect your privacy. Our Privacy Policy is a legal statement that explains how we may collect information from you, how we may share your information, and how you can limit our sharing of your information. You will see terms in our Privacy Policy that are capitalized. These terms have meanings as described in the Definitions section below.</p>
						
					</div>
				</div>
				<!-- Section Title End -->
				
				
				
				<!-- Section Title Start -->
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<span class="title-top with-border">Definitions</span>
						
						</div>
					</div>
					<div class="col-md-12">
					<ul>
					  <li>
					  •	Personal Data: Personal Data means data about a living individual who can be identified from those data (or from those and other information either in our possession or likely to come into our possession).
					  </li>
					  
					  
					 <li> •	Usage Data: Usage Data is data collected automatically either generated by the use of the Service or from the Service infrastructure itself (for example, the duration of a page visit).</li>
					 <li>•	Cookies: Cookies are small pieces of data stored on a User's device.</li>
					 <li>•	Data Controller: Data Controller means a natural or legal person who (either alone or jointly or in common with other persons) determines the purposes for which and the manner in which any personal data are, or are to be, processed. For the purpose of this Privacy Policy, we are a Data Controller of your data.</li>
					 <li>•	Data Processors (or Service Providers): Data Processor (or Service Provider) means any natural or legal person who processes the data on behalf of the Data Controller. We may use the services of various Service Providers in order to process your data more effectively.</li>
                    <li>•	Data Subject: Data Subject is any living individual who is the subject of Personal Data.</li>
                    <li>•	User: The User is the individual using our Service. The User corresponds to the Data Subject, who is the subject of Personal Data.</li>

					</ul>
						</div>
				</div>
				<!-- Section Title End -->
				
				
				
				
			
			
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