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
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>
    @if(isset($isactive) && $isactive == 0)
    <script>
    console.log("ABC");
    $(function() {
        $('#verify-email').modal('show');
        $('#verify-email').modal({
            backdrop: 'static',
            keyboard: false
        });
    });
    </script>
    @endif
</head>
<style type="text/css">
.gallery {
    display: inline-block;
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

img {
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
label
{
	font-weight:bold;
	margin-bottom:20px;
}
</style>

<div class="modal fade in" id="verify-email" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false"
    aria-labelledby="verify-email">
    <div class="wrapper">
        <div class="inner">
            <div class="modal-dialog" style="width: 50%;" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="text-center">Verification</h4>
                    </div>
                    <div class="modal-body">
                        Please verify your email before adding hotel details.<br>
                        <a href="/">Go back to home page</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="subheader py-2  subheader-transparent " id="kt_subheader">
    <div class=" container  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
        <!--begin::Info-->
        <div class="d-flex align-items-center flex-wrap mr-1" style="margin-left: -650px;">
            <!--begin::Heading-->
            <div class="d-flex flex-column">
                <!--begin::Breadcrumb-->
                <div class="d-flex align-items-center font-weight-bold my-2">
                    <!--begin::Item-->
                    <a href="#" class="opacity-75 hover-opacity-100"> <i
                            class="flaticon2-shelter text-dark icon-1x"></i> </a>
                    <!--end::Item-->
                  
                    
                    <span class="label label-dot label-sm bg-dark opacity-75 mx-3"></span> <a href="#"
                        class="text-dark text-hover-dark opacity-75 hover-opacity-100">
                        Cancel Rules</a>
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

<div class="d-flex">
    <!--begin::Container-->
    <div class="container">
        <!--begin::Row-->
        <div class="row">
            <div class="col-lg-12">
                <!--begin::Card-->
                <div class="card card-custom gutter-b example example-compact">
                    <div class="card-header">
                        <h3 class="card-title">
                            Add Cancel Rules

                        </h3>
                       
                    </div>

                    <!--begin::Form-->
                    <form class="form" action="{{ url('merchant/hotel/savecancelrules/') }}" method="post"
                        enctype="multipart/form-data">

                        {{ csrf_field() }}


             <input type="hidden" name="hotelid" required class="form-control"
                                            value="{{$hotel_id->id}}">
											
			<input type="hidden" name="cid"  class="form-control"
                                            value="{{ @$cancelrule->id}}">								

                        <div class="card-body">
                            <div class=" row">
							
							<div class="row" style="width:100%">
                                <div class="col-lg-4">
                                    <label><strong>Cancellation before 6 month to the Events:</strong></label>
								</div>	
								 <div class="col-lg-1">
                                    <div class="input-group">
                                        <input type="number" name="sixmonth" required class="form-control"
                                            value="{{@$cancelrule->sixmonth}}">
                                    </div>
                                    @if ($errors->has('sixmonth'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('sixmonth') }}</strong>
                                    </span>
                                    @endif
                                </div>
								
								</div>
								
								<div class="row" style="width:100%">
								
								  <div class="col-lg-4">
                                    <label> <strong>Cancellation before 3 month to the Events :</strong></label>
								</div>	
								 <div class="col-lg-1">
								 
                                    <div class="input-group">
                                        <input type="number" name="threemonth" required class="form-control"
                                             value="{{@$cancelrule->threemonth}}">
                                    </div>
                                    @if ($errors->has('threemonth'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('threemonth') }}</strong>
                                    </span>
                                    @endif
                                </div>
								
								</div>
								
								<div class="row" style="width:100%">
								
								
								
								  <div class="col-lg-4">
                                    <label><strong>Cancellation before 1 month to the Events :</strong></label>
									</div>	
								 <div class="col-lg-1">
                                    <div class="input-group">
                                        <input type="number" name="onemonth" required class="form-control"
                                             value="{{@$cancelrule->onemonth}}">
                                    </div>
                                    @if ($errors->has('onemonth'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('onemonth') }}</strong>
                                    </span>
                                    @endif
                                </div>
								
								</div>
								
								<div class="row" style="width:100%">
								
								  <div class="col-lg-4">
                                    <label><strong>Cancellation before 15 days to the Events :</strong></label>
									</div>	
								 <div class="col-lg-1">
                                    <div class="input-group">
                                        <input type="number" name="fifteenday" required class="form-control"
                                           value="{{@$cancelrule->fifteenday}}">
                                    </div>
                                    @if ($errors->has('fifteenday'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('fifteenday') }}</strong>
                                    </span>
                                    @endif
                                </div>
								
								</div>
								
								
								<div class="row" style="width:100%">
								
								
								  <div class="col-lg-4">
                                    <label><strong>Cancellation before 1 week to the Events :</strong></label>
									</div>	
								 <div class="col-lg-1">
                                    <div class="input-group">
                                        <input type="number" name="oneweek" required class="form-control"
                                            value="{{@$cancelrule->oneweek}}">
                                    </div>
                                    @if ($errors->has('oneweek'))
                                    <span class="text-danger">
                                        <strong>{{ $errors->first('oneweek') }}</strong>
                                    </span>
                                    @endif
                                </div>
								</div>
								
						</div>
                       </div>						
                              
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <button type="submit" class="btn btn-primary mr-2">Save</button>
                                        <button type="reset" class="btn btn-secondary"><a
                                                href="{{ url('/admin/hotelList')}}">Cancel</a></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('pageScript')
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDUlGhRghOm7Q-x8rsHTFqzLT1DRjSOhSo&libraries=places&callback=initialize"
    async defer></script>
<script src="/js/mapInput.js"></script>

<script type="text/javascript">
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
    $('#banner_img').change(function() {
        var i = $(this).next('label').clone();
        var name = $('#banner_img')[0].files[0].name;
        console.log(name);
        $(this).next('label').text(name);
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
    var $modal = $('#bmodal');
    var image = document.getElementById('bimage');
    var cropper;
    $("body").on("change", ".bannerimage", function(e) {
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
            preview: '#preview2'
        });
    }).on('hidden.bs.modal', function() {
        cropper.destroy();
        cropper = null;
    });
    $("#bcrop").click(function() {
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
                    url: '/merchant/hotel/bannerImageUpload',
                    data: {
                        '_token': $('meta[name="_token"]').attr('content'),
                        'bimage': base64data
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
			
			html += '<td><input type="file" name="gallery[]"    onchange="validateimg(this,'+gid+')" id="'+ gallerytable_row + '"   placeholder="Gallery" class="form-control single_gallery"></td>';
			
		
			html += '<td class="mt-10"><button class="btn btn-danger" onclick="$(\'#gallerytable-row' + gallerytable_row + '\').remove();"><i class="fa fa-trash"></i> </button></td>';

			html += '</tr>';

		$('#gallerytable tbody').append(html);

		gallerytable_row++;
		}
		
		
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
                        if (height < 100 || width < 100) {
                            alert("At least you can upload a 100*100 photo size.");
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