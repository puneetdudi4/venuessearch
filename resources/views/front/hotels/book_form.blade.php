@include('front.layout.header')


									
										<style>
									.btn-group
									{
										/*background:#efecec9c*/ ;
									}
									.menu-col
									{
										background:#efecec9c ;
									}
									.btn-group-vertical>.btn, .btn-group>.btn {
											position: relative;
											-ms-flex: 1 1 auto;
											flex: 1 1 auto;
											padding: 10px 0px;
											font-size:13px;
											background:none ;
										}
									
									 .show>.btn-danger.dropdown-toggle {
											color: #fff;
											background-color: #efecec9c  ! important;
											border-color: #efecec9c  ! important;
											border:none ! important;
										}
										.menuwhite
										{
											color:#888181  ! important;
										}
										
										.menuwhite:hover
										{
											color:#888181  ! important;
										}

									</style>
									
									
	<main>
		<!-- Breadcrumb section -->
			<section class="breadcrumb-area d-flex align-items-center position-relative bg-img-center"
			style="background-image: url({{ asset('uploads/hotels_featured_images/'.$VenuesDetails->feature_image )}}" alt="{{ $VenuesDetails->title }});">
			<div class="container">
				<div class="breadcrumb-content text-center">
					<h1>{{ $VenuesDetails->title }}</h1>
					<ul class="list-inline">
						<li><a href="{{ URL::to('/') }}">Home</a></li>
						<li><i class="far fa-angle-double-right"></i></li>
						<li>{{ $VenuesDetails->title }}</li>
					</ul>
				</div>
			</div>
			
		</section>
		<!-- Breadcrumb section End-->
		
			<form id="hotelsvenues-form" method="post" action="{{ url('/savebookvenues') }}">
					
					                @csrf <!-- {{ csrf_field() }} -->
		<section class="room-details-wrapper section-padding">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						<!-- Room Details -->
						<div class="room-details">
						
							 
							
							
							<div class="room-details-tab">
								<div class="row">
								
									<div class="col-sm-12">
										<div class="tab-content desc-tab-content">
									
								<div  id="location">
										
								
								   <div class="row">
									
									
									
									<table class="table" >
									 <tr>
									   <td> <strong>Name:</strong> </td>
									   <td> <?php echo $user->name ?> </td>
									     <td> <strong>Mobile:</strong>  </td>
									   <td> <?php echo $user->mobile ?> </td>
									 </tr>
									 
									 <tr>
									   <td> <strong>Address:</strong> </td>
									   <td> <?php echo $user->area ?>,<?php echo $city ?> ,
									   <?php echo $user->country ?></td>
									     <td><strong> Email:</strong>  </td>
									   <td> <?php echo $user->email ?> </td>
									 </tr>
									 <tr>
									   <td> <strong>No of Days:</strong> </td>
									   <td id="ndays"> <?php echo $no_of_dates; ?> </td>
									   <td></td>  <td></td>
									  </tr> 
									 
									 
									 </table>
								   </div>	 
								   
								   
							<div class="room-details-tab">
								<div class="row">
									<div class="col-sm-12">
										<ul class="nav desc-tab-item" role="tablist">
											<li class="nav-item" style="width: 25%;float: left;">
												<a class="nav-link active" href="#menus" role="tab"
													data-toggle="tab">Menus</a>
											</li>
											<li class="nav-item" style="width: 25%;float: left;">
												<a class="nav-link" href="#capacities" role="tab"
													data-toggle="tab">Capacity</a>
											</li>
											
											<li class="nav-item" style="width: 25%;float: left;">
												<a class="nav-link" href="#facilities" role="tab"
													data-toggle="tab">Facilities</a>
											</li>
											
											<li class="nav-item" style="width: 25%;float: left;">
												<a class="nav-link" href="#rules" role="tab"
													data-toggle="tab">Cancelation Rules</a>
											</li>
											
										</ul>
									</div>
									
									<div class="col-sm-12">
										<div class="tab-content desc-tab-content">
											<div role="tabpanel" class="tab-pane fade in active show" id="menus">
												<h5 class="tab-title">Menu Lists </h5>
												<div class="entry-content">
												
												
												
												
												
													<div class="row"  style="width:100%">
									
									<?php
									 foreach($menu_types as $menu_type)
									 {
										 ?>
												<div class="col-sm-3 menu-col" >
												
												<!-- Example single danger button -->
														<div class="btn-group" >
														  <button type="button"   class="btn  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
															<?php echo $menu_type->title ?>
														  </button>
														   <div class="dropdown-menu" style="background:#efecec9c">
														  
														   <?php
														   $menu_category = DB::table('menu_category')
															->select('id', 'title')
															->where('is_deleted', 0)
														   ->where('menu_type',$menu_type->id )
															->get();	
															foreach($menu_category as $menucat)
															{
                                                            ?>															
															
															<a class="dropdown-item menuwhite"  onclick="getmenulist1('<?php echo $menucat->title?>',<?php echo $menucat->id?>,<?php echo $VenuesDetails->id?>)"><?php echo $menucat->title?></a>
															<?php
															}
															?>
														  </div>
														</div>
														
												 </div>
										<?php
									 }
                                      ?>									 
												 
												 
												 
												 
												 
												 
												 
												 
											

											   </div>		



                                          <span id="menubox1"> </span>
										
                                            
												
													<table class="table" >
									
										
										
										
									
									
							
						
						  <tr>
					         
							   
							   	 
									
									 <td width="10%"> </td>
										 
									 <td width="10%">
											
									 </td>
											
									 
									<td width="20%">
										<strong>Venue Price</strong>
									</td>
										
									<td width="60%">
									<input type="text" name="venue_price" id="venue_price"   value="<?php echo $VenuesDetails->final_price ?>">
									</td>
									</tr>
									
									
									 <tr>
									
									 <td width="10%"> </td>
										 
									  <td width="10%">
											
									 </td>
											
									 
									<td width="20%">
										<strong>Total Price</strong>
									</td>
										
									<td width="60%">
									<input type="text" name="total_price" id="total_price"   value="<?php echo $VenuesDetails->final_price * $no_of_dates ?>">
									
									<input type="hidden" id="no_of_dates" name="no_of_dates" value="<?php echo $no_of_dates?>" >
									
									<input type="hidden"  id="no_of_dates1"  name="no_of_days" value="<?php echo $no_of_dates ?>" >
									
									
									<input type="hidden"  id="v_price"  name="v_price" value="<?php echo $VenuesDetails->final_price * $no_of_dates ?>" >
									
									<input type="hidden"  id="m_price"  name="m_price" value="0" >
									
									
										
										
									</td>
									</tr>
									
								
							
					
						 </table>
									      



										  </div>
											</div>
                                       
										
										
										
								
	<div role="tabpanel" class="tab-pane fade"  id="facilities">
		<h5 class="tab-title">Facilities  </h5>
			<div class="entry-content">
			
				<p>
													
													 <?php
													 if(@$facility !='')
													 {
													 $facility=array_filter($facility);
													  foreach($facility as $fac)
													  {
														  if($fac !='')
															  
														  ?>
														  <div class="col-sm-6">
														  <input type="checkbox" name="facility[]" class="facilities_input" value="<?php echo $fac?>" style="width:35px; height:20px">
														  <?php
														  
														   echo $fac; 
														   ?>
														   </div>
														   <?php
														   
													  }
													 }
													  ?> 
														
													</p>
							
			
			</div>
	</div>	
										



	<div role="tabpanel" class="tab-pane fade" id="capacities">
		<h5 class="tab-title">Capacities  </h5>
		<p> Please select the capacity </p>
			<div class="entry-content">
			
											
							<table cellpadding="10" class="table">	

                               <tr>
							      <td> </td>
							     <td> Name </td>
								 <td> Image </td>
								 <td> Capacity </td>
								 <td> Social Distance </td>
                               </tr>							   
												
								<?php
                                foreach($capacities  as $capacitie)
                                {
									?>
									<tr> 
									<td> 		<input type="radio"    name="capacitiy_id" value= "<?php echo $capacitie->ctitle?>" style="height:30px">
									 </td>
									<td> <?php echo $capacitie->ctitle?></td>
									<td>
									 <img class="image_fade"
                                                        src="{{ asset('storage/capacityAttributeImg/'.$capacitie->image)}}"
                                        
										style="width:100px; height: 100px;">
									</td>
                                    <td><?php echo $capacitie->capacity_value?> </td>	
                                   <td> <?php echo $capacitie->socialdistancing_capacity?></td>											
									</tr>	
									<?php
                                }
                               ?>	
                              </table>	

						  
					 
					 
			</div>
	</div>	
					



   				 <div role="tabpanel" class="tab-pane fade" id="rules">
												<h5 class="tab-title">Cancelation Rules</h5>
												
												
												<table class="table">
												<tr> <td> Duration </td> 
												<td> Percentage </td>
												
												</tr>
												
												<tr> <td> Cancellation before 6 month to the Events: </td> 
												<td> <?php echo @$cancelrule->sixmonth ?>% </td>
												
												</tr>
												
												<tr> <td> Cancellation before 3 month to the Events: </td> 
												<td>  <?php echo @$cancelrule->threemonth ?>% </td>
												
												</tr>
												
												<tr> <td> Cancellation before 1 month to the Events: </td> 
												<td>  <?php echo @$cancelrule->onemonth ?>% </td>
												
												</tr>
												
												<tr> <td> Cancellation before 15 days to the Events: </td> 
												<td>  <?php echo @$cancelrule->fifteenday ?>% </td>
												
												</tr>
												
												<tr> <td> Cancellation before 1 weeks to the Events: </td> 
												<td>  <?php echo @$cancelrule->oneweek ?>% </td>
												
												</tr>
												
												
												
												</table>
					 </div>
					 
		
					</div>							
										
                					</div>					
												
									
									
									
									
								 </div>
                                </div>
								
									
									
								   
									
						
											
											
											
											</div>
											
									
											
											
											
											
										
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-8"> </div>
							<div class="col-lg-4">
						
						
							<div class="input-wrap">
										<button type="button"   onclick="booking_form()" style="padding:30px" class="btn filled-btn btn-block">
											book now <i class="far fa-long-arrow-right"></i>
										</button>
									</div>
						
						
						
						 </div>
						
						
					</div>
					<div class="col-lg-4">
						<!-- Sidebars Area -->
						<div class="sidebar-wrap">
							<div class="widget booking-widget">
								<h4 class="widget-title">Venue Price: AED{{ $VenuesDetails->final_price }}</h4>
							
									
								<div class="input-wrap">
									   <label>Event Title </label>
									   
										<input type="text" name="event_title" autocomplete="off" value="<?php echo @$event_title?>"  >
										
									</div>
									
									
									<div class="input-wrap">
									   <label>Start Date </label>
									   
										<input type="date" name="start_date" id="start_date" min="<?php echo date('Y-m-d', strtotime("+1 day"))?>"  required autocomplete="off"  value="<?php echo $start_date?>" >
									
									</div>
									<div class="input-wrap">
									   <label>Start Time </label>
									   
										<input type="time" autocomplete="off" required  value="<?php echo $start_time?>"  name="start_time"  >
									
									</div>
									<div class="input-wrap">
									   <label>End Date </label>
										<input type="date" name="end_date" id="end_date" min="<?php echo date('Y-m-d', strtotime("+1 day"))?>" required autocomplete="off"  value="<?php echo $end_date?>" placeholder="End Date" >
										
									</div>
									
									<div class="input-wrap">
									   <label>End Time </label>
									   
										<input type="time" name="end_time" required autocomplete="off"  value="<?php echo $end_time?>"   >
										
									</div>
									
									<div class="input-wrap">
									   <label>No of Guests </label>
										<input type="text" name="no_guests" required  autocomplete="off" id="no_guests" value="<?php echo $no_guests?>"   placeholder="No of Guests" id="f-location">
										<i class="far fa-search"></i>
									</div>
								
									
									<input type="hidden" name="vid" value="<?php echo $vid?>" >
									
									<input type="hidden" name="hid" value="<?php echo $hid?>" >
									
									<input type="hidden" name="cid" value="<?php echo $user->id ?>" >
									
									
								
									
									
									
									
								
							</div>
						
						
						</div>
					</div>
				</div>
			</div>
		</section>
		
		</form>
		
		
		
	
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


<script>
function menu_price(price,id)
{
	$('.price').val('');
	
	var no_of_dates=$('#no_of_dates').val();
	
	//var menuprice = $('#menu'+id).val() || 0;
 			
	var no_guests=$('#no_guests').val() || 0;
    var total = parseFloat(no_guests)* parseFloat(price);
	
	
	var m_price = parseFloat(no_of_dates)* parseFloat(total);
	
	
	$('#price'+id).val(total);
	
	
	
	var venue_price=$('#venue_price').val();
	
	var v_price = parseFloat(no_of_dates)* parseFloat(venue_price);
	

	
	var total_price = parseFloat(venue_price) + parseFloat(total);
	
	
	
	total_price=parseFloat(no_of_dates) * parseFloat(total_price);
	
	
	//$('#total_price').val(total_price);
	
	
	$('#v_price').val(v_price);
	
	$('#m_price').val(m_price);
	
	if(v_price > m_price)
	{
		$('#total_price').val(v_price);
	}
	else if(m_price > v_price)
	{
		$('#total_price').val(m_price);
	}
	else
	{
		$('#total_price').val(total_price);
	}
	

	
	// m_price
	
	//total_price();
	
}

function total_price(no_of_days)
{
	var menu_count=$('#menu_count').val() ;
	  var menutotal = 0;
          for(j=1; j<=menu_count; j++)
          {

            menuprice = $('#price'+j).val() || 0;
			
		
            menutotal = parseFloat(menutotal) + parseFloat(menuprice);
			  
			
           }
		   
		   
	
	var no_guests=$('#no_guests').val() || 0;
    //var total = parseFloat(no_guests)* parseFloat(price);
	
	//$('#price'+id).val(total);
	
	
	
	var venue_price=$('#venue_price').val();
	

	
	//var menu_price = parseFloat(no_guests) * parseFloat(menutotal);
	
	var venu_menu_price = parseFloat(venue_price) + parseFloat(menutotal);
	
	
	var m_price1 = parseFloat(no_guests)* parseFloat(menutotal);
	
	var m_price = parseFloat(m_price1)* parseFloat(no_of_days);
	
	var v_price = parseFloat(venue_price)* parseFloat(no_of_days);
	
	//var total_prices = parseFloat(venu_menu_price) * parseFloat(no_guests);
	
	var no_of_dates=no_of_days;
	
	total_prices=parseFloat(no_of_dates) * parseFloat(venu_menu_price);
	
	
	//$('#total_price').val(total_prices);
	
	
		
	$('#v_price').val(v_price);
	
	$('#m_price').val(m_price);
	
	if(v_price > m_price)
	{
		$('#total_price').val(v_price);
	}
	else if(m_price > v_price)
	{
		$('#total_price').val(m_price);
	}
	else
	{
		$('#total_price').val(venu_menu_price);
	}
	
	
		 
}


</script>

<script>
function booking_form()
{
	
	
	
	//alert($('input[type=radio][name=capacitiy_id]:checked').length);
	
	//if( $('input[type=radio][name=capacitiy_id]:checked').length ) 
	//{

     //alert("Test");
/*	if($('input[type=radio][name=capacitiy_id]:checked').length == 0 )
      {
		  alert('Please Select Capacity');
		 // return false;
		 return true;
	  }
	  */
	//} 
	  
	 var fields = $(".facilities_input").serializeArray(); 
	 console.log(fields);
	 
   /* if (fields.length === 0) 
    { 

         alert('Please Select Facility');
        // cancel submit
        //return false;
        
        return true;
    } 
	 
	  */
	
	  

	  
	 /*  if($('input[type=radio][name=menu_id]:checked').length == 0)
      {
        // alert("Please select atleast one");
		
		
		  var result = confirm("Are you confirm to book venue without menu");
		  
            if (result == true) {
                //alert('Yes');
				       $("#hotelsvenues-form").submit();

            } else {
               // alert('No');
				return false;
            }
		
		
         //return false; hotelsvenues-form
      }
	  else{
		   $("#hotelsvenues-form").submit();
	  }
	  */
	  
	   $("#hotelsvenues-form").submit();
      
}
</script>


<script>

$("#end_date").change(function(){
	
	
  var start_date = $('#start_date').val();
  
  var end_date = $('#end_date').val();
 
  var startDate = new Date(start_date);
var endDate = new Date(end_date);



if (startDate > endDate){
// Do something

alert('Start date greater than end date');

$('#end_date').val('');
$('#start_date').val('');
return false;
}
else
{

}

var oneDay = 24 * 60 * 60 * 1000; // hours*minutes*seconds*milliseconds


var no_of_days = Math.round(Math.abs((startDate - endDate) / oneDay));
var one =1;

no_of_days=parseFloat(no_of_days) + parseFloat(one);



$('#ndays').html(no_of_days);

$('#no_of_dates').val(no_of_days);

$('#no_of_dates1').val(no_of_days);



total_price(no_of_days);


});



$("#start_date").change(function(){
	
	
  var start_date = $('#start_date').val();
  
  var end_date = $('#end_date').val();
 
  var startDate = new Date(start_date);
var endDate = new Date(end_date);



if (startDate > endDate){
// Do something

alert('Start date less than end date');
$('#end_date').val('');
$('#start_date').val('');
return false;
}
else
{

}


var oneDay = 24 * 60 * 60 * 1000; // hours*minutes*seconds*milliseconds


var no_of_days = Math.round(Math.abs((startDate - endDate) / oneDay));
var one =1;

no_of_days=parseFloat(no_of_days) + parseFloat(one);



$('#ndays').html(no_of_days);

$('#no_of_dates').val(no_of_days);

$('#no_of_dates1').val(no_of_days);



total_price(no_of_days);


});
</script>
<script>


function getmenulist1(name,id,vid)
{
	
	
	var formData = {name:name,id:id,vid:vid}; //Array 
  
$.ajax({
    url : "{{ url('getbookmenudetails')}}",
    type: "GET",
    data : formData,
    success: function(data, textStatus, jqXHR)
    {
		$('#menubox1').html(data);
        //data - response from server
    },
    error: function (jqXHR, textStatus, errorThrown)
    {
		//$('#menubox').html(data);
		//alert('No');
 
    }
});
}

function menuremove()
{
	        $('.menu_id').prop('checked', false); //unchecks all checkboxes

}
</script>