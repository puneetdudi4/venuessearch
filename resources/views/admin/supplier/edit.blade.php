@extends('admin.layout.main')

@section('content')
<div class="subheader py-2 subheader-transparent" id="kt_subheader">
  <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
    <!--begin::Info-->
    <div class="d-flex align-items-center flex-wrap mr-1">
      <!--begin::Heading-->
      <div class="d-flex flex-column">
        <!--begin::Breadcrumb-->
        <div class="d-flex align-items-center font-weight-bold my-2">
          <!--begin::Item-->
          <a href="#" class="opacity-75 hover-opacity-100"> <i class="flaticon2-shelter text-dark icon-1x"></i>
          </a>
          <!--end::Item-->
          <!--begin::Item-->
          <span class="label label-dot label-sm bg-dark opacity-75 mx-3"></span> <a
          href="{{ url('admin/supplierView') }}"
          class="text-dark text-hover-dark opacity-75 hover-opacity-100">
        Supplier List</a>
        <!--end::Item-->
        <!--begin::Item-->
        <span class="label label-dot label-sm bg-dark opacity-75 mx-3"></span> <a href="#"
        class="text-dark text-hover-dark opacity-75 hover-opacity-100">
      Supplier View</a>
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

<div class=" container ">
  <!--begin::Card-->
  <div class="card card-custom gutter-b">
    <div class="card-body">
      <!--begin::Details-->
      <div class="d-flex mb-9">
        <!--begin::Info-->
        <div class="flex-grow-1">
          <!--begin::Title-->
          <div class="d-flex justify-content-between flex-wrap mt-1">
            <div class="d-flex mr-3">
              <a href="#"
              class="text-dark-75 text-hover-primary font-size-h4 font-weight-bold mr-3">{{ $supplier->company_name ?? '' }}</a>
              <a href="#"><i class="flaticon2-correct text-success font-size-h5"></i></a>
            </div>
            <div class="my-lg-0 my-3">
              <button type="button" class="btn btn-sm btn-info font-weight-bolder text-uppercase"
              data-toggle="modal" data-target="#exampleModalLong">Trade Licence</button>
            </div>
          </div>
          <!--end::Title-->
          <!--begin::Content-->
          <div class="d-flex flex-wrap justify-content-between mt-1">
            <div class="d-flex flex-column flex-grow-1 pr-8">
              <div class="d-flex flex-wrap mb-4">
                <a href="#"
                class="text-dark-50 text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2"><i
                class="flaticon2-new-email mr-2 font-size-lg"></i>{{ $supplier->email }}</a>
                <a href="#"
                class="text-dark-50 text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2"><i
                class="flaticon2-calendar-3 mr-2 font-size-lg"></i>{{ $supplier->location }}</a>
              </div>
            </div>
          </div>
          <!--end::Content-->
        </div>
        <!--end::Info-->
      </div>
      <!--end::Details-->

      <div class="separator separator-solid"></div>
      <form method="POST" action="{{ url('admin/supplier/update/' . $supplier->supplier_id ) }}">
        @csrf
        <input type="hidden" name="supplier_id" value="{{ $supplier->supplier_id ?? '' }}" />
        <!--begin::Items-->
        <div class="mt-8 mb-9">
          <div class="text-dark-75 font-size-h4 mb-5 font-weight-bold ">Edit Details</div>
          <div class="form-group row">
            <div class="col-lg-6">
              <label>Company Name:</label>
              <input type="text" class="form-control company_name" name="company_name" id="company_name"
              value="{{ $supplier->company_name ?? '' }}" />
            </div>
            <div class="col-lg-6">
              <label>Email:</label>
              <input type="text" class="form-control email" name="email" id="email"
              value="{{ $supplier->email ?? '' }}" />
            </div>
          </div>
          <div class="form-group row">
            <div class="col-lg-6">
              <label>Country:</label>
              <select class="form-control country" name="country" id="country" >
                <?php foreach ($countries as $key => $country): ?>
                  <option value="{{ $country->id }}" @if($supplier->country == $country->id)
                    selected @endif>{{ $country->name ?? '' }}</option>
                  <?php endforeach; ?>
                </select>
              </div>
              <div class="col-lg-6">
                <label>State:</label>
                <select class="form-control city_code" name="city_code" id="city_code" >
                  <?php foreach ($states as $key => $state): ?>
                    <option value="{{ $state->id }}" @if($supplier->city_code == $state->id)
                      selected @endif>{{ $state->name ?? '' }}</option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-lg-12">
                  <label>Location:</label>
                  <input type="text" class="form-control area" name="area" id="area"
                  value="{{ $supplier->location ?? '' }}" />
                </div>
              </div>
              <div class="form-group row">
                <div class="col-lg-6">
                  <label>Mobile:</label>
                  <input type="text" class="form-control mobile_no" name="mobile_no" id="mobile_no"
                  value="{{ $supplier->supplier_mobile ?? '' }}" />
                </div>
                <div class="col-lg-6">
                  <label>Landline:</label>
                  <input type="text" class="form-control landline_no" name="landline_no" id="landline_no"
                  value="{{ $supplier->landline_no ?? '' }}" />
                </div>
              </div>
              
              <div class="form-group row">
                <div class="col-lg-6">
                  <label>Facebook:</label>
                  <input type="text" class="form-control mobile_no" name="facebook" id="mobile_no"
                  value="{{ $supplier->facebook ?? '' }}" />
                </div>
                <div class="col-lg-6">
                  <label>Twitter:</label>
                  <input type="text" class="form-control landline_no" name="twitter" id="landline_no"
                  value="{{ $supplier->twitter ?? '' }}" />
                </div>
              </div>
              <div class="form-group row">
                <div class="col-lg-6">
                  <label>Instagram:</label>
                  <input type="text" class="form-control mobile_no" name="instagram" id="mobile_no"
                  value="{{ $supplier->instagram ?? '' }}" />
                </div>
                <div class="col-lg-6">
                  <label>Website:</label>
                  <input type="text" class="form-control landline_no" name="website" id="landline_no"
                  value="{{ $supplier->website ?? '' }}" />
                </div>
              </div>
              <div class="form-group row">
                <div class="col-lg-6">
                  <label>Is Featured:</label>
                  <input type="checkbox" name="is_featured" value="1" {{$supplier->is_featured == 1 ? 'checked' : ''}}>

                </div>
                <div class="col-lg-6">
                  <label>Service:</label>
                  <input type="text" class="form-control landline_no" name="services" id="landline_no"
                  value="{{ $supplier->title ?? '' }}" />
                </div>
              </div>
              <div class="form-group row">
                <div class="col-lg-6">
                  <label>Summary:</label>
                  <textarea class="form-control" name="summary" rows="4">{{$supplier->summary}}</textarea>
                </div>
                <div class="col-lg-6">
                  <label>Description:</label>
                  <textarea class="form-control" name="description" rows="4">{{$supplier->description}}</textarea>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-lg-6">
                  <label>Feature Image :</label>
                  <p></p>
                  <img src="{{url('uploads/hotels_featured_images', $supplier->featured_image)}}" height="200" width="300" class="img-responsive">
                </div>
                <div class="col-lg-6">
                  <label>Other Images:</label>
                  <p></p>
                  <div class="row">
                    @foreach($supplier_gallery as $gal)
                    <div style="border-right: 1px solid red;" class="col-md-6">
                      <div class="row">
                        <div class="col-md-12">
                           <img src="{{url('uploads/hotels_featured_images', $gal->image)}}" height="100" width="100" class="img-responsive">
                        </div>
                        <div class="col-md-12" >
                           <a href="{{route('delete-more-imge', $gal->id)}}">
                        Delete
                      </a> 
                        </div>
                      </div>
                     
                       
                    </div>
                    @endforeach
                  </div>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-lg-12 text-right">
                  <button class="btn btn-primary  " type="submit">Update</button>
                  <button class="btn btn-default" type="reset">Reset</button>
                </div>
              </div>

            </div>
            <!--end::Items-->
          </form>
        </div>

      </div>
      <!--end::Card-->
    </div>

    <div class="modal fade" id="exampleModalLong" data-backdrop="static" tabindex="-1" role="dialog"
    aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal Title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <i aria-hidden="true" class="ki ki-close"></i>
          </button>
        </div>
        <div class="modal-body">
          <embed src="{{ Storage::url('public/supplierUser') }}/{{ $supplier->image }}"
            type="application/pdf" width="100%" height="1000px" />
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary font-weight-bold">Save
            changes</button>
          </div>
        </div>
      </div>
    </div>

    <!--end::Card-->
    @endsection
    @section('pageScript')
    <script type="text/javascript">
      $('#supplierListTable').DataTable({
        "responsive": true
      });
    </script>
    <style>
      .switch {
        position: relative;
        display: inline-block;
        width: 60px;
        height: 34px;
      }

      .switch input { 
        opacity: 0;
        width: 0;
        height: 0;
      }

      .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        -webkit-transition: .4s;
        transition: .4s;
      }

      .slider:before {
        position: absolute;
        content: "";
        height: 26px;
        width: 26px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
      }

      input:checked + .slider {
        background-color: #2196F3;
      }

      input:focus + .slider {
        box-shadow: 0 0 1px #2196F3;
      }

      input:checked + .slider:before {
        -webkit-transform: translateX(26px);
        -ms-transform: translateX(26px);
        transform: translateX(26px);
      }

      /* Rounded sliders */
      .slider.round {
        border-radius: 34px;
      }

      .slider.round:before {
        border-radius: 50%;
      }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script type="text/javascript">

     $('.show_confirm').click(function(event) {
      var form =  $(this).closest("form");
      var name = $(this).data("name");
      event.preventDefault();
      swal({
        title: `Are you sure you want to delete this record?`,
        text: "If you delete this, it will be gone forever.",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          form.submit();
        }
      });
    });

  </script>
  @endsection
