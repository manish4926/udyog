@extends('layout.master')
    
@section('content')
    <div>
    	<div>
            <h1 align="center">JOBS</h1><br/>
                <form method="get" action="{{ route('alljobs') }}">  
                    {{ csrf_field() }}
                    <table class="table table-hover table-striped table-bordered">
                        <thead class="thead-dark" align="center">
                        	<tr>
                        		<th>Job ID</th>
                        		<th>Job Title</th>
                                <th>Company Name</th>
                                <th>HR Name</th>
                                <th>Experience</th>
                        		<th>Skills</th>
                        		<th>Post Date</th>
                        		<th>Expiry Date</th>
                        		<th>Location</th>
                        		<th>Package</th>
                        		<th>Details</th>
                        	</tr>
                        </thead>
                        <tbody>
                        	@foreach($jobs as $job_opening)
                		        <tr>
                		        	<td>{{$job_opening->job_id}}</td>
                		        	<td>{{$job_opening->job_title}}</td>
                                    <td>{{$job_opening->company_name}}</td>
                                    <td>{{$job_opening->hr_name}}</td>
                		        	<td>{{$job_opening->experience}}</td>
                		        	<td>{{$job_opening->skills}}</td>
                		        	<td>{{$job_opening->postdate}}</td>
                		        	<td>{{$job_opening->expdate}}</td>
                		        	<td>{{$job_opening->location}}</td>
                		        	<td>{{$job_opening->package}}</td>
                		        	<td><a href="{{ route('getdisplay',['job_id'=>$job_opening->job_id])}}">View details</a></td>  
                		        </tr>
                		    @endforeach
                        </tbody>
                	</table>
                </form>
	     </div>
	</div>
@endsection