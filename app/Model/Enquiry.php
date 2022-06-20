<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    protected $fillable = [
        'fullname', 'event_date', 'city', 'guests', 'event_type','budget','email','mobile','date'
    ];

    
}
