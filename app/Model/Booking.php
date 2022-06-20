<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
	 protected $fillable = ['hotel_id','venue_id','event_title',
			 
			 'is_booked','start_time','end_time',
			 
			 'customer_id','no_of_days','menu_id',
			 
			 'menu_price','venue_price','total_price','capacities','facilities'];
	 
    protected $table="bookings";
}
