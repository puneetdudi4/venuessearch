@extends('merchant.layout.main')
@section('content')
<head>
    <meta name="_token" content="{{ csrf_token() }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css"
        crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha256-WqU1JavFxSAMcLP2WIOI+GB2zWmShMI82mTpLDcqFUg=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.css"
        integrity="sha256-jKV9n9bkk/CTP8zbtEtnKaKf+ehRovOYeKoyfthwbC8=" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.js"
        integrity="sha256-CgvH7sz3tHhkiVKh05kSUgG97YtzYNnWt6OXcmYzqHY=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</head>
<style>
td,
th {
    padding: 10px;
}

.note-editable.card-block {
    height: 200px !important;
}

.gallery {
    display: contents;
    margin-top: 20px;
}

.close-icon {
    border-radius: 50%;
    position: absolute;
    right: 5px;
    top: -10px;
    padding: 5px 8px;
}

.form-image-upload {
    background: #e8e8e8 none repeat scroll 0 0;
    padding: 15px;
}

.modal-body img {
    display: block;
    max-width: 100%;
}

.preview {
    overflow: hidden;
    width: 160px;
    height: 160px;
    margin: 10px;
    border: 1px solid red;
}

.modal-lg {
    max-width: 1000px !important;
}

body.modal-open {
    height: 100vh;
    overflow-y: hidden !important;
}

.single_gallery
{
	height:40px ! important;
}
</style>
<div class="subheader py-2  subheader-transparent " id="kt_subheader">
    <div class=" container  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <!--begin::Info-->
        <div class="d-flex align-items-center flex-wrap mr-1">
            <!--begin::Heading-->
            <div class="d-flex flex-column">
                <!--begin::Breadcrumb-->
                <div class="d-flex align-items-center font-weight-bold my-2">
                    <!--begin::Item-->
                    <a href="#" class="opacity-75 hover-opacity-100"> <i
                            class="flaticon2-shelter text-dark icon-1x"></i> </a>
                    <!--end::Item-->
                    <!--begin::Item--><span class="label label-dot label-sm bg-dark opacity-75 mx-3"></span> <a href="#"
                        class="text-dark text-hover-dark opacity-75 hover-opacity-100">
                        Hotel Details </a>
                    <!--end::Item-->
                    <!--begin::Item--> <span class="label label-dot label-sm bg-dark opacity-75 mx-3"></span> <a
                        href="{{ url('admin/hotelMerchantList') }}"
                        class="text-dark text-hover-dark opacity-75 hover-opacity-100">
                        Hotel List</a>
                    <span class="label label-dot label-sm bg-dark opacity-75 mx-3"></span> <a
                        href="{{ url('merchant/hotelMerchantView') }}"
                        class="text-dark text-hover-dark opacity-75 hover-opacity-100">
                        Hotel View</a>
                    <span class="label label-dot label-sm bg-dark opacity-75 mx-3"></span> <a href="#"
                        class="text-dark text-hover-dark opacity-75 hover-opacity-100">
                        Edit Hotel Venue</a>
                    <!--end::Item-->
                </div>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Heading-->
        </div>
        <!--end::Info-->
        <button class="btn btn-primary font-weight-bold btn-pill" onclick="history.back(-1)">
            <i class="fas fa-arrow-left"></i></i> Back
        </button>
    </div>
</div>
<div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class=" container ">
        <!--begin::Row-->
        <div class="row">
            <div class="col-lg-12">
                <!--begin::Card-->
                <div class="card card-custom gutter-b example example-compact">
                    <div class="card-header">
                        <h3 class="card-title">
                            Edit Hotel Venue
                        </h3>
                    </div>
                    </div>
                    <!--begin::Form-->
                    <form action="{{url('merchant/hotel/updateHotelsIncludeMerchant')}}" class="form" method="POST"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="card-body">
                            <input type="hidden" name="id" value="{{$hotelSubEntity['id']}}">
                            <input type="hidden" name="hotel_id" value="{{$hotelSubEntity['hotel_id']}}">
                            <div class="form-group row">
                                <div class="col-lg-12">
                                    <label style="font-size: 18px; font-weight: 600;">Venue Name :</label>
                                    <input type="text" name="venue_name"  required class="form-control"
                                        placeholder="Enter Hotel Include" value="{{$hotelSubEntity['title']}}">
                                    @if ($errors->has('title'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                    @endif
                                </div>
                          
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <label style="font-size: 18px; font-weight: 600;" class="form-control-label"
                                        for="type">Venue Type :</label>
                                    <select id="type" class="form-control" name="type" required>
                                        <option value="">Select</option>
                                        @foreach($typeList as $t)
                                        <option value="{{ $t->id }}"
                                            {{ isset($hotelSubEntity->type) && ($hotelSubEntity->type == $t->id) ? 'selected' : '' }}>
                                            {{ $t->name }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('type'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('type') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="col-lg-6">
                                    <label style="font-size: 18px; font-weight: 600;" class="form-control-label"
                                        for="include_type">Type:</label><br>
                                    <label class="" style="font-size: 18px; font-weight: 600;">
                                        <input type="radio" name="include_type" required style="margin-right: 5px;"
                                            value="indoor"
                                            {{ ($hotelSubEntity['include_type'] == 'indoor') ? 'checked' : '' }}>Indoor
                                    </label>&nbsp;&nbsp;&nbsp;
                                    <label class="" style="font-size: 18px; font-weight: 600;">
                                        <input type="radio" name="include_type" required
                                            {{ ($hotelSubEntity['include_type'] == 'outdoor') ? 'checked' : '' }}
                                            style="margin-right: 5px;" value="outdoor">Outdoor
                                    </label>
                                    @if ($errors->has('include_type'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('include_type') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <label style="font-size: 18px; font-weight: 600;" class="form-control-label"
                                        for="event_type">Venue suiting :</label>
                                    @foreach($eventList as $i=>$e)
                                    <label class="checkbox-inline">
                                        <input type="checkbox" class="event_types"  @foreach($selectedEvent as $index=>$event)
                                        {{ isset($event) && ($event == $e->id) ? 'checked' : '' }}
                                        @endforeach
                                        name="event_type[]"
                                        value="{{$e->id}}" >
                                        {{$e->title}}
                                    </label>
                                    @endforeach
                                    @if ($errors->has('event_type'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('event_type') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <label for="exampleInputPassword1" style="font-size: 18px; font-weight: 600;">Venue
                                        Image :</label>
                                    <div class="custom-file">
                                       
									<?php
									if($hotelSubEntity->feature_image =='')
									{
										$required ="required";
									}
									else
									{
										$required ="";
									}
                                    ?>
									
									<input type="file" class="featuredimage"  <?php echo $required?>  name="fimage" id="venue_image" onchange="validateimg(this,'venue_image')"
                                            accept=".jpg,.jpeg,.png">
											
                                      
                                    </div>
                                    @if ($errors->has('fimage'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('fimage') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="col-lg-6">
                                    @if($hotelSubEntity)
                                    <img  style="width:120px"  src="{{ asset('uploads/hotels_featured_images/'.$hotelSubEntity->feature_image) }}"
                                        class="img-responsive" alt="img">
                                    @endif
                                </div>
                            
						 </div>
                         
							
							
							
				  	<div class="form-group row">
                                <div class="col-lg-12">
								
								<table id="gallerytable" class="table table-hover">
                                 <thead>
                                     <tr>
                                         <th>Gallery Images </th>
                                        
                                         
                                     </tr>
                                 </thead>
                                 <tbody>
								 								 								
	 
                                 		<tr id="gallerytable-row">
                                         <td width="55%">
										  
										  
										  <input type="file" name="gallery[]"  onchange="validateimg(this,'gallery')" id="gallery"    placeholder="Gallery" class="form-control single_gallery">
         
									
										 </td>
                                         
                                        
                                         <td class="mt-10"><button type="button" onclick="addgallery();" class="btn btn-success"><i class="fa fa-plus"></i> </button></td>
                                     </tr>
                                 </tbody>
                             </table>
							 
							
								</div>
							 </div>
							 
							 
							 <div class="form-group row">
                                <div class="col-lg-12">
								
								 <?php
							 if($gallery_images)
							 {
								foreach($gallery_images as $gallery_image)
								{								
								 ?>
								
								 
								 <div class="col-lg-3 " style="float:left">
								  <div style="margin:30px">
								   <?php
                                    if($gallery_image->image)
									{
										?>
										     <img  style="width:225px; height:175px" src="<?php echo asset("uploads/hotels_venue_images/$gallery_image->image") ?>"
											 
                                        alt="image">
										<?php
									}
                               
                                 ?>
								 </div>
								 
                                </div>
							 
							 <?php
								}
							 }
                             ?>							 
							 
								
							 </div>
							 </div>
							 
							 
							 <div class="form-group row">
							                                     <label for="specification" style="font-size: 18px; font-weight: 600;">Upload
                                        Layout specification image (only PDF file)</label>
                                    <input id="specification"
                                        class="form-control form-control-solid h-auto py-7 px-6 rounded-lg font-size-h6"
                                        placeholder="Upload Layout specification" type="file" name="specification"
                                        autocomplete="off" value="{{old('specification')}}" accept="application/pdf" />
                                    @if ($errors->has('specification_pdf'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('specification_pdf') }}</strong>
                                    </span>
                                    @endif
									
										<?php
									if($hotelSubEntity->specification_pdf !='')
									{
										?>
										<a  class="btn" style="padding:10px; background:blue"  href="<?php echo asset("uploads/specification/$hotelSubEntity->specification_pdf") ?>" target="_blank"> View </a>
										<?php
									}
									
                                    ?>
									
							 </div>

					
                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <label style="font-size: 18px; font-weight: 600;">Description :</label>
                                    <textarea name="description" id="description"
                                        class="form-control required summernote" cols="30"
                                        rows="5">{{ $hotelSubEntity['description'] }}</textarea>
                                    @if ($errors->has('description'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                    @endif
                                    <div class="mt-5">
                                        <label style="font-size: 18px; font-weight: 600;" class="form-control-label"
                                            for="event_type">Facilities :</label>
                                        @foreach($facilityList as $i=>$e)
                                        <label class="checkbox-inline">
                                            <input type="checkbox" class="facilities"  @foreach($facilities as $index=>$event)
                                            {{ isset($event) && ($event == $e->id) ? 'checked' : '' }}
                                            @endforeach
                                            name="facilities[]"
                                            value="{{$e->id}}">
											
											
                                            {{$e->title}}
                                        </label>
                                        @endforeach
                                        @if ($errors->has('facilities'))
                                        <span class="text-danger">
                                            <strong>{{ $errors->first('facilities') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <label for="capacity" style="font-size: 18px; font-weight: 600;">
                                        Capacity:
                                    </label>
                                    <table style="table-layout: fixed;width: 100%;">
                                        <thead>
                                            <tr>
                                                <th style="width: 5%;">
                                                </th>
                                                <th>Seating Setup</th>
                                                <th style=" width: 22%; ">Maximum
                                                </th>
                                                <th>Social Distancing
                                                </th>
                                                <th>Image</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($capacitykey as $i=>$ci)
                                            <tr>
                                                <td><input id="id-{{ $ci->id }}" class="capacities" name="capacity_id_{{ $ci->id }}"
                                                        @foreach($capacityvalue as $index=>$val)
                                                    {{ ($val['capacity_attribute_id'] == $ci->id) ? 'checked' : '' }}
                                                    @endforeach
                                                    type="checkbox"></td>
                                                <td><label for="id-{{ $ci->id }}">{{ $ci->title }}</label></td>
                                                <td><input type="text" name="maximum_capacity_{{ $ci->id }}"
                                                        class="form-control"
                                                        value="@foreach($capacityvalue as $index=>$val) @if($val['capacity_attribute_id'] == $ci->id){{ $val['capacity_value'] }} @endif @endforeach">
                                                </td>
                                                <td><input type="text" name="socialdistancing_capacity_{{ $ci->id }}"
                                                        value="@foreach($capacityvalue as $index=>$val) @if($val['capacity_attribute_id'] == $ci->id) {{ $val['socialdistancing_capacity'] }} @endif @endforeach"
                                                        class="form-control">
                                                </td>
                                                <td>
                                                    <img class="image_fade"
                                                        src="{{ asset('storage/capacityAttributeImg/'.$ci->image)}}"
                                                        style="width:100px; height: 68px;">
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
							
							
							
							     		 <div class="form-group row" style="width:100%">
                                <div class="col-lg-12">
								
								<table id="packagestable" class="table table-hover">
                                 <thead>
                                     <tr>
                                         <th>Special Packages</th>
                                        
                                         
                                     </tr>
									 
									 <?php
									 foreach($packages  as $package)
									 {
										 ?>
									 
									 
									 <tr id="packages-row_edit">
                                         <td width="35%">
										 <?php echo $package->name ;?>
										 </td>
										 <td width="35%">
										 
										 <a  class="btn" style="padding:10px; background:blue"  href="<?php echo asset("uploads/packages/$package->pdf") ?>" target="_blank"> View </a>
										
										 
										 </td>
									 </tr>
									 <?php
									 }
									 ?>
									 
										 
										 
                                 </thead>
                                 <tbody>
								 								 								
	 
                                 		<tr id="packages-row">
                                         <td width="35%">
										  
										  
										  <input type="text" name="packages_name[]"    id="packages"   placeholder="Packages Name" class="form-control single_gallery">
         
									
										 </td>
										 
										  <td width="35%">
										  
										  
										  <input type="file" name="packages_file[]"    id="packages_file"   placeholder="packages file" class="form-control single_gallery">
         
									
										 </td>
                                         
                                        
                                         <td class="mt-10"><button type="button" onclick="addpackages();" class="btn btn-success"><i class="fa fa-plus"></i> </button></td>
                                     </tr>
                                 </tbody>
                             </table>
							 
							
								</div>
							 </div>
							 
							
							
							
                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <label style="font-size: 18px; font-weight: 600;">Minimum spend (in AED)
                                        :</label>
                                    <input type="number" name="cost" id="cost"  class="form-control" placeholder="Enter Cost"
                                        value="{{ $hotelSubEntity->cost }}">
                                    @if ($errors->has('cost'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('cost') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            
							
							
					     	
<div class="col-lg-6">
                                    <label style="font-size: 18px; font-weight: 600;"> Discount %
                                        :</label>
                                    <input type="number" onblur="venueprice()" name="discount" id="discount" class="form-control" placeholder="Enter Discount"
                                        value="{{ $hotelSubEntity->discount }}">
                                    @if ($errors->has('discount'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('discount') }}</strong>
                                    </span>
                                    @endif
                                </div>
								
								<div class="col-lg-6">
                                    <label style="font-size: 18px; font-weight: 600;"> Hotel venue charge  5%
                                        :</label>
                                    <input type="number" onblur="venueprice()" name="commission" id="commission" class="form-control" placeholder="Enter Discount"
                                        value="{{ $hotelSubEntity->commission }}">
                                    @if ($errors->has('commission'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('commission') }}</strong>
                                    </span>
                                    @endif
                                </div>
								
								<div class="col-lg-6">
                                    <label style="font-size: 18px; font-weight: 600;"> Final Price
                                        :</label>
                                    <input type="number" onblur="venueprice()" id="final_price"   name="final_price" class="form-control" placeholder="Enter Final Price"
                                        value="{{ $hotelSubEntity->final_price }}">
                                    @if ($errors->has('final_price'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('final_price') }}</strong>
                                    </span>
                                    @endif
                                </div>
															
							
		</div>					
							
                        </div>

                        <div class="card-footer">
                            <div class="row">
                                <div class="col-lg-6">
                                    <button type="submit" class="btn btn-primary mr-2" id="venue_submit">Next</button>
                                    <button type="reset" class="btn btn-secondary">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!--end::Form-->
        </div>
        <!--end::Card-->
    </div>
</div>
<!--end::Container-->
</div>
</div>
@endsection
@section('pageScript')
<script type="text/javascript">

function venueprice()
{
	var cost =$('#cost').val() || 0;
	var discount =$('#discount').val() || 0;
	var commission=$('#commission').val() || 0;
	var final_price=$('#final_price').val();
	
	var discount_price=parseFloat(cost) - ( parseFloat(cost)*parseFloat(discount)/100 );
	
	var commission_price=( parseFloat(cost)*5/100 );
	
	var total_cost=parseFloat(discount_price)+parseFloat(commission_price);
	$('#commission').val(5)
	$('#final_price').val(total_cost);
}



$('#capacity_attributes').DataTable({
    "responsive": true
});
$(document).ready(function() {
    $('#featured_image').change(function() {
        var i = $(this).next('label').clone();
        var name = $('#featured_image')[0].files[0].name;
        console.log(name);
        $(this).next('label').text(name);
    });

    $('#gallery_images').change(function() {
        var i = $(this).next('label').clone();
        var names = [];
        for (var i = 0; i < $(this).get(0).files.length; ++i) {
            names.push($(this).get(0).files[i].name);

            $(this).next('label').text(names);
        }
        console.log(names);
    });
});

$(document).ready(function() {
    var $modal = $('#fmodal');
    var image = document.getElementById('fimage');
    var cropper;
    $("body").on("change", ".featuredimage", function(e) {
        var files = e.target.files;
        var done = function(url) {
            image.src = url;
            $modal.modal('show');
        };
        var reader;
        var file;
        var url;
        if (files && files.length > 0) {
            file = files[0];
            if (URL) {
                done(URL.createObjectURL(file));
            } else if (FileReader) {
                reader = new FileReader();
                reader.onload = function(e) {
                    done(reader.result);
                };
                reader.readAsDataURL(file);
            }
        }
    });
    $modal.on('shown.bs.modal', function() {
        cropper = new Cropper(image, {
            aspectRatio: 16 / 9,
            viewMode: 3,
            preview: '#preview1'
        });
    }).on('hidden.bs.modal', function() {
        cropper.destroy();
        cropper = null;
    });
    $("#fcrop").click(function() {
        canvas = cropper.getCroppedCanvas({
            width: 160,
            height: 160,
        });
        canvas.toBlob(function(blob) {
            url = URL.createObjectURL(blob);
            var reader = new FileReader();
            reader.readAsDataURL(blob);
            reader.onloadend = function() {
                var base64data = reader.result;
                $.ajax({
                    type: "POST",
                    dataType: "json",
                    url: '/merchant/hotel/featuredImageUpload',
                    data: {
                        '_token': $('meta[name="_token"]').attr('content'),
                        'fimage': base64data
                    },
                    success: function(data) {
                        $modal.modal('hide');
                        alert("success upload image");
                    }
                });
            }
        });
    })
});

$(document).ready(function() {
    var $modal = $('#gmodal');
    var image = document.getElementById('gimage');
    var cropper;
    $("body").on("change", ".galleryimage", function(e) {
        var files = e.target.files;
        var done = function(url) {
            image.src = url;
            $modal.modal('show');
        };
        var reader;
        var file;
        var url;
        if (files && files.length > 0) {
            file = files[0];
            if (URL) {
                done(URL.createObjectURL(file));
            } else if (FileReader) {
                reader = new FileReader();
                reader.onload = function(e) {
                    done(reader.result);
                };
                reader.readAsDataURL(file);
            }
        }
    });
    $modal.on('shown.bs.modal', function() {
        cropper = new Cropper(image, {
            aspectRatio: 16 / 9,
            viewMode: 3,
            preview: '#gallerypreview'
        });
    }).on('hidden.bs.modal', function() {
        cropper.destroy();
        cropper = null;
    });
    $("#gcrop").click(function() {
        canvas = cropper.getCroppedCanvas({
            width: 160,
            height: 160,
        });
        canvas.toBlob(function(blob) {
            url = URL.createObjectURL(blob);
            var reader = new FileReader();
            reader.readAsDataURL(blob);
            reader.onloadend = function() {
                var base64data = reader.result;
                $.ajax({
                    type: "POST",
                    dataType: "json",
                    url: '/merchant/hotel/galleryImageUpload',
                    data: {
                        '_token': $('meta[name="_token"]').attr('content'),
                        'gimage': base64data
                    },
                    success: function(data) {
                        $modal.modal('hide');
                        alert("success upload image");
                    }
                });
            }
        });
    })
});

	var gallerytable_row = 1;
		function addgallery() {
			
			var gid=gallerytable_row;
			
		    html = '<tr id="gallerytable-row' + gallerytable_row + '">';
			
			html += '<td><input type="file" name="gallery[]"   onchange="validateimg(this,'+gid+')" id="'+ gallerytable_row + '"  placeholder="Gallery" class="form-control single_gallery"></td>';
			
		
			html += '<td class="mt-10"><button class="btn btn-danger" onclick="$(\'#gallerytable-row' + gallerytable_row + '\').remove();"><i class="fa fa-trash"></i> </button></td>';

			html += '</tr>';

		$('#gallerytable tbody').append(html);

		gallerytable_row++;
		}
		
		
		
		
			var packages_row = 1;
		
		function addpackages()
		{
			
			var pid=packages_row;
		    html = '<tr id="packages_row' + packages_row + '">';
			
			html += '<td><input type="text" name="packages_name[]"    " id="'+ packages_row + '"  placeholder="Package Name" class="form-control single_gallery"></td>';
			
			html += '<td><input type="file" name="packages_file[]"    " id="'+ packages_row + '"  placeholder="Package File" class="form-control single_gallery"></td>';
			
		
			html += '<td class="mt-10"><button class="btn btn-danger" onclick="$(\'#packages_row' + packages_row + '\').remove();"><i class="fa fa-trash"></i> </button></td>';

			html += '</tr>';

		$('#packagestable tbody').append(html);

		packages_row++;
			
		}
</script>


<script type="text/javascript">
$(document).ready(function () {
    $('#venue_submit').click(function() {
      checked = $(".event_types:checked").length;

      if(!checked) {
        alert("You must check at least one Venue Suites.");
        return false;
      }
	  
	   checked1 = $(".capacities:checked").length;

      if(!checked1) {
        alert("You must check at least one Capacities.");
        return false;
      }
	  
	  
	   checked2 = $(".facilities:checked").length;

      if(!checked2) {
        alert("You must check at least one Facilities.");
        return false;
      }
	  
	  
	  
	  
	  

    });
});

</script>




<script>


   function validateimg(ctrl,id) { 
  
		
        var fileUpload = ctrl;
		//alert(ctrl);
		
        var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(.jpg|.png|.gif)$");
        if (regex.test(fileUpload.value.toLowerCase())) {
            if (typeof (fileUpload.files) != "undefined") {
                var reader = new FileReader();
                reader.readAsDataURL(fileUpload.files[0]);
                reader.onload = function (e) {
                    var image = new Image();
                    image.src = e.target.result;
                    image.onload = function () {
                        var height = this.height;
                        var width = this.width;
                        if (height < 500 || width < 700) {
                            alert("At least you can upload a 500*700 photo size.");
							    $('#'+id).val(''); 

                            return false;
                        }else{
                            //alert("Uploaded image has valid Height and Width.");
                            return true;
                        }
                    };
                }
            } else {
                alert("This browser does not support HTML5.");
                return false;
            }
        } else {
            alert("Please select a valid Image file.");
            return false;
        }
    }

</script>


@endsection