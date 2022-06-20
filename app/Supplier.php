<?php

namespace App;

use App\Notifications\SupplierResetPassword;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\SupplierProfile;
use App\Countri;
use App\State;

class Supplier extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'supplier_password', 'company_name', 'location', 'landline_no', 'mobile_no', 'image'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new SupplierResetPassword($token));
    }

    public function profile()
    {
        return $this->hasOne(SupplierProfile::class, 'if_is_supplier_id');
    }

    public function country_row() {
        return $this->belongsTo(Countri::class, 'country');
    }

    public function state_row() {
        return $this->belongsTo(State::class, 'state');
    }

    /*public static function getAllSupplier(){
        return Supplier::get();
    }*/
    public static function getAllSupplierCount()
    {
        return Supplier::count();
    }

    public static function getAllSupplier()
    {
        return Supplier::get();
    }
}
