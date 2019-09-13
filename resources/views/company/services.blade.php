@extends('layout.master')

@section('content')
<div class="row">
    @include('company.sidemenu')

    <div class="col-md-8">
       <div class="col-md-8">
        <div class="white-card">
        <h2> Enter the services</h2>
            <!-- <div class="col-md-4"> -->
            <form method="post" action="{{route('servicepanelsubmit')}}" enctype="multipart/form-data" id="material_form">
            @csrf
            <div class="form-group">
              <input type="text" class="form-control" name="service" id="Service" placeholder="Enter the service title">
            </div>
            <div class="form-group">
              <input type="file" name="image" id="image" class="form-control">
            </div>
            <div class="form-group">
              <input type="text" name="description" id="description" class="form-control">
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
        <h2> Services List </h2>
            <table class="table table-bordered table-striped table-hover" id="table1">
              <thead>
                <th>S.No</th>
                <th>Service Title</th>
                <th>Service Image</th>
                <th>Service Description</th>
                <th>Delete</th>
              </thead>
              <tbody>
              @php $i = 0 @endphp
              @foreach($services as $service)
              <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $service->title }}</td>
                <td><img src="{{ asset('microweb/images/services/'.$service->image) }}" style="width: 100px;"></td>
                <td>{{ $service->description }}</td>
                <td><a href="{{route('deleteservice', ['svid'=> $service->svid ])}}" class="remCF">Remove</a></td>
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
