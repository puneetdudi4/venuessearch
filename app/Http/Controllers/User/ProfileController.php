<?php
namespace App\Http\Controllers\User;

use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use App\Hotel;
use App\User;
use App\Model\City;
use App\EventType;
use App\Hotel_image_gallery;
use App\Model\HotelKeyAttribute;
use App\HotelsSubEntity;
use App\Model\HotelCapacityAttribute;
use App\Model\HotelFeatureAttribute;
use App\Model\HotelsEnquiry;
use DB;

class ProfileController extends Controller
{
    public function profile()
    {
        $data['User'] = User::find(Auth::guard('web')->user()->id);
        $venue_ids = ltrim($data['User']->favorite_venue);
        $venue_ids = explode(" ", $venue_ids);
        // dd($venue_ids);
        // $data['hotelSearch'] = DB::table('hotels_sub_entity')
        //     ->select('hotels_sub_entity.*')
        //     ->where('hotels_sub_entity.status', 'ACTIVE')
        //     ->whereIn('hotels_sub_entity.id', $venue_ids)
        //     ->distinct()
        //     ->get();
        $data['hotelSearch'] = DB::table('hotels')
                ->select('hotels.*', 'hotels_sub_entity.*', 'cities.name as city_name')
                ->join('cities', 'hotels.city', '=', 'cities.id')
                ->join('hotels_sub_entity', 'hotels.id', '=', 'hotels_sub_entity.hotel_id')
                ->where('hotels_sub_entity.status', 'ACTIVE')
                ->whereIn('hotels_sub_entity.id', $venue_ids)
                ->Where('hotels.is_deleted', 0)
                ->distinct()
                ->get();
        // dd($data);
        foreach ($data['hotelSearch'] as $value) {
            $cost = $value->cost;
            $discount = $value->discount;
            $price = $cost * $discount / 100;
            $getPrice = $cost - $price;
            $value->offeringPrice = $getPrice;
        }
        $data['city'] = City::getAllApprovedCity();
       // return view('user.auth.profile', $data);
	   
	   return view('front/profile', $data);
	   
    }

    public function updateProfile(Request $request)
    {

        $profile = User::find(Auth::guard('web')->user()->id);
        $profile->name = $request->full_name;
        $profile->email = $request->email_id;
        $profile->mobile = $request->mobile;
        $profile->company_name = $request->company_name;
        $profile->company_email = $request->company_email;
        $profile->save();
        $data['User'] = User::find(Auth::guard('web')->user()->id);
        return view('user.auth.profile', $data);
    }

    public function changePassword(Request $request)
    {
        $password = User::find(Auth::guard('web')->user()->id);
        if ($request->new_password == $request->confirm_password) {
            $password->password = Hash::make($request->confirm_password);
        }
        $password->save();
        $data['User'] = User::find(Auth::guard('web')->user()->id);


        return view('user.auth.profile', $data);
    }
	
	public function bookinghistory()
	{
		
		$userid=Auth::guard('web')->user()->id;
		
		  $data["bookings"] = DB::table('bookings as b')
                                ->select('b.id', 'b.hotel_id', 'b.venue_id', 'b.event_title', 'b.start_time', 'b.end_time', 
								'b.customer_id', 'b.no_of_days', 'b.menu_id', 'b.menu_price', 'b.venue_price', 'b.total_price','v.title as vname')
                                ->leftjoin('hotels_sub_entity as v', 'v.id', '=', 'b.venue_id')
                                ->where('b.customer_id', $userid)
                                ->orderBy('b.id', 'desc')

                                ->get();
								
	
			
		
        return view('front.user_bookinghistory', $data);
	}
	
	
	public function bookinghistorydetails($id)
	{
		
		 $data["booking"] = DB::table('bookings as b')
                                ->select('b.id', 'b.hotel_id', 'h.name as hname','b.venue_id', 'b.event_title', 'b.start_time', 'b.end_time', 
								'b.customer_id', 'b.no_of_days', 'b.menu_id', 'b.menu_price', 'b.venue_price', 
								'b.total_price','v.title as vname' ,'b.capacities','b.facilities', 'u.name as cname','u.area','u.email','u.mobile')
                                ->leftjoin('hotels_sub_entity as v', 'v.id', '=', 'b.venue_id')
								
								->leftjoin('hotels as h', 'h.id', '=', 'b.hotel_id')
								
								->leftjoin('users as u', 'u.id', '=', 'b.customer_id')
								
								
                                ->where('b.id', $id)
                               
                                ->first();
								
		 $bookings=	$data["booking"];	
         $data["menus"] ='';		 
								
		if($bookings->menu_id !='')
		{
										
								
		  $data["menus"] = DB::table('include_hotel_menu_meta_data as m')
                            ->select('m.title as menu_name','mc.title as menu_category','mt.title as menu_type')
                            ->leftjoin('menu_category as mc', 'mc.id', '=', 'm.category_id')
							->leftjoin('menu_types as mt', 'mt.id', '=', 'm.menu_type')
                            ->where('m.id', $data["booking"]->menu_id)
                            ->first();
		
		 
		}
								
								
	
		
        return view('front.user_bookingdetails', $data);
	}
	
	
	

}

?>
