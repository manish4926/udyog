
@extends('layout.master')

@section('title','BCI - Bhawana Chamber of Industries')

@section('content')

<style>
	.white-card {
		background: #fff;
		display: block;
		widows: 100%;
		min-height: 200px;
		padding:20px;
	}

	.col-md-4 {

    flex: 33.3333333333%;
    max-width: 200;
	}

	.card-img {
    width: 200;
    border-radius: calc(0.25rem - 1px);
	}
	
	.card-head {
		font-size: 15px;
		font-weight:bold; 
	}

	.card-head-span{
		font-size: 10x;
	}

	a {
    color: 000000;
	}

	a:hover {
  color: red;
	}

	.btn-outline-secondary{
		font-size: 10px;
		padding: 5px 12px;
	}
	.btn-info{

		font-size: 12px;
		padding: 5px 12px;
	}


	</style>

<div class="row">
  <div class="col-8">
<div class="white-card">

   <h3 class="center">Industry List</h3><br />

     <div class="table-responsive">
      <table >

       <tbody>
			@foreach($search as $set)
            <tr>

		<div class="card mb-3">
				<div class="row no-gutters">
					<div class="col-md-4">
						<img src="https://cdn.shopify.com/s/files/1/0252/1347/products/IMG_3420.JPG?v=1486859233" class="card-img" alt="...">
					</div>
					<div class="col-md-8">
						<div class="card-body">
								<div class="display-block">
			
						<h2 class="card-head" > <a href="{{ NULL }}"> {{ $set->cname }} </a></h2>
						<form action="{{ route('IndustryList') }}" method="get">
						<h3 class="card-head" > <span > 
							<!--{{ $set->material }} -->							 
							  <input type="submit" name="materialtag" value="{{$set->material}}" class="btn btn-outline-secondary" class="btn btn-sm">
						</span></h3>
						</form>
						<h2 class="card-head"></h2>
						<i class="fa fa-map-marker-alt" style="color:red"></i><span class="card-head-span"> {{ $set->block}} {{ $set->sector }} {{ $set->area}} </span>
						<h3 class="card-head" ></h3>
							<i class="fa fa-phone" style="color:grey"></i>
							<span > {{ $set->phoneno }} </span>
							<h3> </h3>
						<a href="#" class="btn btn-info" class="btn btn-sm">Read More</a>

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
		<div class="white-card">
		<form action="{{ route('IndustryList') }}" method="get">
		<h2>Advanced Filters</h2>

		<label for="">Business Type</label>
		<div>
				<select class="form-control" name="businee_type">
						<option value="">Select</option>
				        @foreach($business_type as $s)
						<option value="{{ $s }}">{{ $s }}</option>
						@endforeach
				</select>
		</div>

		<label for="">Industry Type</label>
		<div>
				<select class="form-control" name="industry_type">
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

<div class="row">

@endsection