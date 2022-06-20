<!-- Footer Start -->
	<footer>
		<div class="container">
			<div class="footer-top">
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="widget footer-widget">
							<div class="footer-logo">
								<img src="{{asset('front_end/img/logo.png')}}" alt="Logo">
								

							</div>
							
							<ul class="social-icons">
								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-instagram"></i></a></li>
								
							</ul>
							
						
							
							
						</div>
					</div>
					
						<div class="col-lg-2 col-md-6">
						<div class="widget footer-widget">
							<h4 class="widget-title" style="color:#888181 ">Menu</h4>
							<ul class="nav-widget clearfix">
							<li><a href="{{ url('/') }}">Home</a></li>
							<li><a href="{{ url('/hotels') }}">Hotel List</a></li>
							<li><a href="#">Supplier List</a></li>
							<li><a href="#">Social</a></li>
							<li><a href="#">Corporate</a></li>					
								
							</ul>
						</div>
					</div>
					
					
					<div class="col-lg-3 col-md-6">
						<div class="widget footer-widget">
							<h4 class="widget-title" style="color:#888181 ">Supplier List</h4>
							<ul class="nav-widget clearfix">
							<?php
							$suppliermenus = \App\SupplierType::getAllApprovedSupplierType();
							foreach($suppliermenus as $suppliermenu)
							{
							?>
								<li><a href="/getsupplierlist/{{ $suppliermenu->title }}">{{ $suppliermenu->title }} </a></li>
							<?php
                            }
                            ?>							
								
							</ul>
						</div>
					</div>
					<div class="col-lg-3 ">
						<div class="widget footer-widget">
							<h4 class="widget-title" style="color:#888181 ">Address</h4>
							<ul class="recent-post">
								<li style="padding-left:0px; color:#888181 ">
									Silver Tower, Business Bay, <br>
									Dubai, UAE <br>
									+971 4 435 7505
									<br>
									info@hotelsvenue.com
								</li>
							
								
								
							</ul>
							
							
								<div>
								<a href="https://www.google.com/maps/dir/25.1820628,55.2590714/liali+events/@25.1824744,55.2581337,16z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x3e5f6920bc7624c3:0x7c78d4a33ef3259f!2m2!1d55.2642399!2d25.184838"
								 target="_blank">
								<img src="{{asset('front_end/img/map.jpg')}}" alt="Logo"  style="    margin-top: 30px;
    width: 25%;
    margin-left: 7.5%;">
	                         </a>
								

							</div>
							
							
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom">
				<a href="#" class="back-to-top"><i class="far fa-angle-up"></i></a>
				<div class="row">
					<div class="col-md-6">
						<ul class="footer-nav">
						
						
							<li><a href="{{ url('/') }}">Home</a></li>
							<li><a href="{{ url('/hotels') }}">Hotel List</a></li>
							
							
							<li><a href="#">Supplier List</a></li>
							<li><a href="#">Social</a></li>
							<li><a href="#">Corporate</a></li>
						
						</ul>
					</div>
					<div class="col-md-6">
						<p class="copy-right text-right">Copyright ©2021. HotelsVenues All Rights Reserved.</p>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<style>
	
	footer .widget.footer-widget ul.nav-widget li {
    width: 100%;
    float: left;
    line-height: 35px;
}

footer .widget.footer-widget .footer-logo {
    margin-bottom: 40px;
    max-width: 170px;
}

footer ul.social-icons li a
{
	border:2px solid #888181;
}
</style>

	<!-- Footer End -->
	<!-- modernizr version 3.6.0 -->
	<script src="{{asset('front_end/js/modernizr-3.6.0.min.js')}}"></script>
	<!-- jQuery Version 1.12.4 -->
	<script src="{{asset('front_end/js/jquery-1.12.4.min.js')}}"></script>
	<!-- Proper Version 1.16.0-->
	<script src="{{asset('front_end/js/popper.min-1.16.0.js')}}"></script>
	<!-- Bootstrap Version 4.4.1 -->
	<script src="{{asset('front_end/js/bootstrap-4.4.1.min.js')}}"></script>
	<!-- Slick Version 1.9.0 -->
	<script src="{{asset('front_end/js/slick.min-1.9.0.js')}}"></script>
	<!-- isotope version 3.0.6 -->
	<script src="{{asset('front_end/js/isotope.pkgd-3.0.6.min.js')}}"></script>
	<!-- MeanMenu version 2.0.7-->
	<script src="{{asset('front_end/js/meanmenu-2.0.7.min.js')}}"></script>
	<!-- Nice select js version 1.0 -->
	<script src="{{asset('front_end/js/jquery.nice-select-1.0.min.js')}}"></script>
	<!-- wow js version 1.1.3-->
	<script src="{{asset('front_end/js/wow-1.1.3.min.js')}}"></script>
	<!-- magnific popup version 1.1.0 -->
	<script src="{{asset('front_end/js/magnific-popup-1.1.0.min.js')}}"></script>
	<!-- jQuery inview  -->
	<script src="{{asset('front_end/js/jquery.inview.min.js')}}"></script>
	<!-- Waypoints js version 2.0.3 -->
	<script src="{{asset('front_end/js/waypoints-2.0.3.min.js')}}"></script>
	<!-- counterup js version 1.0 -->
	<script src="{{asset('front_end/js/jquery.counterup-1.0.min.js')}}"></script>
	<!-- bootstrap datepicker -->
	<script src="{{asset('front_end/js/bootstrap-datepicker.js')}}"></script>
	<!-- jQuery Ui for price range slide -->
	<script src="{{asset('front_end/js/jquery-ui.min.js')}}"></script>
	<!-- Google Maps -->
	<script src="https:/maps.googleapis.com/maps/api/js?key=AIzaSyDC3Ip9iVC0nIxC6V14CKLQ1HZNF_65qEQ"></script>
	<!-- Main JS file -->
	<script src="{{asset('front_end/js/main.js')}}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js" integrity="sha512-37T7leoNS06R80c8Ulq7cdCDU5MNQBwlYoy1TX/WUsLFC2eYNqtKlV0QjH7r8JpG/S0GUMZwebnVFLPd6SU5yg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script>
		
		$(document).ready(function(){
		
				$("#frm1").validate({
					errorClass : "abc",
					rules:{
						password: {
							required: true,
							minlength: 5
						}
					}
				})
		
		})

</script>
	<script>
	$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
	dots:false,
	autoplay:true,
	autoplayTimeout:5000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
})
</script>
</body>

</html>