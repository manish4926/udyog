@extends('layout.master')

@section('title','BCI - Bhawana Chamber of Industries')

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

   <h3 class="center">Industry List</h3><br />

     <div class="table-responsive">
      <table >

       <tbody>
			@foreach($search as $set)
            <tr>

		<div class="card mb-3">
				<div class="row no-gutters">
					<div class="col-md-4-directory">
						<img src="https://cdn.shopify.com/s/files/1/0252/1347/products/IMG_3420.JPG?v=1486859233" class="card-img card-img-padding" alt="{{ ucfirst($set->cname) }}">
					</div>
					<div class="col-md-8">
						<div class="card-body">
								<div class="card-block card-info">
			
						<h2 class="card-head-directory" >{{  ucfirst($set->cname) }}</h2>
						<h3 class="card-head-directory" > <span > 
							  <a href="{{ route('IndustryList', ['tag' => $set->material ]) }}" class="btn btn-primary btn-sm">{{$set->material}}</a>
						</span></h3>
						<div class="card-desc">Approx 3 Lines of Text</div>
							<hr>
							<div class="row">
							<div class="col-md-6 no-padding">
								<div><i class="fa fa-map-marker-alt red"></i><span class="card-head-span"> {{ $set->block}} {{ $set->sector }} {{ $set->area}} </span></div>
								@if(!empty($set->email))<div><i class="fa fa-envelope blue"></i><span> {{ $set->email }}</span></div>@endif
								@if(!empty($set->phoneno))<div><i class="fa fa-phone green"></i><span> {{ $set->phoneno }}</span></div>@endif
							</div>
							<div class="col-md-6 no-padding">
								<a href="{{route('microwebsite', ['site'=> $set->slug ])}}" class="btn btn-outline-primary lg-btn-padding" class="btn btn-sm"> Visit Site</a>
							</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
            </tr>
            @endforeach
	   </tbody>
      </table>
	 </div>
	 {{ $search->links() }}
	 <div>
			<a class="btn btn-success" href="{{ route('create') }}">New Entry</a>
	 </div>
    </div>    
   </div>
  
  <div  class="col-4">
		<div class="white-card-directory">
		<form action="{{ route('IndustryList') }}" method="get">
		<h2>Advanced Filters</h2>

		<label for="">Business Type</label>
		<div>
				<select class="form-control" name="business_types">
						<option value="">Select</option>
				        @foreach($business_type as $s)
						<option value="{{ $s }}">{{ $s }}</option>
						@endforeach
				</select>
		</div>

		<label for="">Industry Type</label>
		<div>
				<select class="form-control" name="industry_types">
						<option value="">Select</option>
				    @foreach($industry_type as $s)
						<option value="{{ $s }}">{{ $s }}</option>
						@endforeach 
				</select>
		</div>

		<label for="">Product/Service</label>
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

		<label for="">Sectors</label>
		<div>
				<select class="form-control" name="sector">
				  <option value="">Select</option>
				  @foreach($sectors as $s)
				  <option value="{{ $s->sector }}">{{ $s->sector }}</option>
				  @endforeach
				</select>
		</div>
		<br/>	
		<input type="submit" name="submit" value="Search" class="btn btn-danger">
	</form> 
	</div> 
	</div>
</div> 
@endsection