<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// added by robin 2022

use Session;

class SupplierType extends Model
{
	protected $table="supplier_type";
    protected $fillable = [
        'title', 'image', 'is_deleted'
    ];
    public function getAllSupplierType() {
       return SupplierType::get();
	   
	  
		
    }
    public static function getSupplierTypeTitle($id) {
        $title = SupplierType::where('id', $id)->where('is_deleted','0')->first();
    	if($title) {
    		return $title->title;
    	} else{
    		return false;
    	}
    }
    public static function getAllApprovedSupplierType(){
      //  return SupplierType::where('is_deleted','0')->orderBy('id', 'asc')->get();
	  
	    // added by robin2022
		 if(Session::get('lang')=='arabic')
        {
        return SupplierType::select('id','title_arabic as title','image','title as menu_name')->where('is_deleted','0')->orderBy('id', 'ASC')->get();
		}
		else
		{
			return SupplierType::select('id','title','image','title as menu_name')->where('is_deleted','0')->orderBy('id', 'ASC')->get();
		}
		
    }

    public static function getSupplierTypeByID($id){
        return SupplierType::where('id',$id)->first();
    }

}
