@extends('merchant.layout.main')
@section('content')

    <div class="container">
        <!--begin::Row-->
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-custom gutter-b">
             <input type="button" class="btn btn-danger" onclick="printDiv('print')" value="Print" />

                </div>
                <div class="tab-content mt-5" id="print">
                    <div class="card card-custom gutter-b" style="box-shadow: none;">
                        <div class="card-header flex-wrap py-3">
                            <div class="card-title w-100">
                                <h1 class="m-auto">
                                    Hotel Name:{{ $booking->hname }} 
                                </h1>
								 <h1 class="m-auto">
                                    Venue Name:{{ $booking->vname }} 
                                </h1>
                            </div>
                           
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-checkable" id="hotelKeyList">
                                <thead>
                                <tr>
                                    <th>Event Title</th>
                                    <th>Venue Name</th>
									  <th>Start Date</th>
									    <th>End  Date</th>
                                    
                                    <th>Menu Price</th>
									<th>Venue Price</th>
									<th>Total Price</th>
                                   
                                </tr>
                                </thead>
                                <tbody>
                               
                                    <tr>
                                        
                                        <td class="text-center">{{$booking->event_title}}</td>
										<td class="text-center">{{$booking->vname}}</td>
										<td class="text-center">{{$booking->start_time}}</td>
										<td class="text-center">{{$booking->end_time}}</td>
										
										
										<td class="text-center">{{$booking->menu_price}}</td>
										
										<td class="text-center">{{$booking->venue_price}}</td>
										
										<td class="text-center">{{$booking->total_price}}</td>
										
										
										
                                    
                                    </tr>
                               
                                </tbody>
                            </table>
							
							<?php
							if($menus!='')
							{
								?>
							<h3> Menu Details </h3>
							
							    <table class="table table-bordered table-checkable" id="hotelKeyList">
                                <thead>
                                <tr>
                                    <th>Menu Name</th>
                                    <th>Menu Category</th>
									 <th>Menu Type</th>
							
                                   
                                </tr>
                                </thead>
                                <tbody>
                               
                                    <tr>
                                        
                                        <td >{{$menus->menu_name}}</td>
										<td >{{$menus->menu_category}}</td>
										<td >{{$menus->menu_type}}</td>
									
										
                                    
                                    </tr>
                               
                                </tbody>
                            </table>
							<?php 
							}
							?>
							
							
							<table class="table table-bordered table-checkable" id="hotelKeyList">
                                <thead>
                                <tr>
                                    <th>Capacities</th>
                                    <td>{{$booking->capacities}}</td>
									 
							
                                   
                                </tr>
                                </thead>
                                <tbody>
                               
                                    <tr>
                                        
                                        <td >Facilities</td>
										<td>{{$booking->facilities}}</td>
										
									
										
                                    
                                    </tr>
                               
                                </tbody>
                            </table>
							
							<h3> Customer Details </h3>
							
							<table class="table table-bordered table-checkable" id="hotelKeyList">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <td>{{$booking->cname}}</td>
									 
							
                                   
                                </tr>
                                </thead>
                                <tbody>
                               
                                    <tr>
                                        
                                        <td >Address</td>
										<td>{{$booking->area}}</td>
										
									
										
                                    
                                    </tr>
									
									  <tr>
                                        
                                        <td >Email</td>
										<td>{{$booking->email}}</td>
										
									
										
                                    
                                    </tr>
                               <tr>
                                        
                                        <td >Mobile No</td>
										<td>{{$booking->mobile}}</td>
										
									
										
                                    
                                    </tr>
                                </tbody>
                            </table>
							
                        </div>
                    </div>
                </div>
                <!--end::Container-->
            </div>
 
        </div>
    </div>

@endsection
@section('pageScript')
    <script>
	function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>
@endsection
