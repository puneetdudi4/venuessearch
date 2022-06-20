@extends('admin.layout.main') 
@section('content')

<div class="subheader py-2  subheader-transparent " id="kt_subheader">
  <div class=" container  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
    <!--begin::Info-->
    <div class="d-flex align-items-center flex-wrap mr-1">
      <!--begin::Heading-->
      <div class="d-flex flex-column">
        <!--begin::Breadcrumb-->
        <div class="d-flex align-items-center font-weight-bold my-2">
          <!--begin::Item-->
          <a href="#" class="opacity-75 hover-opacity-100"> <i class="flaticon2-shelter text-dark icon-1x"></i> </a>
          <!--end::Item-->
          <!--begin::Item--><span class="label label-dot label-sm bg-dark opacity-75 mx-3"></span> <a href="#" class="text-dark text-hover-dark opacity-75 hover-opacity-100">
          Hotel Attribute</a>
          <!--end::Item-->
          <!--begin::Item--><span class="label label-dot label-sm bg-dark opacity-75 mx-3"></span> <a href="#" class="text-dark text-hover-dark opacity-75 hover-opacity-100">
          Hotel Country Attribute</a>
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
         <div class="col-lg-5">
            <!--begin::Mixed Widget 14-->
            <div class="card card-custom gutter-b example example-compact">
               <div class="card-header">
                  <h3 id="form-heading" class="card-title">
                     Add Hotel Country Attribute
                  </h3>
               </div>
               <!--begin::Form-->
               <form class="form" method="post" action="{{ url('admin/countries/add') }}" id="form1" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  <input type="hidden" id="conId" name="id">
                  <div class="card-body">
                     <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Country Name" value="{{ old('name') }}" required>
                        @if ($errors->has('name'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                     </div>
                     <div class="form-group validated">
                        <label class="form-control-label" for="status">Status</label>
                        <select class="form-control" id="status" name="status" required>
                            <option value="">Select</option>
                            <option value="APPROVED" {{ (old('status') == 'APPROVED') ? 'selected' : '' }}> APPROVED</option>
                            <option value="PENDING" {{ (old('status') == 'PENDING') ? 'selected' : '' }}>PENDING</option>
                        </select>
                        @if ($errors->has('status'))
                            <span class="text-danger">
                                <strong>{{ $errors->first('status') }}</strong>
                            </span>
                        @endif
                    </div>
                     <div class="form-group d-none" id="is_deleted_div">
                        <label>Is Deleted</label>
                        <div class="checkbox-list">
                           <label class="checkbox checkbox-outline checkbox-outline-2x checkbox-primary checkbox-lg">
                              <input type="checkbox" name="is_deleted" id="is_deleted" value="1" {{ (old('is_deleted') == 1) ? 'checked' : '' }}>
                              <span></span>
                           </label>
                        </div>
                    </div>
                  </div>
                  <div class="card-footer">
                     <button type="submit" class="btn btn-primary mr-2">Submit</button>
                     <button type="reset" class="btn btn-secondary">Cancel</button>
                  </div>
               </form>
               <!--end::Form-->
            </div>
            <!--end::Mixed Widget 14-->
         </div>
         <div class="col-lg-7">
            <!--begin::Advance Table Widget 4-->
            <div class="card card-custom gutter-b" >
               <div class="card-header flex-wrap py-3">
                  <div class="card-title">
                     <h3 class="card-label">Countries Attributes List</h3>
                  </div>
               </div>
               <div class="card-body">
                  <!--begin: Datatable-->
                  <table class="table table-bordered table-checkable" id="country">
                     <thead>
                        <tr>
                           <th>Sr. No.</th>
                           <th>Name</th>
                           <th>Status</th>
                           <th>Is Deleted</th>
                           <th>Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        @php
                          $i = 1;
                        @endphp
                        @foreach($country as $cAtt)
                        <tr>
                           <td>{{$i++}}</td>
                           <td>{{ $cAtt->name }}</td>
                           <td>
                              <span class="label label-lg font-weight-bold {{ $cAtt->status === 'APPROVED' ? 'label-light-primary' : 'label-light-danger' }}  label-inline">{{ $cAtt->status }}</span>
                           </td>
                           <td><span class="label label-lg font-weight-bold {{ $cAtt->is_deleted == 0 ? 'label-light-primary' : 'label-light-danger' }} label-inline">{{ $cAtt->is_deleted == 0 ? 'No' : 'Yes' }}</span></td>
                           <td>
                              <a href="javascript:;" class="btn btn-sm btn-clean btn-icon mr-2" title="Edit details" onclick="editCountry({{$cAtt->id}})">
                              <i class="far fa-edit"></i>
                              </a>
                           </td>
                        </tr>
                        @endforeach
                     </tbody>
                  </table>
                  <!--end: Datatable-->
               </div>
            </div>
            <!--end::Advance Table Widget 4-->
         </div>
      </div>
      <!--end::Row-->
   </div>
   <!--end::Container-->
</div>
@endsection
@section('pageScript')
<script type="text/javascript">
   $(document).ready(function () {
      $('#country').DataTable({
      	"responsive": true
      });
   });

   function editCountry($id){
     $.get("/admin/countries/edit/"+$id, function( data, status ) {
         $('#is_deleted_div').removeClass('d-none');
         $('#is_deleted_div').addClass('d-block');

         console.log(data.is_deleted);

         if (data.is_deleted == 0) {
            $('#is_deleted').prop('checked',false);
         }else{
            $('#is_deleted').prop('checked',true);
         }

          $('#name').val(data.name);
          //$('#is_deleted').val(data.is_deleted);
          $('#status').val(data.status);
          $('#conId').val(data.id);
          $('#form-heading').text('Edit Hotel Country Attribute');
          $('.btn-primary').text('Update');
          $('#form1').attr('action', '{{ url("/admin/countries/update") }}');
     });
   }
</script>
@endsection