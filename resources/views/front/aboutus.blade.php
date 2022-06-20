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
<?php
if(Session::get('lang')=='arabic')
{
$aboutus='من نحن';
$home ='الصفحة الرئيسية';	
$welcome='اهلآ و سهلآ بكم في هوتلز ڨنيوز';
$about1='على مر السنين، قام فريق هوتلز ڨنيوز بالتشاور والتعاون مع مدراء قاعات الفنادق والمناسبات لبناء منصة الكترونية شاملة لحجز القاعات لجميع انواع المناسبات الإجتماعية والتجارية ، hotelsvenues.com  هي منصة فريدة من نوعها تجعل الاف القاعات الخارجية والداخلية في الامارات العربية المتحدة على بعد نقرة واحدة وبين يدين الاف المستخدمين الذين يودون حجز اماكن و قاعات لمناسباتهم بأقل استهلاك للوقت و تجنب الأماكن والقاعات المحجوزة مسبقا، كما أن منصتنا تسمح لمستخدميها بالبحث عن أفضل الأماكن المناسبة لهم و حجزها و اختيار الموردين ذات الصلة بالمناسبة من خلال جولة سريعة على منصتنا في صفحة فئة الموردين وفقا للمنطقة التي يرغبون فيها، كما يمكنهم تحديد عدد المدعوين و ميزانيتهم لكل شخص مدعو للمناسبة و تحديد تاريخ المناسبة، و وفقا لذلك إن منصة  hotelsvenues.com تلتزم بتوفير الأماكن والقاعات والمطاعم بأسعار تنافسية مما يجعل منها المنصة الأولى للمستهلكبن في مناسباتهم أي كانت.';
$about2='خطوات العمل';	
$about3='تفاصيل المناسبة ق';
$about4='م بتزويدنابتفاصيل المناسبةالخاصبكعنطريقإرسالطلبمنخلالالمنصةالإلكترونيةيوضحبإختصارماتبحثعنه. يمكنكأيضًاإرسالبريدإلكترونيأوالاتصالبنامباشرة.';
$about5='القاعات والأماكن المناسبة';
$about6='ستجيبفريقالخبراءلدينابالبحث عن قائمةأوليةبالأماكن والقاعات التي تناسبك. ثمنساعدكفيدراسةالتكلفةوجمعالمعلوماتواتخاذالقرار.';
$about7='الاختياروالحجز';
$about8='نحننساعدكعلىالتفاوضبشأنالأسعاروبمجردأنتكونراضياتمامًابالاختيار،سنساعدكفيتأكيدحجزك بأفضلمكانلمناسبتك.وبعدانتهاء المناسبة،سوفنتشكركبأحدمكافآتعملائنا المميزين.
';
$about9='الميزات الشعبية';

$about10='اكتشف مزايا فنادقنا';
$about11='لماذا تأخذ خدماتنا؟';

$about12='سجل العميل';
$about13='تسجيل الفنادق';
$about14='سجل المورد';
$about15='له أي حق في العثور على خطأ مع الرجل الذي يختار الاستمتاع بسرور ليس له تأثير مزعج';

$about16='ريد أكثر';


$aboutus1='أماكن مؤهلة';
$aboutus2='نحن نطبق عملية اختيار صارمة على جميع الأماكن التي نوصي بها ولا يتم اختيار سوى الأماكن التي تفي بمعاييرنا بنجاح.';
$aboutus3='مجاني وسريع وبسيط';
$aboutus4='يقدم فريق خبراء المكان لدينا خدمة مجانية مكرسة للعثور على أفضل مكان وموردين لحدثك المحدد.';
$aboutus5='حوافز الحجز';
$aboutus6="سواء اتصلت بالمكان مباشرة أو من خلال فريقنا ، ستحصل على نفس السعر وغالبًا ما نتفاوض بشأن أسعار أفضل. بالإضافة إلى ذلك ، عندما تحجز الأماكن التي نوصي بها ، فسوف تكون مؤهلاً أيضًا لبرنامج Collect Champagne الخاص بنا.";




}
else
{
$aboutus='About Us';
$home ='Home';	
$welcome='Welcome To HotelsVenus';
$about1='	Throughout the years, Hotels Venues team have built connections with events managers and 
							hotel venues to providing comprehensive platform to search and book for venues for special occasions. 
							HotelsVenues.com is a unique platform that makes thousands of venues in UAE a click away, thus, 
							delivering business owners and customers satisfaction in minimal time consumption,
							and avoids venues over booking or cancellation. Our platform permits its users to search and reserve 
							their most suitable venue and search for related supplier at a glance according to their desired district, 
							guest numbers and budget per guest, venue start rating, preferred schedule, and Budget. 
							HotelsVenues.com is committed to providing venues and caterings at competitive prices, making it consumer’s No.1 platform for their occasions.
';

$about2='How It Works';

$about3='Event Brief';
$about4='Provide us with your event brief by submitting an enquiry through the website outlining briefly what you are looking for. You can also email, or call us directly.';
$about5='Venue Shortlist';
$about6='Our team of experts respond with an initial venue list for you to review. We then assist you with cost analysis, information gathering and decision making.
';
$about7='Selection & Booking';
$about8="We help you to negotiate rates and once you're entirely happy with the selection, we'll help confirm the best venue for your event. After your event, we'll thank you with one of our client rewards.
";

$about9='Popular Features';
/* need to add */

$about10='Explore Our Hotels Benefits';
$about11='Why Take Our Services?';

$about12='Customer Register';

$about13='Hotels Register';
$about14='Supplier Register';
$about15='Has any right to find fault with man who chooses to enjoy a pleasure that has no annoying conseque';
$about16='RAED MORE';

$aboutus1='Qualified venues';
$aboutus2='We apply a rigorous selection process to all the venues that we recommend and only venues that successfully meet our criteria are selected.';
$aboutus3='Free, fast and simple';
$aboutus4='Our team of venue experts provide a complimentary service dedicated to finding the best venue and suppliers for your specific event.';
$aboutus5='Booking incentives';
$aboutus6="Whether you contact the venue directly or through our team, you'll get the same price and often we'll negotiate better rates. Additionally, when you book the venues we recommend, you'll also qualify for our Collect Champagne program.";





}

?>		   
<main>
		<!-- Breadcrumb section -->
		<section class="breadcrumb-area d-flex align-items-center position-relative bg-img-center"
		style="background-image: url({{asset('front_end/img/bg/main_banner.jpg')}});">
			<div class="container">
				<div class="breadcrumb-content text-center">
					<h1>{{ $aboutus }} </h1>
					<ul class="list-inline">
						<li><a href="{{ URL::to('/') }}">{{ $home }}</a></li>
						<li><i class="far fa-angle-double-right"></i></li>
						<li>{{ $aboutus }}</li>
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
							<span class="title-top with-border">{{ $aboutus }}</span>
							<h1>{{ $welcome }}</h1>
						</div>
					</div>
					<div class="col-md-6">
						<p class="mb-30">
						{{ $about1 }}

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
					
					<h1>{{ $about2}}</h1>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="mission-box">
							<div class="mission-bg bg-img-center" style="background-image: url({{asset('front_end/img/about/02.jpg')}});"></div>
							<div class="mission-desc">
								<h4>{{ $about3}}</h4>
								<p>{{ $about4}}</p>
								
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="mission-box">
							<div class="mission-bg bg-img-center" style="background-image: url({{asset('front_end/img/about/03.jpg')}});"></div>
							<div class="mission-desc">
								<h4>{{ $about5}}</h4>
								<p>{{ $about6}}</p>
								
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 mx-auto">
						<div class="mission-box">
							<div class="mission-bg bg-img-center" style="background-image: url({{asset('front_end/img/about/04.jpg')}});"></div>
							<div class="mission-desc">
								<h4>{{ $about7}}</h4>
								<p>{{ $about8}}</p>
								
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
					<span class="title-top">{{ $about9 }} </span>
					<h1>{{ $about10 }} <br> {{$about11}}</h1>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<!-- Single feature boxes -->
						<div class="single-feature-box text-center">
							<div class="feature-icon">
								<img src="{{asset('front_end/img/icons/icon.png')}}" alt="Icon">
							</div>
							<h4>{{ $about12 }} </h4>
							<p>{{ $about15 }}</p>
							<a href="#" class="read-more">{{ $about16 }} <i class="far fa-long-arrow-right"></i></a>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<!-- Single feature boxes -->
						<div class="single-feature-box text-center">
							<div class="feature-icon">
								<img src="{{asset('front_end/img/icons/icon-2.png')}}" alt="Icon">
							</div>
							<h4>{{ $about13 }}</h4>
							<p>{{ $about15 }}</p>
							<a href="#" class="read-more">{{ $about16 }} <i class="far fa-long-arrow-right"></i></a>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 mx-auto">
						<!-- Single feature boxes -->
						<div class="single-feature-box text-center">
							<div class="feature-icon">
								<img src="{{asset('front_end/img/icons/icon-3.png')}}" alt="Icon">
							</div>
							<h4>{{ $about14 }}</h4>
							<p>{{ $about15 }}</p>
							<a href="#" class="read-more">{{ $about16 }} <i class="far fa-long-arrow-right"></i></a>
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
							
							<h1 class="nopadding" style="color:darkgoldenrod"> <i class="far fa-check-square"></i>{{ $aboutus1}}</h1>
							<span class="title-top" style="color:#000; margin-left:20px">{{ $aboutus1}}</span>
						</div>
						<p>
						{{ $aboutus2}}</p>
					
					
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
							
							<h1 class="nopadding" style="color:darkgoldenrod"> <i class="far fa-check-square"></i> {{ $aboutus3}}</h1>
							<span class="title-top" style="color:#000; margin-left:20px">{{ $aboutus3}}
                           </span>
						</div>
						<p>
						{{ $aboutus4}}</p>
					
					
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
							
							<h1 class="nopadding" style="color:darkgoldenrod"> <i class="far fa-check-square"></i> {{ $aboutus5}}</h1>
							<span class="title-top" style="color:#000; margin-left:20px">{{ $aboutus5}}</span>
						</div>
						<p>
						{{ $aboutus6}}
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
							
							<h1 class="nopadding" style="color:darkgoldenrod"> <i class="far fa-check-square"></i> {{ $aboutus1}}</h1>
							<span class="title-top" style="color:#000; margin-left:20px">{{ $aboutus1}}</span>
						</div>
						<p>
						{{ $aboutus2}}</p>
					
					
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
							
							<h1 class="nopadding" style="color:darkgoldenrod"> <i class="far fa-check-square"></i>{{ $aboutus3}}</h1>
							<span class="title-top" style="color:#000; margin-left:20px">{{ $aboutus3}}
                           </span>
						</div>
						<p>
						{{ $aboutus4}}</p>
					
					
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
							
							<h1 class="nopadding" style="color:darkgoldenrod"> <i class="far fa-check-square"></i> {{ $aboutus5}}</h1>
							<span class="title-top" style="color:#000; margin-left:20px">{{ $aboutus5}}</span>
						</div>
						<p>
						{{ $aboutus6}}
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