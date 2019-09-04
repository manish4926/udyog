@extends('layout.master')

@section('content')
<div class="row">
    @include('company.sidemenu')

    <div class="col-md-8">
       <div class="col-md-8">
        <div class="white-card">
        <h2> Enter the testimonails </h2>
            <!-- <div class="col-md-4"> -->
            <form method="post" action="{{route('testimonialpanelsubmit')}}" enctype="multipart/form-data" id="material_form">
            @csrf
            <div class="form-group">
              <input type="text" class="form-control" name="customer" id="customer" placeholder="Enter Edited Name">
            </div>
            <div class="form-group">
              <input type="file" name="image" id="image" class="form-control">
            </div>
            <div class="form-group">
              <input type="text" name="review" id="review" class="form-control">
            </div>
            <input type="submit" name="insert" id="insert" class="btn btn-primary" value="Upload" />
            {{-- <input type="button" name="save" class="btn btn-primary" value="Save to database" id="butsave"/> --}}
            </form>
            
            <!-- </div> -->
        </div>
        <hr>

        <div class="white-card">
        @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
        <h2> Testimonial List </h2>
            <table class="table table-bordered table-striped table-hover" id="table1">
              <thead>
                <th>S.No</th>
                <th>Customer Name</th>
                <th>Customer Image</th>
                <th>Customer Review</th>
                <th>Delete</th>
              </thead>
              <tbody>
              @php $i = 0 @endphp
              @foreach($testimonials as $testimonial)
              <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $testimonial->customername }}</td>
                <td><img src="{{ asset('team/'.$testimonial->image) }}" style="width: 100px;"></td>
                <td>{{ $testimonial->review }}</td>
                <td><a href="{{route('deletereview', ['cstid'=> $testimonial->cstid ])}}" class="remCF">Remove</a></td>
              </tr>
              @endforeach
              </tbody>
            </table>
        </div>
    </div>
</div>



       {{--  <div class="white-card">
        <h2> Testimonial </h2>
            <div class="col-md-4">
            <form method="post" action="{{route('dashboard2')}}">
            @csrf
            <input type="text" class="form-control" name="cname" placeholder="Enter dataP">
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
</div> --}}

@push('bottomscript')
@endpush
@endsection
