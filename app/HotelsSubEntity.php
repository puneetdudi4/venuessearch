<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HotelsSubEntity extends Model
{
    protected $table='hotels_sub_entity';
    protected $fillable= ['hotel_id','title','sub_title','type','feature_image','specification_pdf', 'include_type','facilities', 'event_type', 'description','status','cost','discount','commission','final_price'];

     public function getAllHotelsSubEntityCount(){
        return HotelsSubEntity::where('status', 'ACTIVE')->count();
    }

}
