<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Hotel;
use App\User;
use App\Merchant;
use App\Model\City;
use App\EventType;


use App\CancelRule;

//use App\Tracker;venuedetails

use App\Hotel_image_gallery;

use App\Mail\ForgetpasswordEmail;



use App\Mail\BookingEmail;


use App\Model\Booking;


use App\Hotel_image_venue;

use App\Model\HotelKeyAttribute;
use App\HotelsSubEntity;
use App\Model\HotelCapacityAttribute;
use App\Model\HotelFeatureAttribute;
use App\Model\HotelsEnquiry;
use DB;
use App\Supplier;
use App\SupplierType;
use App\SupplierProfile;
use App\SupplierProducts;
use App\SupplierImageGallery;
use App\Model\CapacityAttribute;
use App\Model\IncludeHotelCapacity;
use App\Facility;

use Session;

use Illuminate\Support\Facades\Mail;


class homeController extends Controller
{

    public function getHotelsHome()
    {
		//Tracker::hit();


      
		

		/* $data['mobile_no'] = '+9715';
        $data['landline_no'] = '+971' ;
        $data['email_token'] = str_random(30);
        $data['email']='robingnanaraj1986@gmail.com';
        
        $data['company_name']='robingnanaraj1986@gmail.com';



        Mail::to($data['email'])->send(new ForgetpasswordEmail($data));
        
		*/
        $data["hotel_featured"] = DB::table('hotels')
                                ->select('hotels.id', 'hotels.name', 'added_by', 'sub_heading', 'location', 'country', 'state', 'city', 'lat', 'long', 'primary_number', 'capacity', 'featured_image', 'description', 'summary', 'hotels.status', 'is_featured', 'hotels.is_deleted', 'grade', 'cities.name as city_name')
                                ->leftjoin('cities', 'city', '=', 'cities.id')
                                ->where('hotels.is_deleted', 0)
                                ->where('hotels.is_featured', 1)
								
								->where('hotels.status', 'ACTIVE')
								
								
								->orderBy('hotels.id', 'desc')
                                ->limit(4)
                                ->get();
								
					
		     $data["hotel_lists"] = DB::table('hotels')
                                ->select('hotels.id', 'hotels.name', 'added_by', 'sub_heading', 'location', 'country', 'state', 'city', 'lat', 'long', 'primary_number', 'capacity', 'featured_image', 'description', 'summary', 'hotels.status', 'is_featured', 'hotels.is_deleted', 'grade', 'cities.name as city_name')
                                ->leftjoin('cities', 'city', '=', 'cities.id')
                                ->where('hotels.is_deleted', 0)
								//->orderBy('hotels.id', 'asc')
								->where('hotels.status', 'ACTIVE')
								->orderBy('hotels.id', 'desc')
								

                              //  ->where('hotels.is_featured', 1)
                               // ->limit(4)
                                ->get();						
		
		
        $data['city'] = City::getAllApprovedCity();
        $data['event'] = EventType::getAllApprovedEventType();
		
		$data['supplierlist'] = SupplierType::getAllApprovedSupplierType();
		
		$data['event_social'] = EventType::getAllApprovedEventType_type('Social');
		
	
		
		$data['event_corporate'] = EventType::getAllApprovedEventType_type('Corporate');
		
		
				 $visitor_ids = DB::table('visitor')
	             ->select(DB::raw('SUM(hits) AS count'))
               
                //->where('visit_date', '=',  date('Y-m-d'))
				
				
                ->first();
				
				 $no_hotels = DB::table('hotels')
	             ->select(DB::raw('COUNT(id) AS count'))
               
                //->where('visit_date', '=',  date('Y-m-d'))
				
				->where('hotels.status', 'ACTIVE')
                ->first();
				
				
				 $no_venues = DB::table('hotels')
                               ->select(DB::raw('COUNT(hotels_sub_entity.id) AS count'))
							   ->leftjoin('hotels_sub_entity', 'hotel_id', '=', 'hotels.id')
                            
								->where('hotels.status', 'ACTIVE')
								->where('hotels_sub_entity.status', 'ACTIVE')
								
                                ->first();
								
								
								
								
				$no_suppliers = DB::table('suppliers')
	             ->select(DB::raw('COUNT(id) AS count'))
               
                //->where('visit_date', '=',  date('Y-m-d'))
				
				->where('suppliers.status', 'ACTIVE')
                ->first();
				
               $data["no_suppliers"]=$no_suppliers->count;	
				
				$data["no_venues"]=	$no_venues->count;			
				
				$data['no_hotels']=$no_hotels->count;
				
				$data['customer_visit']=$visitor_ids->count;
				
				//no_venues

             	  
		
        // dd($data);
        return view('front/home', $data);
    }

    public function getHotelsVenue($id)
    {
        $data['hotelsData'] = Hotel::getHotelViewByHotelId($id);
        $data['gallery_images'] = Hotel_image_gallery::getImagesByUsingHotelId($id);
        $data['hotels_sub_entity'] = DB::table('hotels_sub_entity')
                                    ->select('hotels_sub_entity.id', 'hotel_id', 'title', 'sub_title', 'include_type', 'feature_image', 'type_attributes.name as type_name')
                                    ->leftjoin('type_attributes', 'type', '=', 'type_attributes.id')
                                    ->where('hotels_sub_entity.status', 'active')
                                    ->where('hotel_id', $id)
                                    ->get();
        $data['hotelKey'] = HotelKeyAttribute::getAllHotelKeyAttributeById($id);
        $data['capacityList'] = HotelCapacityAttribute::getAllHotelCapacityAttributeById($id);
        $data['featureList'] = HotelFeatureAttribute::getAllHotelFeatureAttributeById($id);
        return view('front/FeaturedVenue/venue', $data);
    }

    public function addVenueFavorite($id)
    {
        $ispresent = User::find(Auth::guard('web')->user()->id);
        if ($ispresent) {
            $ispresent->favorite_venue = $ispresent->favorite_venue . " " . $id;
            $ispresent->save();
        }
        return back()->with('success', 'Favorite Added Successfully');
    }

    public function removeVenueFavorite($id)
    {
        $ispresent = User::find(Auth::guard('web')->user()->id);
        if ($ispresent) {
            $favs = str_replace($id, '', $ispresent->favorite_venue);
            $ispresent->favorite_venue = $favs;
            $ispresent->save();
        }
        return back()->with('success', 'Favorite Remove Successfully');
    }

    public function getHotelsVenueBook(Request $request)
    {
        $hid = $request['hid'];
        $id = $request['id'];
        $hotels_sub_entity = DB::table('hotels_sub_entity')
                            ->select('hotels_sub_entity.id', 'hotel_id', 'title', 'sub_title', 'feature_image', 'description', 'type_attributes.name as type_name')
                            ->leftjoin('type_attributes', 'type', '=', 'type_attributes.id')
                            ->where('hotels_sub_entity.status', 'active')
                            ->where('hotel_id', $hid)
                            ->where('hotels_sub_entity.id', $id)
                            ->get();

        $hotels_sub_entity_d = DB::table('include_hotel_capacity_meta_data')
                            ->select('include_hotel_capacity_meta_data.*', 'capacity_attributes.*')
                            ->leftjoin('capacity_attributes', 'capacity_attributes.id', '=', 'include_hotel_capacity_meta_data.capacity_attribute_id')
                            ->where('include_hotel_capacity_meta_data.hotels_sub_entity_id', $id)
                            ->get();

        $hotel_include_menu = DB::table('include_hotel_menu_meta_data')
                            ->select('id', 'hotels_sub_entity_id', 'title', 'image', 'doc_file')
                            ->where('is_deleted', 0)
                            ->where('hotels_sub_entity_id', $id)
                            ->get();

        $entityData = array();
        foreach ($hotels_sub_entity as $value) {
            $entityData = $value;
        }

        $entityData->capacityData = array();
        foreach ($hotels_sub_entity_d as $value) {
            array_push($entityData->capacityData, $value);
        }

        $entityData->menuList = array();
        foreach ($hotel_include_menu as $value) {
            array_push($entityData->menuList, $value);
        }

        // dd($entityData);
		
								

        return view('front/FeaturedVenue/book_venue', compact('entityData'));
    }

    // public function getHotelsVenueList()
    // {
        
    //     $data['hotelSearch'] = DB::table('hotels')
    //             ->select('hotels.*', 'hotels_sub_entity.*', 'cities.name as city_name', 'event_type.title as event_title')
    //             ->join('cities', 'hotels.city', '=', 'cities.id')
    //             ->join('hotels_sub_entity', 'hotels.id', '=', 'hotels_sub_entity.hotel_id')
    //             ->join('event_type', 'hotels_sub_entity.event_type', '=', 'event_type.id')
    //             ->join('include_hotel_capacity_meta_data', 'hotels_sub_entity.id', '=', 'include_hotel_capacity_meta_data.hotels_sub_entity_id')
    //             ->where('hotels_sub_entity.status', 'ACTIVE')
    //             ->Where('hotels.is_deleted', 0)
    //             ->distinct()
    //             ->get();
    //     $data['eventType'] = EventType::getAllApprovedEventType();
    //     $data['city'] = City::getAllApprovedCity();
    //     foreach ($data['hotelSearch'] as $value) {
    //         $cost = $value->cost;
    //         $discount = $value->discount;
    //         $price = $cost * $discount / 100;
    //         $getPrice = $cost - $price;
    //         $value->offeringPrice = $getPrice;
    //     };
    //     // dd($data);
    //     return view('front/FeaturedVenue/hotels', $data);
    // }
    public function getAllHotelsList()
    {
		
		
	
         $query= DB::table('hotels');
         $query->select('hotels.*','cities.name as city_name');
         $query->join('cities', 'hotels.city', '=', 'cities.id');
	//	 $query->join('hotels_sub_entity', 'hotels_sub_entity.hotel_id',  '=', 'hotels.id');
         $query->Where('hotels.status', 'ACTIVE');
         $query->Where('hotels.is_deleted', 0);
		 $query->where('hotels.status', 'ACTIVE');
		 $query->orderBy('hotels.id', 'desc');
		 
		


         $query->distinct();
         $results=$query->get();
								
								
		
		
	
		
		 $data['hotelList']	= $results;
		 
      
								
        $data['city'] = City::getAllApprovedCity();
		
		
		$data['event'] = EventType::getAllApprovedEventType();
		
	
		
		
		
		$data['location']='';
		
		$data['cityid']='';
		
		$data['event_type']='';
		
		$data['star']='';
		
		$data['guests']='';
		
		$data['price']='';
		$data['type']='';
    //    dd($data);
        return view('front/hotels/hotels', $data);
    }
	
	
	    public function getAllHotelsLists(Request $request)
    {
		
		
		$cityid = $request['city'];
		
		$event_type = $request['event_type'];
		
		$guests = $request['guests'];
		$price = $request['budget'];
		
	
         $query= DB::table('hotels');
         $query->select('hotels.*','cities.name as city_name');
         $query->join('cities', 'hotels.city', '=', 'cities.id');
		 $query->join('hotels_sub_entity', 'hotels_sub_entity.hotel_id',  '=', 'hotels.id');
         $query->Where('hotels.status', 'ACTIVE');
         $query->Where('hotels.is_deleted', 0);
		 
		 if($cityid !='')
		{
			$query->where('hotels.city', $cityid);
		}
		
		if($event_type !='')
		{
			//$query->whereRaw("hotels_sub_entity.event_type IN($event_type)");
			
			 $query->whereRaw("FIND_IN_SET('$event_type',hotels_sub_entity.event_type)");
		}
		
		if($guests !='')
		{
			//$query->where('hotels.grade', $star);
		}

        $query->orderBy('hotels.id', 'desc');
         $query->distinct();
         $results=$query->get();
								
								
		
		
	
		
		 $data['hotelList']	= $results;
		 
      
								
        $data['city'] = City::getAllApprovedCity();
		
		
		$data['event'] = EventType::getAllApprovedEventType();
		
	
		
		
		
		$data['location']='';
		
		$data['cityid']=$cityid;
		
		$data['event_type']=$event_type;
		
		$data['star']='';
		
		$data['guests']='';
		
		$data['price']='';
		$data['type']='';
    //    dd($data);
        return view('front/hotels/hotels', $data);
    }
    public function getHotelVenuesList($id)
    {
        $data['hotelList'] = DB::table('hotels')
                                ->select('hotels.*','cities.name as city_name')
                                ->join('cities', 'hotels.city', '=', 'cities.id')
                                ->where('hotels.id', '=', $id)
                                ->where('hotels.status', 'ACTIVE')
                                ->Where('hotels.is_deleted', 0)
                                ->distinct()
                                ->get();
								
		
		 
        $data['venueList'] = DB::table('hotels_sub_entity')
                                ->select('*')
                                ->where('hotel_id',$id)
                                ->where('hotels_sub_entity.status', 'ACTIVE') 
                                ->distinct()
                                ->get();
        $data['city'] = City::getAllApprovedCity();
        // dd($data);
        return view('front/FeaturedVenue/venueList', $data);
    }
	
	
	public function getHotelDetails($id)
	{
		$data['hotelsDetails'] = DB::table('hotels')
                                ->select('hotels.*','cities.name as city_name')
                                ->join('cities', 'hotels.city', '=', 'cities.id')
                                //->join('hotels_sub_entity', 'hotels.id', '=', 'hotels_sub_entity.hotel_id')
                                //->where('hotels_sub_entity.id', '=', $id)
                                //->where('hotels_sub_entity.status', 'ACTIVE')
								->where('hotels.status', 'ACTIVE')
								->where('hotels.id', '=', $id)
                                ->Where('hotels.is_deleted', 0)
                               // ->distinct()
                                ->first();
								
			
        $data['venus'] = DB::table('hotels_sub_entity')
                                ->where('hotels_sub_entity.hotel_id', '=', $id)
                                ->where('hotels_sub_entity.status', 'ACTIVE')
								->Where('hotels_sub_entity.is_deleted', 0)
                                ->get();
								
	
                                 //dd($data['facilities']->facilities);
		/*					
      if( $data['facilities']->facilities !== "")
      {
            $array = explode(",", $data['facilities']->facilities);
            $data['facilities']->facilities =  $array;
            foreach ($data['facilities']->facilities as $i=>$facility) {
                $data['facilities']->facilities[$i] = Facility::find($facility);
            }
      }
	  */
        $data['city'] = City::getAllApprovedCity();
        $data['includeHotelCapacity'] = IncludeHotelCapacity::getAllIncludeHotelCapacityData($id);
        $data['gallery_images'] = Hotel_image_gallery::getImagesByUsingHotelId($id);
       // $data['User'] = User::find(Auth::guard('web')->user()->id);
        /*$data['venue_ids'] = ltrim($data['User']->favorite_venue);
        $data['venue_ids'] = explode(" ", $data['venue_ids']);
        foreach($data['venue_ids'] as $venue_id) {
            if($venue_id == $id) {
                $data['isfavorite'] = true;
            } else 
                $data['isfavorite'] = false;
        }
		
	     */
		 
		// summary location  city_name  banner_img  featured_image
	
	        $data["hotel_featured"] = DB::table('hotels')
                                ->select('hotels.id', 'hotels.name', 'added_by', 'sub_heading', 'location', 'country', 'state', 'city', 'lat', 'long', 'primary_number', 'capacity', 'featured_image', 'description', 'summary', 'hotels.status', 'is_featured', 'hotels.is_deleted', 'grade', 'cities.name as city_name')
                                ->leftjoin('cities', 'city', '=', 'cities.id')
                                ->where('hotels.is_deleted', 0)
                                ->where('hotels.is_featured', 1)
								->where('hotels.status', 'ACTIVE')
                                ->limit(3)
                                ->get();
	  
		
        return view('front/hotels/hoteldetails', $data);
	}
	
	
	
	
	
	
	public function getVenueDetails($id)
	{
		
		
		
		
		
		$data['VenuesDetails'] = DB::table('hotels_sub_entity')
                                ->select('hotels_sub_entity.*')
                                
                              
                                ->where('hotels_sub_entity.id', '=', $id)
                               
                                ->first();
                                
                                
    		
		

        $hotels_id=$data['VenuesDetails']->hotel_id	;	
		
		
		
		
		 $visitor_ids = DB::table('visitor')
	             ->select('hits')
 
                ->where('ip', '=', $_SERVER['REMOTE_ADDR'])
                ->where('visit_date', '=',  date('Y-m-d'))
				
				->where('hotel_id', '=',  $hotels_id)
				
				->where('venue_id', '=',  $id)
				
                ->first();
				
		if(@$visitor_ids->hits !='')
		{
			$hits=$visitor_ids->hits+1;
			$hits_updated = DB::table('visitor')
              ->where('ip', '=', $_SERVER['REMOTE_ADDR'])
              ->where('visit_date', '=',  date('Y-m-d'))
			  ->where('hotel_id', '=',  $hotels_id)
				
			  ->where('venue_id', '=',  $id)
              ->update(['hits' => $hits, 'visit_time' => date('H:i:s')]);
			
		}
        else
        {			
				

        DB::table('visitor')->insert([
          'ip' => $_SERVER['REMOTE_ADDR'],
		  'visit_date' => date('Y-m-d'),
		  'visit_time' => date('H:i:s'),
		  'hotel_id' => $hotels_id,
		  'venue_id' => $id,
          'hits' =>1 
        ]);
		}
		
		
								
     	
		
		
		$data['hotels'] = DB::table('hotels')
                                ->select('hotels.*','cities.name as city_name')
                                ->join('cities', 'hotels.city', '=', 'cities.id')
                                ->join('hotels_sub_entity', 'hotels.id', '=', 'hotels_sub_entity.hotel_id')
                                //->where('hotels_sub_entity.id', '=', $id)
                                //->where('hotels_sub_entity.status', 'ACTIVE')
								->where('hotels.status', 'ACTIVE')
								->where('hotels.id', '=', $hotels_id)
                                ->Where('hotels.is_deleted', 0)
                               // ->distinct()
                                ->first();
								
								
		
		
        $data['venus'] = DB::table('hotels_sub_entity')
                                ->where('hotels_sub_entity.hotel_id', '=', $id)
                                ->where('hotels_sub_entity.status', 'ACTIVE')
                                ->get();
								
								
								
								
		 $data['cancelrule'] = DB::table('cancelationrules')
                                ->where('cancelationrules.hotelid', '=', $hotels_id)
                               // ->where('hotels_sub_entity.status', 'ACTIVE')
                                ->first();

	
								
		$data["menus"] = DB::table('include_hotel_menu_meta_data')
                            ->select('id', 'hotels_sub_entity_id', 'title', 'menu_type','category_id','image', 'doc_file','cost','discount')
                            ->where('is_deleted', 0)
                            ->where('hotels_sub_entity_id', $id)
                            ->get();						
								
	
	  
	   
		
		
	  
	 
	    if( @$data['VenuesDetails']->facilities !== "")
      {
            $facilities_datas = explode(",", $data['VenuesDetails']->facilities);
           // $facilities =  $array;
			$data['facility'][0]='';
			$i=1;
            foreach ($facilities_datas as $facility) {
			
			  if( is_numeric($facility))
			  {
			 
                $results = Facility::find($facility);
				 if($results  !='')
				 {
				 $data['facility'][$i]=@$results->title; 
				 }
			  }
				$i++;
            }
			
      }
	  
	  	    if( @$data['VenuesDetails']->event_type !== "")
      {
		  
            $eventtype_datas = explode(",", $data['VenuesDetails']->event_type);
			
			
			
           // $facilities =  $array;
			
			$i=1;
            foreach ($eventtype_datas as $eventtype) {
			
                $results = EventType::find($eventtype);
                
                if($results !='')
				
				 {
				 $data['eventtype'][$i]=$results->title; 
				 }
				
				$i++;
            }
			
      }
	  
	 
	  
	
	  
        $data['city'] = City::getAllApprovedCity();
        $data['includeHotelCapacity'] = IncludeHotelCapacity::getAllIncludeHotelCapacityData($id);
        $data['gallery_images'] = Hotel_image_venue::getImagesByUsingHotelId($id);
       // $data['User'] = User::find(Auth::guard('web')->user()->id);
        /*$data['venue_ids'] = ltrim($data['User']->favorite_venue);
        $data['venue_ids'] = explode(" ", $data['venue_ids']);
        foreach($data['venue_ids'] as $venue_id) {
            if($venue_id == $id) {
                $data['isfavorite'] = true;
            } else 
                $data['isfavorite'] = false;
        }
		
	     */
		 
		// summary location  city_name  banner_img  featured_image
	
	        $data["hotel_featured"] = DB::table('hotels')
                                ->select('hotels.id', 'hotels.name', 'added_by', 'sub_heading', 'location', 'country', 'state', 'city', 'lat', 'long', 'primary_number', 'capacity', 'featured_image', 'description', 'summary', 'hotels.status', 'is_featured', 'hotels.is_deleted', 'grade', 'cities.name as city_name')
                                ->leftjoin('cities', 'city', '=', 'cities.id')
                                ->where('hotels.is_deleted', 0)
                                ->where('hotels.is_featured', 1)
								->where('hotels.status', 'ACTIVE')
                                ->limit(3)
                                ->get();
								
								
		 $data["capacities"] = DB::table('include_hotel_capacity_meta_data')
                                ->select('include_hotel_capacity_meta_data.*', 'capacity_attributes.title as ctitle', 'capacity_attributes.image as image')
                                ->leftjoin('capacity_attributes', 'capacity_attributes.id', '=', 'include_hotel_capacity_meta_data.capacity_attribute_id')
                                ->where('include_hotel_capacity_meta_data.hotels_sub_entity_id', $id)
                               
                                ->get();

								
								
			 
		 
		 $data['start_date']= Session::get('start_date');
		 
		 $data['start_time']= Session::get('start_time');
		 
		 $data['end_date']= Session::get('end_date');
		 
		 $data['end_time']= Session::get('end_time');
		 
		 $data['no_guests']= Session::get('no_guests');
		 
		 $data['event_title']=Session::get('event_title');
		 
		 $date=@$_GET['date'];
		 if($date !='')
		 {
			 $data['start_date']=date('Y-m-d', strtotime($date));
			 $data['end_date']=date('Y-m-d', strtotime($date));
		 }
		 
		
		
		 
		 $data['vid']= Session::get('vid');
		 $data['hid']= Session::get('hid');
		 
						
						
		  $data['menu_types'] = DB::table('menu_types')
                            ->select('id', 'title')
                            ->where('is_deleted', 0)
                           // ->where('hotels_sub_entity_id', $id)
                            ->get();
							
	 $data['menu_category'] = DB::table('menu_category')
                            ->select('id', 'title')
                            ->where('is_deleted', 0)
                           ->where('menu_type', 1)
                            ->get();	


       $data["packages"] = DB::table('hotel_package_venue')
                            ->select('id', 'name', 'pdf')
                           
                            ->where('hotel_sub_entity_id', $id)
                            ->get();								
	 
		
        return view('front/hotels/venuedetails', $data);
		
	}
	
	
	public function getmenudetails(Request $request)
	{
		
		$name= $request->name;
		
		$id= $request->id;
		
		$vid= $request->vid;
		
		$data['name']=$name;
		
		
			$data["menus"] = DB::table('include_hotel_menu_meta_data')
                            ->select('id', 'hotels_sub_entity_id', 'title', 'menu_type','category_id','image', 'doc_file','cost','discount')
                            ->where('is_deleted', 0)
                            ->where('hotels_sub_entity_id', $vid)
							->where('category_id', $id)
                            ->get();						
								
		
		
		return view('front/hotels/menulist', $data);
    }		
	
	
	
	
		public function getbookmenudetails(Request $request)
	{
		
		$name= $request->name;
		
		$id= $request->id;
		
		$vid= $request->vid;
		
		$data['name']=$name;
		
		
			$data["menus"] = DB::table('include_hotel_menu_meta_data')
                            ->select('id', 'hotels_sub_entity_id', 'title', 'menu_type','category_id','image', 'doc_file','cost','discount')
                            ->where('is_deleted', 0)
                            ->where('hotels_sub_entity_id', $vid)
							->where('category_id', $id)
                            ->get();						
								
		
		
		return view('front/hotels/bookmenulist', $data);
    }	
	
	
		public function getEventtypes($id)
	{
		$data['eventtype'] = DB::table('event_type')
                                ->select('event_type.*')
                                ->Where('event_type.id', $id)
                                ->Where('event_type.is_deleted', 0)
                               // ->distinct()
                                ->first();
								
	
								
		 return view('front/hotels/eventtypes', $data);
	}
	
	
	public function getIndoorVenues ($id)
	{
		
          $data['location']='';
		
		$data['cityid']='';
		
		$data['event_type']=$id;
		
		$data['star']='';
		
		$data['guests']='';
		
		$data['price']='';	
		$data['type']='';

        	$data['eventtype'] = DB::table('event_type')
                                ->select('event_type.*')
                                ->Where('event_type.id', $id)
                                ->Where('event_type.is_deleted', 0)
                               // ->distinct()
                                ->first();

								
        $data['city'] = City::getAllApprovedCity();
		
		
		$data['event'] = EventType::getAllApprovedEventType();
		
	
							$ids=trim($id);
							
							
							
		$data['hotelList'] = 
		                     DB::table('hotels')
		                     ->select('cities.name as city_name', 'hotels.name as hname'
							 ,'hotels.location' ,'hotels.grade', 'hotels.id as id', 'hotels.featured_image','hotels.description')
							  
							   
							  ->join('hotels_sub_entity', 'hotels_sub_entity.hotel_id',  '=', 'hotels.id')
								
								
							   ->join('cities', 'hotels.city', '=', 'cities.id')
							   ->where('hotels_sub_entity.include_type', 'indoor')
							  ->where('hotels.status', 'ACTIVE')
							    //->whereRaw("hotels_sub_entity.event_type IN($ids)")
								 ->whereRaw("FIND_IN_SET('$ids',hotels_sub_entity.event_type)")
								->distinct()
                              ->get();

       		
	
								
			
		$data['type']		='indoor'	;

       $data['event_types']		='Indoor'	;		
								
    //    dd($data);
        return view('front/hotels/venueslist', $data);
	}
	
	
	
	
	
		public function getOutdoorVenues ($id)
	{
		
	
	     $data['location']='';
		
		$data['cityid']='';
		
		$data['event_type']=$id;
		
		$data['star']='';
		
		$data['guests']='';
		
		$data['price']='';

        $data['type']='outdoor'; 
        	$data['eventtype'] = DB::table('event_type')
                                ->select('event_type.*')
                                ->Where('event_type.id', $id)
                                ->Where('event_type.is_deleted', 0)
                               // ->distinct()
                                ->first();

								
        $data['city'] = City::getAllApprovedCity();
		
		
		$data['event'] = EventType::getAllApprovedEventType();
		
	
							$ids=trim($id);
							
		/*					
							
		$data['hotelList'] = DB::table('hotels_sub_entity')
		                     ->select('hotels_sub_entity.*','cities.name as city_name', 'hotels.name as hname'
							 ,'hotels.location' ,'hotels.grade' ,'hotels.id as hid')
							   ->join('hotels', 'hotels.id',  '=', 'hotels_sub_entity.hotel_id')
							   ->join('cities', 'hotels.city', '=', 'cities.id')
							   ->where('hotels_sub_entity.include_type', 'outdoor')
							    ->whereRaw("hotels_sub_entity.event_type IN($ids)")
                              ->get();		
        */


        	$data['hotelList'] = 
		                     DB::table('hotels')
		                     ->select('cities.name as city_name', 'hotels.name as hname'
							 ,'hotels.location' ,'hotels.grade', 'hotels.id as id', 'hotels.featured_image','hotels.description')
							  
							   
							  ->join('hotels_sub_entity', 'hotels_sub_entity.hotel_id',  '=', 'hotels.id')
								
								
							   ->join('cities', 'hotels.city', '=', 'cities.id')
							   ->where('hotels_sub_entity.include_type', 'outdoor')
							   ->where('hotels.status', 'ACTIVE')
							   ->whereRaw("FIND_IN_SET('$ids',hotels_sub_entity.event_type)")

							    //->whereRaw("hotels_sub_entity.event_type IN($ids)")
								->distinct()
                              ->get();
		
	
								
			
		$data['event_types']		='Outdoor'	;			
								
    //    dd($data);
        return view('front/hotels/venueslist', $data);
	}
	
	public function getAllvenuesLists(Request $request)
    {
        // dd($request);
        $location = $request['location'];
		$cityid = $request['city'];
		
		$event_type = $request['event_type'];
		$star = $request['star'];
		$guests = $request['guests'];
		$price = $request['price'];
		
		$type = $request['type'];
		
		$data['location']=$location;
		
		$data['cityid']=$cityid;
		
		$data['event_type']=$event_type;
		
		$data['star']=$star;
		
		$data['guests']=$guests;
		
		$data['price']=$price;
		
		$data['type']=$type;
		
		
		
		
			$data['eventtype'] = DB::table('event_type')
                                ->select('event_type.*')
                               // ->Where('event_type.id', $id)
                                ->Where('event_type.is_deleted', 0)
                               // ->distinct()
                                ->first();

								
        $data['city'] = City::getAllApprovedCity();
		
		
		$data['event'] = EventType::getAllApprovedEventType();
		
	
							//$ids=trim($id);
							
			/*				
							
		 $query= DB::table('hotels_sub_entity');
		 $query->select('hotels_sub_entity.*','cities.name as city_name', 'hotels.name as hname'
							 ,'hotels.location' ,'hotels.grade' ,'hotels.id as hid');
		$query->join('hotels', 'hotels.id',  '=', 'hotels_sub_entity.hotel_id');
		$query ->join('cities', 'hotels.city', '=', 'cities.id');
		*/
		
		
		$query= DB::table('hotels');
		 $query->select('cities.name as city_name', 'hotels.name as hname'
							 ,'hotels.location' ,'hotels.grade', 'hotels.id as id', 'hotels.featured_image','hotels.description');
		$query->join('hotels_sub_entity', 'hotels_sub_entity.hotel_id',  '=', 'hotels.id');
		$query ->join('cities', 'hotels.city', '=', 'cities.id');
		
		
		
		$query->where('hotels.status', 'ACTIVE');
		
		if($cityid !='')
		{
			$query->where('hotels.city', $cityid);
		}
		
		if($event_type !='')
		{
			//$query->whereRaw("hotels_sub_entity.event_type IN($event_type)");
			
			$query->whereRaw("FIND_IN_SET('$event_type',hotels_sub_entity.event_type)");
		}
		
		if($type !='')
		{
			$query->where('hotels_sub_entity.include_type', $type);
		}
		
		if($star !='')
		{
			$query->where('hotels.grade', $star);
		}
		
		
		if($location !='')
		{
			$query->where('hotels.location', 'LIKE',"%{$location}%");
		}
		
	
		
		
		if($price !='')
		{
			$prices=explode("-",$price);
			
			$start_price= $prices[0];
			
			$start_price = str_replace('AED', '', $start_price);
			
			
			$end_price= $prices[1];
			
			$end_price = str_replace('AED', '', $end_price);
			

			$query->whereBetween('hotels_sub_entity.cost', [$start_price, $end_price]);

			//$query->where('hotels_sub_entity.include_type', $star);
		}
		
		
		
		if($guests !='')
		{
			//$query->where('hotels.grade', $star);
		}
		
		
		
		
		
		
		
							  // ->where('hotels_sub_entity.include_type', 'outdoor')
							  //  ->whereRaw("hotels_sub_entity.event_type IN($ids)")
        $results=$query->distinct()->get();							 
	    $data['hotelList']=$results;
								
			
				
								
    //    dd($data);
        return view('front/hotels/searchvenueslist', $data);
		
		
		
	
	}
	
	

		// Booking venue details
	
	
	//public function Bookvenues(Request $request)
	public function Bookvenues(Request $request)
	{
		
		if(Auth::guard('web')->user())
		{
			
			$data['start_date']=$request->start_date;
			
			$data['start_time']=$request->start_time;
			
			$data['end_date']=$request->end_date;
			
			$data['end_time']=$request->end_time;
			
			$data['no_guests']=$request->no_guests;
			
			$data['vid']=$request->vid;
			
			$data['hid']=$request->hid;
			
			$data['event_title']=$request->event_title;
			
			
			$start_date=strtotime($request->start_date);
			$end_date = strtotime($request->end_date);
			$datediff = $end_date - $start_date;

			$no_of_dates=round($datediff / (60 * 60 * 24));
			$data['no_of_dates']=$no_of_dates+1;

			
				$data['VenuesDetails'] = DB::table('hotels_sub_entity')
                                ->select('hotels_sub_entity.*')
                                ->where('hotels_sub_entity.id', '=', $request->vid)
                                ->first();
								
			
			$data['venus'] = DB::table('hotels_sub_entity')
                                ->where('hotels_sub_entity.hotel_id', '=', $request->vid)
                                ->where('hotels_sub_entity.status', 'ACTIVE')
                                ->get();
								
			  $data['menu_types'] = DB::table('menu_types')
                            ->select('id', 'title')
                            ->where('is_deleted', 0)
                           // ->where('hotels_sub_entity_id', $id)
                            ->get();
							
	 $data['menu_category'] = DB::table('menu_category')
                            ->select('id', 'title')
                            ->where('is_deleted', 0)
                           ->where('menu_type', 1)
                            ->get();							
								
		$data["menus"] = DB::table('include_hotel_menu_meta_data')
                            ->select('id', 'hotels_sub_entity_id', 'title', 'doc_file','cost','discount')
                            ->where('is_deleted', 0)
                            ->where('hotels_sub_entity_id', $request->vid)
                            ->get();
							
			$user=Auth::guard('web')->user();
			
			$data['user']=$user;
			
			$city = DB::table('cities')
                                ->select('name')
                                ->where('id', '=', $user->city)
                                ->first();
            $data['city']=$city->name;
			
			
			$data["capacities"] = DB::table('include_hotel_capacity_meta_data')
                                ->select('include_hotel_capacity_meta_data.*', 'capacity_attributes.title as ctitle', 'capacity_attributes.image as image')
                                ->leftjoin('capacity_attributes', 'capacity_attributes.id', '=', 'include_hotel_capacity_meta_data.capacity_attribute_id')
                                ->where('include_hotel_capacity_meta_data.hotels_sub_entity_id', $request->vid)
                               
                                ->get();
	    if( @$data['VenuesDetails']->facilities !== "")
      {
            $facilities_datas = explode(",", $data['VenuesDetails']->facilities);
           // $facilities =  $array;
			$data['facility'][0]='';
			$i=1;
            foreach ($facilities_datas as $facility) {
			
			  if( is_numeric($facility))
			  {
			 
                $results = Facility::find($facility);
				 if($results  !='')
				 {
				 $data['facility'][$i]=@$results->title; 
				 }
			  }
				$i++;
            }
			
      }								
	  
          	$start_date=date("Y-m-d", strtotime($request->start_date))." ".$request->start_time; 
			
			
			$end_date=date("Y-m-d", strtotime($request->end_date))." ".$request->end_time; 

            		

            $query= DB::table('bookings');
		    $query->select('id');
			
		
		
		    $query->where('venue_id', $request->vid);
		
		
		    $query->whereBetween('start_time', [$start_date, $end_date]);
		
		    $query->orwhereBetween('end_time', [$start_date, $end_date]);	

             
            $booking_check=$query->get();	
           
			if(count($booking_check) !=0)
			{
					
             //$request->session()->put('book_url', $vid);
			
			$request->session()->put('start_date', $request->start_date);
			
			$request->session()->put('start_time', $request->start_time);
			$request->session()->put('end_date', $request->end_date);
			$request->session()->put('end_time', $request->end_time);
			$request->session()->put('no_guests', $request->no_guests);
			$request->session()->put('vid', $request->vid);
			$request->session()->put('hid', $request->hid);
			
			$request->session()->put('event_title', $request->event_title);					
				  Session::flash('message', 'Selected Dates already Booked, Please select anothe  Dates'); 

		
		          return redirect('/venuedetails/'.$request->vid)->with('alert-danger', 'Selected Dates already Booked, Please select anothe  Dates');
			}
          		
				
			
		 $data['cancelrule'] = DB::table('cancelationrules')
                                ->where('cancelationrules.hotelid', '=', $request->hid)
                               // ->where('hotels_sub_entity.status', 'ACTIVE')
                                ->first();	
							
							
			return view('front/hotels/book_form', $data);
			
			
		}
		else
		{
			
			$vid=$request->vid;
			//Session::set('book_url', $vid);
			
			$request->session()->put('book_url', $vid);
			
			$request->session()->put('start_date', $request->start_date);
			
			$request->session()->put('start_time', $request->start_time);
			$request->session()->put('end_date', $request->end_date);
			$request->session()->put('end_time', $request->end_time);
			$request->session()->put('no_guests', $request->no_guests);
			$request->session()->put('vid', $request->vid);
			$request->session()->put('hid', $request->hid);
			
			$request->session()->put('event_title', $request->event_title);
			
			
		
			
			 return redirect('/user/login');

		}
	}
	
	
		//public function Bookvenues(Request $request)
	public function Savebookvenues(Request $request)
	{
		
		if(Auth::guard('web')->user())
		{
			
			$menu_ids=$request->menu_total_price;
			
			$menu_id=0;
				
			$menu_price=0;
			
			if($menu_ids !='')
			{	
			$menu_ids=array_filter($menu_ids);
			
			
			foreach($menu_ids as $key => $value) {
				
				$menu_id=$key;
				
				$menu_price=$value;
				

            }
			}
		
			
			
			
			$no_of_days=$request->no_of_days;
			
			$total_price=$request->total_price;
			
			$venue_price=$request->venue_price;
			
			$cid=$request->cid;
			
			
			$start_date=date("Y-m-d", strtotime($request->start_date))." ".$request->start_time; 
			
			$end_date=date("Y-m-d", strtotime($request->end_date))." ".$request->end_time; 
           			
			
			
			$data['no_guests']=$request->no_guests;
			
			$data['vid']=$request->vid;
			
			$data['hid']=$request->hid;
			
			$data['event_title']=$request->event_title;
			
			
			$facility=@$request->facility; 
			
			if($facility !='')
			{
			
			$facility = implode(',', $facility);
			}
			
			

            		

            $query= DB::table('bookings');
		    $query->select('id');
			
		
		
		    $query->where('venue_id', $request->vid);
		
		
		    $query->whereBetween('start_time', [$start_date, $end_date]);
		
		    $query->orwhereBetween('end_time', [$start_date, $end_date]);	

             
            $booking_check=$query->get();	
           
			if(count($booking_check) !=0)
			{
					
             //$request->session()->put('book_url', $vid);
			
			$request->session()->put('start_date', $request->start_date);
			
			$request->session()->put('start_time', $request->start_time);
			$request->session()->put('end_date', $request->end_date);
			$request->session()->put('end_time', $request->end_time);
			$request->session()->put('no_guests', $request->no_guests);
			$request->session()->put('vid', $request->vid);
			$request->session()->put('hid', $request->hid);
			
			$request->session()->put('event_title', $request->event_title);					
				  Session::flash('message', 'Selected Dates already Booked, Please select anothe  Dates'); 

		
		          return redirect('/venuedetails/'.$request->vid)->with('alert-danger', 'Selected Dates already Booked, Please select anothe  Dates');
			}
			else
			{

            
			
			   //dd($request);
           $hotelsBooking= Booking::create([
            'hotel_id' => $request->hid,
            'venue_id' => $request->vid,
            'event_title' => $request->event_title,
            'is_booked' => 1,
            'start_time' => $start_date,
			
			'end_time' => $end_date,
            'customer_id' => $cid,
            'no_of_days' => $request->no_of_days,
            'menu_id' => $menu_id,
            'menu_price' => $menu_price,
			'venue_price' => $request->venue_price,
            'total_price' => $request->total_price,
			'capacities' => @$request->capacitiy_id,
			'facilities' => $facility
        ]);
		 
		 
		 
		 
      
			  //$book_id=$hotelsBooking->lastInsertId();
			 $empty='';
			  
			  	$request->session()->put('book_url', $empty);
			
			$request->session()->put('start_date', $empty);
			
			$request->session()->put('start_time', $empty);
			$request->session()->put('end_date', $empty);
			$request->session()->put('end_time', $empty);
			$request->session()->put('no_guests', $empty);
			$request->session()->put('vid', $empty);
			$request->session()->put('hid', $empty);
			
			$request->session()->put('event_title', $empty);
			
			
          	   $book_id=$hotelsBooking->id;
							
							
									/* $data['mobile_no'] = '+9715';
        $data['landline_no'] = '+971' ;
        $data['email_token'] = str_random(30);
        $data['email']='robingnanaraj1986@gmail.com';
        
        $data['company_name']='robingnanaraj1986@gmail.com';



        Mail::to($data['email'])->send(new BookingEmail($data));
        
		*/
		
		 
		
		
				 $data["booking"] = DB::table('bookings as b')
                                ->select('b.id', 'b.hotel_id', 'h.name as hname','b.venue_id', 'b.event_title', 'b.start_time', 'b.end_time', 
								'b.customer_id', 'b.no_of_days', 'b.menu_id', 'b.menu_price', 'b.venue_price', 
								'b.total_price','v.title as vname' ,'b.capacities','b.facilities', 'u.name as cname','u.area','u.email','u.mobile',
								'm.company_name as mname','m.email as memail','m.area as mlocation', 'm.mobile_no as mmobile')
                                ->leftjoin('hotels_sub_entity as v', 'v.id', '=', 'b.venue_id')
								
								->leftjoin('hotels as h', 'h.id', '=', 'b.hotel_id')
								
								->leftjoin('users as u', 'u.id', '=', 'b.customer_id')
								
								->leftjoin('merchants as m', 'm.id', '=', 'h.if_is_merchant_id')
								
                                ->where('b.id', $book_id)
                               
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
		
		$data['email']=$bookings->memail;
		$data['type']='hotel';
		
		 Mail::to('robingnanaraj1986@gmail.com')->send(new BookingEmail($data));
		 Mail::to($data['email'])->send(new BookingEmail($data));
		 
		 $data['type']='customer';
		 
		 $data['email']=$bookings->email;
		 
		  Mail::to('robingnanaraj1986@gmail.com')->send(new BookingEmail($data));
		 
		 Mail::to($data['email'])->send(new BookingEmail($data));
		
		
		
		 //Mail::to('sameratat@gmail.com')->send(new BookingEmail($data));
		
		
		 $data['type']='admin';
		
		 Mail::to('robingnanaraj1986@gmail.com')->send(new BookingEmail($data));
		  
		  Mail::to('antoarther@gmail.com')->send(new BookingEmail($data));
		
				
				 Session::flash('message', 'Venue Booked Successfully'); 

		
		return redirect('/bookingdetails/'.$book_id)->with('success', ' Venue Booked Successfully');
			}		
			//return view('front/hotels/booking', $data);
		}	
			
		
	
	}
	
	
	
	
	public function getBookingdetails($id)
	{
		
		$data["booking"] = DB::table('bookings')
                                ->select( 'hotels.name as hname','hotels_sub_entity.feature_image', 'hotels_sub_entity.title as vname', 
								'include_hotel_menu_meta_data.title as mname',
								'users.name as cname','users.email as cemail',
								'users.country as country','users.area as carea','cities.name as cityname','bookings.*' )
								->leftjoin('hotels', 'hotels.id', '=', 'bookings.hotel_id')
								->leftjoin('hotels_sub_entity', 'hotels_sub_entity.id', '=', 'bookings.venue_id')
                                ->leftjoin('users', 'users.id', '=', 'bookings.customer_id')
                                ->leftjoin('include_hotel_menu_meta_data', 
								'include_hotel_menu_meta_data.id', '=', 'bookings.menu_id')
								 ->leftjoin('cities', 'cities.id', '=', 'users.city')
								->where('bookings.id', $id)
                                ->first();
								
				
		return view('front/hotels/booking', $data);			      			
				
								
	}
	
	
	
	
	
	public function getCalendar($id)
	{
		 $data['bookings'] = Booking::where('venue_id', $id)->get();
		
		$data['VenuesDetails'] = DB::table('hotels_sub_entity')
                                ->select('hotels_sub_entity.*')
                                
                              
                                ->where('hotels_sub_entity.id', '=', $id)
                               
                                ->first();
		 $data["hotel_featured"] = DB::table('hotels')
                                ->select('hotels.id', 'hotels.name', 'added_by', 'sub_heading', 'location', 'country', 'state', 'city', 'lat', 'long', 'primary_number', 'capacity', 'featured_image', 'description', 'summary', 'hotels.status', 'is_featured', 'hotels.is_deleted', 'grade', 'cities.name as city_name')
                                ->leftjoin('cities', 'city', '=', 'cities.id')
                                ->where('hotels.is_deleted', 0)
                                ->where('hotels.is_featured', 1)
                                ->limit(3)
                                ->get();	
        $data['venue_id']=$id;								
		 
		return view('front/hotels/calendar', $data);	
	}
	
	
	
	
	
    public function getHotelVenuesDetails($id)
    {
        $data['venueDetails'] = DB::table('hotels')
                                ->select('hotels.*', 'hotels_sub_entity.*','cities.name as city_name')
                                ->join('cities', 'hotels.city', '=', 'cities.id')
                                ->join('hotels_sub_entity', 'hotels.id', '=', 'hotels_sub_entity.hotel_id')
                                ->where('hotels_sub_entity.id', '=', $id)
                                ->where('hotels_sub_entity.status', 'ACTIVE')
                                ->Where('hotels.is_deleted', 0)
                                ->distinct()
                                ->get();
        $data['facilities'] = DB::table('hotels_sub_entity')
                                ->where('hotels_sub_entity.id', '=', $id)
                                ->where('hotels_sub_entity.status', 'ACTIVE')
                                ->first();
                                // dd($data['facilities']);
      if( $data['facilities']->facilities !== "")
      {
            $array = explode(",", $data['facilities']->facilities);
            $data['facilities']->facilities =  $array;
            foreach ($data['facilities']->facilities as $i=>$facility) {
                $data['facilities']->facilities[$i] = Facility::find($facility);
            }
      }
        $data['city'] = City::getAllApprovedCity();
        $data['includeHotelCapacity'] = IncludeHotelCapacity::getAllIncludeHotelCapacityData($id);
        $data['gallery_images'] = Hotel_image_gallery::getImagesByUsingHotelId($id);
        $data['User'] = User::find(Auth::guard('web')->user()->id);
        $data['venue_ids'] = ltrim($data['User']->favorite_venue);
        $data['venue_ids'] = explode(" ", $data['venue_ids']);
        foreach($data['venue_ids'] as $venue_id) {
            if($venue_id == $id) {
                $data['isfavorite'] = true;
            } else 
                $data['isfavorite'] = false;
        }
        // dd($data);
        return view('front/FeaturedVenue/venueListDetails', $data);
    }
    public function getSearchVenuesList(Request $request)
    {
        // dd($request);
        // $id = $request->id;
        $data['searchVenue'] = DB::table('hotels')
                                ->select('hotels.*', 'hotels_sub_entity.*', 'cities.name as city_name', 'event_type.title as event_title')
                                ->join('cities', 'hotels.city', '=', 'cities.id')
                                ->join('hotels_sub_entity', 'hotels.id', '=', 'hotels_sub_entity.hotel_id')
                                ->join('event_type', 'hotels_sub_entity.event_type', '=', 'event_type.id')
                                // ->where('hotels_sub_entity.event_type', '=', $id)
                                ->where('hotels_sub_entity.status', 'ACTIVE')
                                ->Where('hotels.is_deleted', 0)
                                ->get();
        $data['city'] = City::getAllApprovedCity();
        // dd($data);
        return view('front/FeaturedVenue/searchVenue',$data);
    }
  
    public function getSearchHotelList(Request $request)
    {
        // dd($request);
        $value1 = $request['Category'];
        $value2 = $value1 + 200;
        $event_id = $request['type_of_venue'];
        $city = $request['location'];
        $where = "";
        if (!empty($event_id)) {
            $where .= "AND hotels_sub_entity.event_type = '" . $event_id . "'";
        }
        if (!empty($city)) {
            $where .= " AND hotels.city = '" . $city . "'";
        }
        $data['hotelSearch'] = DB::table('hotels')
                                ->select('hotels.*', 'hotels_sub_entity.*', 'cities.name as city_name')
                                ->join('cities', 'hotels.city', '=', 'cities.id')
                                ->join('hotels_sub_entity', 'hotels.id', '=', 'hotels_sub_entity.hotel_id')
                                ->join('event_type', 'hotels_sub_entity.event_type', '=', 'event_type.id')
                                ->join('include_hotel_capacity_meta_data', 'hotels_sub_entity.id', '=', 'include_hotel_capacity_meta_data.hotels_sub_entity_id')
                                ->where('hotels_sub_entity.event_type', '=', $event_id)
                                ->where('hotels.city', $city)
                                ->whereBetween('include_hotel_capacity_meta_data.capacity_value', [$value1, $value2])
                                ->where('hotels_sub_entity.status', 'ACTIVE')
                                ->Where('hotels.is_deleted', 0)
                                ->distinct()
                                ->get();
        $data['eventType'] = EventType::getAllApprovedEventType();
        $data['city'] = City::getAllApprovedCity();
        $data['venue'] = $request['type_of_venue'];
        $data['Location'] = $request['location'];
        $data['category'] = $request['Category'];
        $data['category2'] = $value1 + 200;
        foreach ($data['hotelSearch'] as $value) {
            $cost = $value->cost;
            $discount = $value->discount;
            $price = $cost * $discount / 100;
            $getPrice = $cost - $price;
            $value->offeringPrice = $getPrice;
        }
        return view('front/FeaturedVenue/searchListHotel', $data);
    }
    public function venueEnquirySubmit(Request $request)
    {
        //dd($request);
        $hotelsEnquiry = HotelsEnquiry::create([
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'mobile_no' => $request['mobile_no'],
            'event_type_id' => $request['event_type_id'],
            'message' => $request['message']
        ]);
        return response()->json(['message' => 'Saved successfully'], 200);
    }

    public function getHotelsByEvent($id)
    {
        $data['hotelSearch'] = DB::table('hotels')
            ->select('hotels.*', 'hotels_sub_entity.*', 'cities.name as city_name', 'event_type.title as event_title')
            ->join('cities', 'hotels.city', '=', 'cities.id')
            ->join('hotels_sub_entity', 'hotels.id', '=', 'hotels_sub_entity.hotel_id')
            ->join('event_type', 'hotels_sub_entity.event_type', '=', 'event_type.id')
            ->where('hotels_sub_entity.event_type', '=', $id)
            ->where('hotels_sub_entity.status', 'ACTIVE')
            ->Where('hotels.is_deleted', 0)
            ->distinct()
            ->get();

        //dd($data['hotelSearch']);
        $data['city'] = City::getAllApprovedCity();
        $data['eventType'] = EventType::getAllApprovedEventType();

        foreach ($data['hotelSearch'] as $value) {
            $cost = $value->cost;
            $discount = $value->discount;
            $price = $cost * $discount / 100;
            $getPrice = $cost - $price;
            $value->offeringPrice = $getPrice;
        }
//        dd($data);
        return view('front/FeaturedVenue/searchListHotel', $data);
    }
    public function getHotelsSupplierList()
    {
        $data['supplierList'] = DB::table('suppliers')
            ->select('suppliers.*', 'supplier_profile.*', 'cities.name as city_name')
            ->join('supplier_profile', 'suppliers.id', '=', 'supplier_profile.id')
            ->join('cities', 'supplier_profile.city', '=', 'cities.id')
            ->where('suppliers.status', 'ACTIVE')
            ->Where('supplier_profile.is_deleted', 0)
            ->distinct()
            ->get();
        $data['city'] = City::getAllApprovedCity();
        return view('front/FeaturedVenue/supplierList', $data);
    }
    public function getSupplierProductList($id)
    {
        $data['supplierList'] = DB::table('suppliers')
                ->select('suppliers.*', 'supplier_profile.*', 'cities.name as city_name')
                ->join('supplier_profile', 'suppliers.id', '=', 'supplier_profile.id')
                ->join('cities', 'supplier_profile.city', '=', 'cities.id')
                ->where('supplier_profile.id', '=', $id)
                ->where('suppliers.status', 'ACTIVE')
                ->Where('supplier_profile.is_deleted', 0)
                ->distinct()
                ->get();
        $data['productList'] = DB::table('supplier_profile')
                ->select('supplier_products.*')
                ->join('supplier_products', 'supplier_profile.id', '=', 'supplier_products.supplier_id')
                ->where('supplier_products.supplier_id', '=', $id)
                ->Where('supplier_profile.is_deleted', 0)
                ->whereOr('supplier_products.status', 'ACTIVE')
                ->distinct()
                ->get();
        foreach ($data['productList'] as $value) {
                $cost = $value->cost;
                $discount = $value->discount_offer;
                $price = $cost * $discount / 100;
                $getPrice = $cost - $price;
                $value->offeringPrice = $getPrice;
        }
        $data['galleryImage'] = SupplierImageGallery::getImagesByUsingSupplierId($id);
        $data['city'] = City::getAllApprovedCity();
        // dd($data);
        return view('front/FeaturedVenue/productList', $data);
    }
    public function imageDestroy($id)
    {
        // dd($id);
    	SupplierImageGallery::find($id)->delete();
    	return back()->with('success','Image removed successfully.');	
    }
	
	// Aboutus Page
	
	public function getAboutus()
	{
		$data['content']='About Us ';
		return view('front/aboutus', $data);		
	}
	
	// Contact Us 
	
	public function getSupport()
	{
		$data['content']='Support Us ';
		return view('front/contactus', $data);		
	}
	

}