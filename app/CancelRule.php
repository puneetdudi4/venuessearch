<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CancelRule extends Model
{
	protected $table="cancelationrules";
    protected $fillable = [
        'sixmonth', 'threemonth', 'onemonth','fifteenday','oneweek','hotelid'
    ];
    public function getAllCancelRule() {
        return CancelRule::orderBy('id', 'ASC')->get();
    }


    public static function getCancelRuleByID($id){
        return CancelRule::where('hotelid',$id)->first();
    }

}
