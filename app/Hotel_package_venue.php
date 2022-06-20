<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel_package_venue extends Model
{
    //
    protected $table='hotel_package_venue';
    protected $fillable= ['hotel_id','hotel_sub_entity_id','pdf','order','name','is_deleted'];

    public static function getPackagesByUsingHotelId($id){
    	return Hotel_package_venue::where('hotel_id',$id)->get();

    }
    public static function getPackagesByUsingHotelVenueId($id){
    	return Hotel_package_venue::where('hotel_sub_entity_id',$id)->get();

    }
}
