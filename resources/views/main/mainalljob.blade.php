@extends('layout.master')

@section('title','LATEST JOBS')

@section('content')

{{--@section('center-content')
	<div class="white-card">
		main content
	</div>
@endsection
@section('right-content')
	<div class="white-card">
		side content
	</div>
@endsection--}}

<div class="row">
  <div class="col-8">
	<div class="white-card-directory">

		<h3 class="title-blue">LATEST JOBS</h3>
			@foreach($jobs as $job_opening)

			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="">
							<div class="card-body">
								<div class="row">
									<div class="col-md-8">
										<h5 class="card-title"><i class="fas fa-bolt red"></i> <a href="#">{{ ucfirst($job_opening->job_title) }}</a></h5>
										<p>Company: <a href="#"><u>{{ ucfirst($job_opening->company_name) }}</u></a> </p>
										<p>{{ $job_opening->job_desc }} Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
									</div>
									<div class="col-md-4">
										<img src="{{ asset('img/udyog_logo.png') }}" style="width: 100px; float: right; position: absolute; right: 20px; margin-top: -10px;">
									</div>
									<div class="col-md-4">
										<p><i class="fas fa-pen"></i> Skills: {{$job_opening->skills}}</p>
									</div>
									<div class="col-md-8">
										<p><i class="fas fa-archive"></i> Experience: {{$job_opening->experience}}</p>
									</div>
									<div class="col-md-4">
										<p><i class="fas fa-map-marker"></i> Location: {{$job_opening->location}}</p>
									</div>
									<div class="col-md-8">
										<p><i class="fas fa-rupee-sign"></i> Package: {{$job_opening->package}}</p>
									</div>
								</div>
							</div>
						</div>
					</div>
		<br>		</div>
			</div>

			@endforeach
			{{--Latest Jobs End--}}

		</div>
	</div>
</div>

@endsection
