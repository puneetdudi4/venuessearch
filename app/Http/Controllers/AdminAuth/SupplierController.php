<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Supplier;
use App\Countri;
use App\State;
use DB;
use App\SupplierProfile;
use App\SupplierImageGallery;
use Redirect;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['supplierData'] = Supplier::with([
          'profile',
          'profile.service_type'
      ])->get();
        return view('admin/supplier/index', $data);
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
        // $supplier = Supplier::with([
        //   'country_row',
        //   'state_row',
        //   'profile',
        //   'profile.service_type'
        //   ])->where('id', $id)->first();
        $supplier_profile_id = DB::table('supplier_profile')->select('id')->where('if_is_supplier_id', $id)->first();
        // dd($supplier_profile_id);
        $supplier = DB::table('suppliers')
        ->leftjoin('supplier_profile','supplier_profile.if_is_supplier_id','suppliers.id')
        ->leftjoin('countries','countries.id','supplier_profile.country')
        ->leftjoin('states','states.id','supplier_profile.state')
        ->leftjoin('cities','cities.id','supplier_profile.city')
        ->leftjoin('supplier_type','supplier_type.id','supplier_profile.services')
        ->select('supplier_profile.*','suppliers.company_name','suppliers.landline_no','suppliers.mobile_no as supplier_mobile','suppliers.image','suppliers.city_code','countries.name as supplier_country','states.name as supplier_state','cities.name as supplier_city')
        ->where('suppliers.id','=', $id)->first();
        // $data = [
        //     'supplier' => $supplier,
        // ];


        if(!empty($supplier_profile_id)){
            // dd("empty");
             $supplier_gallery = DB::table('supplier_image_gallery')->where('supplier_id',$supplier_profile_id->id)->get();
        }else{
            $supplier_gallery = [];

        }

        // $supplier_gallery = SupplierImageGallery::where('supplier_id', $id)->get();
       

        // $supplierProducts = DB::table('supplier_products')->where('supplier_id', '=', $id)->get();s
       // dd($supplierProducts);

        return view('admin/supplier/view', compact('supplier','supplier_gallery'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      // $supplier = Supplier::where('id', $id)->first();
        $supplier_profile_id = DB::table('supplier_profile')->select('id')->where('if_is_supplier_id', $id)->first();

        $supplier = DB::table('suppliers')
        ->leftjoin('supplier_profile','supplier_profile.if_is_supplier_id','suppliers.id')
        ->leftjoin('countries','countries.id','supplier_profile.country')
        ->leftjoin('states','states.id','supplier_profile.state')
        ->leftjoin('cities','cities.id','supplier_profile.city')
        ->leftjoin('supplier_type','supplier_type.id','supplier_profile.services')
        ->select('supplier_profile.*','suppliers.company_name','suppliers.landline_no','suppliers.mobile_no as supplier_mobile','suppliers.image','suppliers.email','suppliers.city_code','countries.name as supplier_country','states.name as supplier_state','suppliers.id as supplier_id','cities.name as supplier_city','supplier_type.title')
        ->where('suppliers.id','=', $id)->first();


        if(!empty($supplier_profile_id)){
            // dd("empty");
             $supplier_gallery = DB::table('supplier_image_gallery')->where('supplier_id',$supplier_profile_id->id)->get();
        }else{
            $supplier_gallery = [];

        }
        

        $countries = Countri::all();
        $states = State::all();
        $data = [
            'countries' => $countries,
            'states' => $states,
            'supplier' => $supplier,
        ];
        return view('admin/supplier/edit', compact('supplier','supplier_gallery','countries','states'));
    }

 
    public function update(Request $request, $id)
    {
      $inputs = $request->all();
      $update = [];
      $profile = [];

      $profile_id = DB::table('supplier_profile')->select('id')->where('if_is_supplier_id', $id)->first();

      if(isset($inputs) and ($inputs != [])) {
        $update['company_name'] = $inputs["company_name"];
        $update['email'] = $inputs["email"];
        $update['country'] = $inputs["country"];
        $update['city_code'] = $inputs["city_code"];
        $update['area'] = $inputs["area"];
        $update['mobile_no'] = $inputs["mobile_no"];
        $update['landline_no'] =  $inputs["landline_no"];

        $profile['facebook'] = $inputs['facebook'];
        $profile['twitter'] = $inputs['twitter'];
        $profile['instagram'] = $inputs['instagram'];
        $profile['website'] = $inputs['website'];
        $profile['summary'] = $inputs['summary'];
        $profile['description'] = $inputs['description'];
        if ($request->has('is_featured')) {
           $profile['is_featured'] = 1 ;
       }else{
           $profile['is_featured'] = 0 ;
       }

       $profile['services'] = $inputs['services'];

       Supplier::where('id', $id)->update($update);


       if(!empty($profile_id)){
             SupplierProfile::where('id', $profile_id->id)->update($profile);
             
        }else{
           $profile['if_is_supplier_id'] = $id;
           $profile['summary'] = '';
        $profile['description'] = '';
           SupplierProfile::create($profile);

        }




      
   }

   return redirect('admin/supplier/list')->with('status', 'Supplier updated!');
}


    public function destroy($id)
    {
        Supplier::where('id', $id)->delete();
        SupplierProfile::where('if_is_supplier_id', $id)->delete();

        return response()->json(['status' => 'Success', 'message' => 'The Supplier is deleted successfully']);

    }

    public function deleteMoreImage($id){
      
        DB::table('supplier_image_gallery')->where('id', $id)->delete();
        return redirect()->back();
    }
}
