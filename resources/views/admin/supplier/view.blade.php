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
      <!--begin::Items-->
      <div class="mt-8 mb-9">
        <div class="text-dark-75 font-size-h4 mb-5 font-weight-bold ">Details</div>
        <div class="form-group row">
          <div class="col-lg-4">
            <label>Country:</label>
            <b>{{$supplier->supplier_country ?? 'Null'}}</b>
          </div>
          <div class="col-lg-4">
            <label>State:</label>
            <b> {{$supplier->supplier_state ?? 'Null'}}</b>
          </div>
          <div class="col-lg-4">
            <label>City:</label>
            <b> {{$supplier->supplier_city ?? 'Null'}}</b>
          </div>
        </div>

         <div class="form-group row">
          <div class="col-lg-4">
            <label>Primary Number:</label>
            <b>{{$supplier->primary_number ?? 'Null'}}</b>
          </div>
          <div class="col-lg-4">
            <label>Landline Number:</label>
            <b> {{$supplier->landline_no ?? 'Null'}}</b>
          </div>
       
        </div>

        <div class="form-group row">
          <div class="col-lg-12">
            <h4>Social Details</h4>
          </div>
          <div class="col-lg-12">
            <label>Facebook :</label>
            <b>{{$supplier->facebook ?? 'Null'}}</b>
          </div>
          <div class="col-lg-12">
            <label>Twitter :</label>
            <b> {{$supplier->twitter ?? 'Null'}}</b>
          </div>
          <div class="col-lg-12">
            <label>Instagram :</label>
            <b> {{$supplier->instagram ?? 'Null'}}</b>
          </div>
          <div class="col-lg-12">
            <label>You Tube :</label>
            <b> {{$supplier->youtube ?? 'Null'}}</b>
          </div>
          <div class="col-lg-12">
            <label>Website :</label>
            <b> {{$supplier->website ?? 'Null'}}</b>
          </div>

           <div class="col-lg-4">
            <label>Is Featured :</label>
            <b> {{$supplier->is_featured == 1 ? 'Yes' : 'No'}}</b>
          </div>
        </div>
         <div class="form-group row">
          <div class="col-md-12">
            <label>Address :</label>
            <span>{{$supplier->address ?? 'Null'}}</span>
          </div>
          <div class="col-md-6">
            <label>Description :</label>
            <p>{{ $supplier->description ?? '' }}</p>
          </div>
           <div class="col-md-6">
            <label>Summary :</label>
            <p>{{ $supplier->summary ?? '' }}</p>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-4" style="width: 100%;">
            <label>Main Image</label>
            <img style="width: 100% !important" height="200px;" src="{{url('uploads/hotels_featured_images/', $supplier->featured_image)}}" class="img-responsive">
          </div>
          <div class="col-md-8">
            <label>Featured Image</label>
            <br>
            @foreach($supplier_gallery as $gal)
              <img src="{{url('uploads/hotels_featured_images', $gal->image)}}" width="100" height="100" class="img-responsive">
            @endforeach
          </div>
        </div>


 
      </div>
      <!--end::Items-->
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
@endsection
