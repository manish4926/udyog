@extends('layout.master')

@section('content')
<div class="row">
    @include('company.sidemenu')

    <div class="col-md-8">
        <div class="white-card">
          <div class="row">
           <h3 class="title-blue">Applicants</h3>
       </div>
            @foreach($applicants as $applicant)
          <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h5 class="card-title"><i class="fas fa-bolt red"></i>{{$applicant->firstname}} {{$applicant->lastname}}</h5>
                                    </div>
                                     <div class="col-md-4">
                                        <p><i class="fas fa-pen"></i> Skills: {{$applicant->skills}}</p>
                                    </div>
                                    <div class="col-md-8">
                                       <a href="{{route('userprofile',['user'=> $applicant->user_id ])}}" class="btn btn-outline-primary lg-btn-padding"> See Profile</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                     </div>
                </div>
            </div>
            @endforeach
           

        </div>
    </div>

</div>

@push('bottomscript')
@endpush
@endsection




