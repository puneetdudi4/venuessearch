<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use DB;

class IncludeHotelMenu extends Model
{
    protected $table="include_hotel_menu_meta_data";

    protected $fillable = [
        'hotels_sub_entity_id','menu_type','category_id','title','doc_file','is_deleted','cost','discount'
    ];

    public static function getAllIncludeHotelMenuData($id){
    	return DB::table('include_hotel_menu_meta_data as m')
                ->select('m.id','m.hotels_sub_entity_id','m.menu_type','m.category_id','m.title','m.doc_file','m.is_deleted','menu_types.title as mtype','menu_category.title as category')
				->leftjoin('menu_types', 'menu_types.id', '=', 'm.menu_type')
				->leftjoin('menu_category', 'menu_category.id', '=', 'm.category_id')
                ->where('m.is_deleted' , 0)
                ->where('m.hotels_sub_entity_id' , $id)
                ->get();
    }
}
