<?php

namespace App\Http\Controllers;
use App\SupplierProfile;
use App\SupplierType;
use App\SupplierProducts;
use App\SupplierImageGallery;
use Illuminate\Http\Request;



use DB;
use App\Supplier;

use App\Hotel;
use App\User;
use App\Merchant;
use App\Model\City;
use App\EventType;
use App\Hotel_image_gallery;
use App\Model\CapacityAttribute;
use App\Model\IncludeHotelCapacity;
use App\Facility;

use Session;

class homeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($services)
    {
        
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
		
		$services=trim($services);
		
		
		
		
		
		
		 $suppliertype = SupplierType::where('title', '=', $services)->get('id');
		 
		
		 
		  $var=null;
         foreach($suppliertype as $key=>$value)
         {
             $var=$value->id;
         }
         
       
         
		  $data['title'] = $services;
          $data['supplierlists'] = SupplierProfile::where('services', '=', $var)->get();
		  
		  
		 
		  
		  $data['featured_supplierlists'] = SupplierProfile::where('services', '=', $var)->where('is_featured', '=', 1)->get();
		  
		
		  
		  
        // dd($data);
        return view('front/supplierlist', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function getSupplierProducts($id){
        
        $supplierimagegalary = SupplierImageGallery::where('supplier_id',$id)->get();
        $supplierdetail = SupplierProfile::where('id',$id)->get();
        $SupplierProducts = SupplierProducts::where('supplier_id',$id)->get();
        $categories = SupplierType::get();

        $image=null;
		if($supplierdetail[0]->featured_image !='')
		{
		$image[0]=$supplierdetail[0]->featured_image;
		}
		$k=1;
        foreach($supplierimagegalary as $value){
			
            $image[$k]=$value->image;
			$k++;
        }
		
		
		
		//$image[]=
		/*if($image  !='')
		{
         $image =  call_user_func_array('array_merge', $image);
		}*/
		
		$var=null;
         foreach($supplierdetail as $key=>$value)
         {
             $var=$value->services;
         }
        
        $suppliertype = SupplierType::where('id',$var)->get();
        $title=null;
         foreach($suppliertype as $key=>$value)
         {
             $title=$value->title;
         }
//        return view('front/supplierlist', $data);

        return view('front/supplierDetails',['data'=>$SupplierProducts,'detail'=>$supplierdetail,'supplierimage'=>$supplierimagegalary,'suppliertype'=>$title,'image'=>$image, 'categories' =>$categories]);
    }
}
