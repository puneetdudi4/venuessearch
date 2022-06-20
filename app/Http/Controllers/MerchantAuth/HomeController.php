<?php

namespace App\Http\Controllers\MerchantAuth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Supplier;
use App\Merchant;
use App\HotelsSubEntity;
use App\Hotel;
use App\City;
use App\Countri;
use App\State;
use DB;
class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('merchant');
        $this->hotel = new Hotel();
        $this->merchant = new Merchant();
        $this->supplier = new Supplier();
        $this->hotelsSubEntity = new HotelsSubEntity();
    }
    public function merchantDashboard(Request $request){
        $mid=Auth::guard('merchant')->user()->id;
        $data['hotelCount'] = $this->hotel->getAllHotelCountByMerchantId($mid);
        $data['merchantCount'] = $this->merchant->getAllMerchantCount();
        $data['supplierCount'] = $this->supplier->getAllSupplierCount();
        $data['hotelsSubEntityCount'] = $this->hotelsSubEntity->getAllHotelsSubEntityCount();
        //dd($data['merchantCount']);
		
		
		
		$hotels = DB::table('hotels')
                                ->select('hotels.id')
                              
								->where('hotels.status', 'ACTIVE')
								->where('hotels.if_is_merchant_id', '=', $mid)
                                ->Where('hotels.is_deleted', 0)
                               // ->distinct()
                                ->first();
		$hotels_id=@$hotels->id;						
						//date_report		
		
		    $startdate=date('Y-m-d');
			
			$enddate=date('Y-m-d');
		   $date_report =@$request->date_report;
		   
		   if($date_report !='')
		   {
		     $date_report=explode("-",$date_report);
			 
			 $startdate=date("Y-m-d", strtotime($date_report[0]));
			 
			 $enddate=date("Y-m-d", strtotime($date_report[1]));

			 
		   }
		   
		   
		   
			
             $visitor_ids = DB::table('visitor')
	             ->select(DB::raw('SUM(hits) AS count'))
 
              
                //->where('visit_date', '=',  date('Y-m-d'))
				
				->whereBetween('visit_date', [$startdate, $enddate])

				
				->where('hotel_id', '=',  $hotels_id)
				
				
				
                ->first();	

           $books_ids = DB::table('bookings')
	             ->select(DB::raw('COUNT(id) AS count'), DB::raw('SUM(total_price) AS price'))
 
              
                //->whereRaw(DATE_FORMAT(created_at,'%Y-%m-%d'), '=',  date('Y-m-d'))
				
				->where(\DB::raw("DATE_FORMAT(created_at, '%Y-%m-%d')"), '=',  date('Y-m-d'))
				
				->where('hotel_id', '=',  $hotels_id)
				
				
				
                ->first();	
				
				
				
				

//SELECT * FROM `bookings` WHERE DATE_FORMAT(created_at,'%Y-%m-%d')='2021-05-19';

         
								
			$data['daily_visit']=	$visitor_ids->count;

           $data['daily_books']=	$books_ids->count;		
           $data['daily_amount']=	$books_ids->price;			   
								
       return view('merchant/home',$data);
    }

     public function getHotelMerchantList()
    {
        return view('merchant/HotelMerchant/hotelMerchantList');
    }
   
    public function getHotelMerchantSingleView()
    {
        return view('merchant/HotelMerchant/hotelMerchantSingleView');
    }
    public function getHotelKeyMerchant()
    {
        return view('merchant/HotelMerchant/keyFactMerchant');
    }
     public function getHotelCapacityMerchant()
    {
        return view('merchant/HotelMerchant/capacityMerchant');
    }
     public function getHotelFeaturedMerchant()
    {
        return view('merchant/HotelMerchant/featuredMerchant');
    }

     public function AddHotelsMerchantIncludes()
    {
        return view('merchant/HotelMerchant/add_hotel_merchant');
    }
    public function addHotelsMerchant(){

        $data['City']=City::get();
        $data['Countri']=Countri::get();
        $data['State']=State::get();
        return view('merchant/HotelMerchant/add_hotel', $data);
        
    }

}
