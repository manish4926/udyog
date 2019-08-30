@extends('layout.master')

@section('content')

@push('topscript')
<link rel="stylesheet" type="text/css" href="{{ asset('css/job/applicationform.css') }}">
@endpush

{{-- @include('partials.content-divider') --}}


@section('center-content')
<div class="white-card">
	
	<form action="{{route('application')}}" method="post" enctype="multipart/form-data">
		{{ csrf_field() }}

		<div class="form-group">
			<fieldset>
			@if($job_opening)
				<legend>Job Details:</legend>
				<label> job title:  </label><select name="jobid">
				<option value="{{$job_opening->job_id}}">{{$job_opening->job_title}}</option></select>
				<label> company name:  </label><select name="companyname">
				<option value="{{$job_opening->company_name}}">{{$job_opening->company_name}}</option></select><br><br>
			@endif
				<legend>Personal Details:</legend>
				<label>First Name :</label>{{ $applicantinfo->firstname}}<br>
				<label>Last Name :</label>{{$applicantinfo->lastname}}<br>
			</fieldset>
			

			<label>Email :  </label>{{ $applicantinfo->email}}<br>
</div>
				<div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit Application" name="submitApplication"/>
				</div>
</form>
</div>
@endsection

@endsection