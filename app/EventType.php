<?php

namespace App;
// added by robin 2022

use Session;

use Illuminate\Database\Eloquent\Model;

class EventType extends Model
{
	protected $table="event_type";
    protected $fillable = [
        'title', 'image', 'type','indoor_image','outdoor_image','is_deleted'
    ];
    public function getAllEventType() {
       // return EventType::orderBy('id', 'ASC')->get();
	   
	   // added by robin2022
		 if(Session::get('lang')=='arabic')
        {
        return EventType::select('id','title_arabic as title','type','indoor_image',
		'outdoor_image','image')->where('is_deleted','0')->orderBy('id', 'ASC')->get();
		}
		else
		{
			return EventType::select('id','title','type','indoor_image',
		'outdoor_image','image')->where('is_deleted','0')->orderBy('id', 'ASC')->get();
		}
    }
    public static function getEventTypeTitle($id) {
        $title = EventType::where('id', $id)->where('is_deleted','0')->first();
    	if($title) {
    		return $title->title;
    	} else{
    		return false;
    	}
    }
    public static function getAllApprovedEventType(){
		// added by robin2022
		 if(Session::get('lang')=='arabic')
        {
        return EventType::select('id','title_arabic as title','type','indoor_image',
		'outdoor_image','image')->where('is_deleted','0')->orderBy('id', 'ASC')->get();
		}
		else
		{
			return EventType::select('id','title','type','indoor_image',
		'outdoor_image','image')->where('is_deleted','0')->orderBy('id', 'ASC')->get();
		}
    }
	
	public static function getAllApprovedEventType_type($type){
		// added by robin2022
		 if(Session::get('lang')=='arabic')
        {
        return EventType::select('id','title_arabic as title','type','indoor_image',
		'outdoor_image','image')->where('is_deleted','0')->where('type',$type)->orderBy('id', 'ASC')->get();
		}
		else
		{
			return EventType::select('id','title','type','indoor_image',
		'outdoor_image','image')->where('is_deleted','0')->where('type',$type)->orderBy('id', 'ASC')->get();
		}
    }

    public static function getEventTypeByID($id){
        return EventType::where('id',$id)->first();
    }

}
