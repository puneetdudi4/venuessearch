@extends('merchant.layout.main')
@section('content')

    <div class="container">
        <!--begin::Row-->
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-custom gutter-b">

                </div>
                <div class="tab-content mt-5" id="myTabContent">
                    <div class="card card-custom gutter-b" style="box-shadow: none;">
                        <div class="card-header flex-wrap py-3">
                            <div class="card-title w-100">
                                <h1 class="m-auto">
                                    {{ $hotel_id->name }} :  Booking List
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
										<th>Days</th>
                                    
                                    <th>Menu Price</th>
									<th>Venue Price</th>
									<th>Total Price</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php
                                    $i=1;
                                @endphp
                                @foreach($bookings as $booking)
                                    <tr>
                                        
                                        <td class="text-center">{{$booking->event_title}}</td>
										<td class="text-center">{{$booking->vname}}</td>
										<td class="text-center">{{$booking->start_time}}</td>
										<td class="text-center">{{$booking->end_time}}</td>
										
										<td class="text-center">{{$booking->no_of_days}}</td>
										
										<td class="text-center">{{$booking->menu_price * $booking->no_of_days}}</td>
										
										<td class="text-center">{{$booking->venue_price *$booking->no_of_days}}</td>
										
										<td class="text-center">{{$booking->total_price}}</td>
										
										
										
                                        <td>
										<div>
                                            <a href="{{ url('/merchant/hotel/bookingdetails')}}/{{$booking->id}}" class="btn btn-sm btn-clean btn-icon mr-2"
                                               title="View details" >
                                                <button href="#" class="btn btn-warning btn-sm"
                                                        style=" margin-left: 13px;">View
                                                </button>
                                            </a>
										</div>
										
                                        <div style="margin-top:10px">										
											<a href="{{ url('/merchant/hotel/bookingdetails')}}/{{$booking->id}}" class="btn btn-sm btn-clean btn-icon mr-2"
                                               title="View details" >
                                                <button href="#" class="btn btn-warning btn-sm"
                                                        style=" margin-left: 13px;">Cancel
                                                </button>
                                            </a>
											</div>

                                        </td>
                                    </tr>
                                @endforeach
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
    
@endsection
