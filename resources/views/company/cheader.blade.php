@extends('layout.master')

@section('content')
<div class="row">
    @include('company.sidemenu')

    <div class="col-md-8">
        <div class="white-card">
        <h2><img src="{{asset('microweb/images/header/'.$companydetail->header)}}" class="card-img card-img-padding" alt="{{ ucfirst($companydetail->cname) }}"></h2>
            <div class="col-md-6">

            <form method="post" action="{{route('dashboard2')}}" enctype="multipart/form-data">
            @csrf
            <H4>Company Logo</H4>
            <input name="header" type="file" class="form-control" id="imageid" placeholder="choose file...." class="custom-file-input"/>
                <span style="margin-left: 15px; width: 480px;" class="custom-file-control"></span>
            </div>
            <div class="col-md-4">
            <br>
            <button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#exampleModalCenter">Submit</button>
          </div>
          <br>
                <h6 style="color:red"> ** The dimension of header should be between 1100x500 to 1920x700 </h6>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">MAKE CHANGE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure you want to do changes?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
   </form>
        </div>
    </div>
</div>

@push('bottomscript')
@endpush
@endsection

