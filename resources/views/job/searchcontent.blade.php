@extends('layout.master')
    
@section('content')

@push('topscript')
    
@endpush

@section('center-content')
<div class="white-card">
   
       <table class="table table-hover table-striped table-bordered">
                        <thead class="thead-dark" align="center">
                          <tr>
                                <th>Candidate Name</th>
                                <th>Skills</th>
                                <th>Experience(in years</th>  
                                <th>Qualifications</th>
                                <th>Download Resume</th>
                          </tr>
                        </thead>
                        <tbody align="center">
                          @if(count($searching)>0)
                          @foreach($searching as $candidatedata)
                              <tr>
                                <td>{{$candidatedata->firstname ." ". $candidatedata->lastname}}</td>
                                <td>{{$candidatedata->skills}}</td>
                                <td>{{$candidatedata->experience}}</td>
                                <td>{{$candidatedata->graduation .", ". $candidatedata->postgraduation}}</td>
                                <td><a target="_blank" href="{{ asset('resumes/'.$candidatedata->resume) }}">Download</a></td> 
                            </tr>
                          @endforeach
                          @endif
                      </tbody>
                  </table>
                  {{ $searching->links() }}
  </div>
@endsection
@section('right-content')
  @include('job.companyjobsearch')
@endsection
@endsection