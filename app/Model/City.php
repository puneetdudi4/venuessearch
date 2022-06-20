<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
// added by robin 2022

use Session;

class City extends Model
{
    protected $fillable = [
        'name', 'state_id', 'country_id', 'status', 'is_deleted'
    ];

    public function getAllCity() {
        return City::get();
    }

    public static function getCityTitle($id) {
        $title = City::where('id', $id)->where('status','APPROVED')->where('is_deleted','0')->first();
    	if($title) {
    		return $title->name;
    	} else{
    		return false;
    	}
    }

    public static function getAllApprovedCity(){
        //return City::where('status','APPROVED')->where('is_deleted','0')->get();
		
		  // added by robin2022
		 if(Session::get('lang')=='arabic')
        {
			return City::select('id','name_arabic as name')->where('status','APPROVED')->where('is_deleted','0')->get();
		}
		else
		{
			return City::select('id','name')->where('status','APPROVED')->where('is_deleted','0')->get();
		}
		
    }

    public function getCityByID($id){
        return City::where('id',$id)->first();
    }
}
