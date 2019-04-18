@extends('layout.master')
    
@section('content')

@push('topscript')
   
@endpush

@section('center-content')

<div class="row">
  <div class="col-8">
    <div class="white-card">

       <h3 class="center">Candidate List</h3><br />

         <div class="table-responsive">
          <table >

           <tbody>
            @if(count($searching)>0)
               @foreach($searching as $candidatedata)
                  <?php $exp = explode('.', $candidatedata->experience); ?>
                    <tr>
                        <div class="card mb-3">
                            <div class="row no-gutters">
                              <div class="col-md-8">
                                <div class="card-body">
                                    <div class="card-block card-info">
                                      <h3 class="card-head-name">{{  ucfirst($candidatedata->firstname ." ". $candidatedata->lastname)}}</h3>
                                      <br>
                                      <div class="fas fa-archive">
                                        {{ $exp[0]." Years " }}{{ $exp[1] != 0 ? $exp[1]." Months" : ""}}
                                        </div>
                                        <div class="fas fa-graduation-cap" style="float: right">
                                          {{$candidatedata->graduation .", ". $candidatedata->postgraduation}}
                                        </div>
                                        <br/>
                                        <div class="fas fa-pen"><span >{{$candidatedata->skills}}</span></div>
                                        <hr>
                                        <div class="row">
                                        <div class="col-md-6 no-padding">
                                          @if(!empty($candidatedata->email))
                                        <div><i class="fa fa-envelope blue"></i><span> {{ $candidatedata->email }}</span>
                                        </div>
                                          @endif
                                          @if(!empty($candidatedata->mobile_no))
                                          <div><i class="fa fa-phone green"></i><span> {{ $candidatedata->mobile_no }}</span>
                                          </div>
                                          @endif
                                        </div>
                                        <div class="col-md-6 no-padding">
                                          <a target="_blank" href="{{ asset('resumes/'.$candidatedata->resume) }}" class="btn btn-outline-primary lg-btn-padding" class="btn btn-sm">Download Resume</a>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          </div>
                        </div>
            </tr>
            @endforeach
          @endif
          </tbody>
        </table>
      </div>
      {{ $searching->links() }}
    </div>    
  </div>
</div>
@endsection
@section('right-content')
  @include('job.companyjobsearch')
@endsection
@endsection