@extends('layout.master')

@section('title','Candidate Search')

@section('content')

<div class="row">
	<div class="col-8">
		<div class="white-card-directory">
	   		<h3 class="center">Search Result</h3><br />
	     		<div class="table-responsive">
			      	<table >
			       		<tbody>
						
				   		</tbody>
			      	</table>
				</div>		
		 <div>
	</div>
</div>    

  <div  class="col-4">
		<div class="white-card-directory">
				<form action="{{ route('candidatesearch') }}" method="get">
					<h2>Search Candidates</h2>

					<label for="">Experience</label>
						<div>
								<select class="form-control" name="business_types">
										<option value="">Select</option>
								        @foreach($business_type as $s)
										<option value="{{ $s }}">{{ $s }}</option>
										@endforeach
								</select>
						</div>

					<label for="">Graduation</label>
						<div>
								<select class="form-control" name="industry_types">
										<option value="">Select</option>
								    @foreach($industry_type as $s)
										<option value="{{ $s }}">{{ $s }}</option>
										@endforeach 
								</select>
						</div>

					<label for="">Post Graduation</label>
						<div>
								<select class="form-control" name="material">
										<option value="">Select</option>
										@foreach($materials as $s)
										<option value="{{ $s->material }}">{{ $s->material }}</option>
										@endforeach
								</select>
						</div>

					<label for="">Company</label>
						<div>
								<select class="form-control" name="company">
										<option value="">Select</option>
										@foreach($companys as $s)
										<option value="{{ $s->cname }}">{{ $s->cname }}</option>
										@endforeach
								</select>
						</div>

					<label for="">Area</label>
						<div>
								<select class="form-control" name="area">
								  <option value="">Select</option>
								  @foreach($areas as $s)
								  <option value="{{ $s->area }}">{{ $s->area }}</option>
								  @endforeach
								</select>
						</div>
				<br/>	
				<input type="submit" name="submit" value="Search" class="btn btn-danger">
			</form> 
		</div> 
	</div>
@endsection