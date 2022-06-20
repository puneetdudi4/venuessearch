@include('front.layout.header')

	<main>


		<!-- Breadcrumb section -->
		<section class="breadcrumb-area d-flex align-items-center position-relative bg-img-center"
		style="background-image: url({{asset('front_end/img/bg/main_banner.jpg')}});">
			<div class="container">
				<div class="breadcrumb-content text-center">
					<h1>Suplier List</h1>
					<ul class="list-inline">
						<li><a href="{{ URL::to('/') }}">Home</a></li>
						<li><i class="far fa-angle-double-right"></i></li>
						<li>{{ $title }}</li>
					</ul>
				</div>
			</div>
			
		</section>
		

	
		
				<section class="section-bg " style="margin-top:40px">
			<div class="container-fluid">
			
			<div class="row">
		
			
			 <div class="col-lg-4 col-md-4" >
			 <style>
			 .example-1 {
    position: relative;
    overflow-y: scroll;
    height: 55%;
}

 .scrollbar-ripe-malinka::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
        background-color: #F5F5F5;
        border-radius: 10px; }

        .scrollbar-ripe-malinka::-webkit-scrollbar {
        width: 12px;
        background-color: #F5F5F5; }

        .scrollbar-ripe-malinka::-webkit-scrollbar-thumb {
        border-radius: 10px;
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
        background-image: -webkit-linear-gradient(330deg, #343a40 0%, #000000 100%);
        background-image: linear-gradient(120deg, #343a40 0%, #000000 100%); }

        .bordered-deep-purple::-webkit-scrollbar-track {
        -webkit-box-shadow: none;
        border: 1px solid #512da8; }
			 </style>
			 
			 <style>
			 ul.hl_ul li.hl_li
			 {
				 padding: 10px 20px;
    border-bottom: 1px solid #888181;
    background: #efecec9c;
    font-size: 21px;
			 }
			 
			 .hotels-latest 
			 {
				 width:95%;
				 margin-left:2.5%;
			 }
			 </style>
			 
			 <div class="scrollbar scrollbar-ripe-malinka">
          <div class="force-overflow"></div>
        </div>
		
		<h3 class="color_darkgoldenrod text-center" style="margin-bottom:40px;     width: 100%;
    margin-left: 0%;">Supplier Lists</h3>
								
			 
		<div class="card example-1 scrollbar-ripe-malinka" style="border:solid 1px #fff ! important">
		
		<div class="widget hotels-latest">
		
								<ul class="hl_ul">
								<?php
								
								foreach ($supplierlists as $supplierlist)
								{
									?>
									<li class="hl_li">
										<a href="{{ url('/getSupplierProducts/'.$supplierlist->id) }}" style="color:#888181   ! important"> <?php echo $supplierlist->name?> </a>
										
									<?php
								}
								?>
									
									
								
								</ul>
							</div>
          
        </div>
		
		
             </div>			  
			
			 <div class="col-lg-8 col-md-8">
			 
			  <h3 class="color_darkgoldenrod text-center featured_icon" style="margin-bottom:40px; width:100%; margin-left:0%">Featured Supplier Lists</h3>
			  
			   <div class="row">
			   
			   
			       @foreach($supplierlists as $supplierlist)
			    <?php
				
				$description=strip_tags($supplierlist->description);
				$description=substr($description,0,50);
			     ?>
			   
			                      <div class="col-lg-6 col-md-6">
									<div class="single-room" style="background:#FFF">
									<div class="product-img">
									
									<!--<a href="{{ url('/getSupplierProducts/'.$supplierlist->id) }}">
										<img src="{{ asset('uploads/hotels_featured_images/'.$supplierlist->featured_image)}}" width="100%"  class="rotate_image"  style="height:260px" alt="Room">
									</a>	--> 
									
									
									
										<img src="{{ asset('uploads/hotels_featured_images/'.$supplierlist->featured_image)}}" width="100%"  class="rotate_image"  style="height:260px" alt="Room">
									
                                
                            
									  <div class="middle">
										<div class="text"> <a style="color:#000" href="{{ url('/getSupplierProducts/'.$supplierlist->id) }}">Click for More Details</a></div>
									  </div>
									
									</div>
									
									
									
									<div class="room-desc1">
											<div class="room-cat" style="background:#efecec9c ; padding:5px; border-radius:0px 0px 10px 10px">
											<p style="text-align:center;color:#FFF; font-size:17px font-weight:bold ">
											<a href="{{ url('/getSupplierProducts/'.$supplierlist->id) }}">{{ $supplierlist->name }}</a></p>
										<!--<p style="text-align:center;color:#FFF">
											<a href="">View More</a></p> -->
											
											
										</div>
									
										
									</div>
									</div>
									</div>
						
						      
			            
						
					    @endforeach	
			  
		       </div>
			   
			  
			  
			 </div>

			 
			  
			</div>
			
			
		</div>
		</section>
	





		
  
	</main>
	<!-- Main Wrap end -->
	<!-- Footer Start -->

@include('front.layout.footer')



	
					
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
  background:#000;
  color:#FFF;
  padding:3px 20px;
  font-weight:bold;
  font-size: 14px;
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

</style>