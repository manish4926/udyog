@extends('layout.master')

@section('content')
<div class="row">
    @include('company.sidemenu')

    <div class="col-md-8">
        <div class="white-card">
        <h2> Contact Details</h2>
            <div class="col-md-4">
            <form method="post" action="{{route('dashboard2')}}">
            @csrf
            <div class="form-wrapper">
                        <label for="">Company Email</label>
                        <input type="email" class="form-control" name="companyemail" data-parsley-trigger="keyup" data-parsley-required>
                    </div>

                    <div class="form-wrapper">
                        <label for="">Company address</label>
                        <div class="form-wrapper">
                        <label for="">Block</label>
                        <input type="text" class="form-control" name="block" validateString data-parsley-trigger="keyup" data-parsley-required>
                    </div>
                    <div class="form-wrapper">
                        <label for="">Sector</label>
                        <input type="text" class="form-control" name="sector" validateString data-parsley-trigger="keyup" data-parsley-required>
                    </div>
                    <div class="form-wrapper">
                        <label for="">Area</label>
                        <input type="text" class="form-control" name="area" validateString data-parsley-trigger="keyup" data-parsley-required>
                    </div>
                    <div class="form-wrapper">
                        <label for="">State</label>
                        <input type="text" class="form-control" name="state" validateString data-parsley-trigger="keyup" data-parsley-required >
                    </div>
                 </div>
                    <div class="form-wrapper">
                        <label for="">Phone number</label>
                        <input type="text" class="form-control" name="phoneno" data-parsley-pattern="\+?\d[\d -]{8,12}\d" data-parsley-required>
                    </div>
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

