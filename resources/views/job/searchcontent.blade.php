@extends('layout.master')
    
@section('content')

@push('topscript')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/job/jobsearch.css')}}">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
@endpush


        <form method="get" action="{{ route('searchcontent') }}">  
       {{ csrf_field() }}
       
        <div>
          <div>
        <table align="center" border-spacing= "2px" bgcolor="" order-color= "gray">
          <tr>
                <th>JOB TITLE</th>
                <th>company name</th>
                <th>hr name</th>
                <th>experience</th>
            <th>Skills</th>
            <th>postdate</th>
            <th>expirydate</th>
            <th>location</th>
            <th>package</th>
          </tr>

          @if(count($searching)>0)
          @foreach($searching as $job_opening)
            
           
            <tr>
              <td>{{$job_opening->job_title}}</td>
              <td>{{$job_opening->company_name}}</td>
              <td>{{$job_opening->hr_name}}</td>
              <td>{{$job_opening->experience}}</td>
              <td>{{$job_opening->skills}}</td>
              <td>{{$job_opening->postdate}}</td>
              <td>{{$job_opening->expdate}}</td>
              <td>{{$job_opening->location}}</td>
              <td>{{$job_opening->package}}</td>
              {{-- <td><a href="{{url('/post/alljobs/details'.$job_opening->job_id)}}" >View details</a></td>   --}}
              <td><a href="{{ route('getdisplay',['job_id'=>$job_opening->job_id])}}">View details</a></td>  
            </tr>
        @endforeach
        @endif
      </table>
      </div>
    </form>
  </div>
  </div>
        
        @endsection