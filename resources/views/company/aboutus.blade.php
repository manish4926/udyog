@extends('layout.master')

@section('content')
@push('bottomscript')
<script src="https://cdn.tiny.cloud/1/qwp2vxacyh2n0efsc99k49utcc8wpxa7mhs6xkac3x65jdjh/tinymce/5/tinymce.min.js"></script>
<script>
  tinymce.init({
    selector: '.tinymce'
  });
  </script>
@endpush
<div class="row">
    @include('company.sidemenu')

    <div class="col-md-8">
        <div class="white-card">
        <h2> {{ $companydetail->about }} </h2>
            <div class="col-md-12">
            <form method="post" action="{{route('dashboard2')}}">
            @csrf
            <textarea name="about" id="About" row ="12" class="form-control tinymce" ></textarea>

            </div>
            <div class="col-md-4">
            <br>
            <button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#exampleModalCenter">Submit</button>
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
  <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script>tinymce.init({ selector:'#mytextarea' });</script>
@endpush
@endsection
