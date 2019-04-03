@extends('layout.master')

@section('title','BCI - Bhawana Chamber of Industries')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>


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

    flex: 0 0 33.3333333333%;
    max-width: 150;
	}

	.card-img {
    width: 150;
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
			
						<h1 class="card-head" > <a href="/livesearch"> {{ $set->cname }} </a></h2>

						<h3 class="card-head" > Material: <span > {{ $set->material }} </span></h3>
						<h2 class="card-head"></h2>
						<i class="fa fa-map-marker" style="color:red"></i><span class="card-head-span"> {{ $set->block}} {{ $set->sector }} {{ $set->area}}
						</span>
			
				
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

		<label for="">Area</label>
		<div>
				<select class="form-control" name="address">
				  <option value="">Select</option>
				  @foreach($areas as $s)
				  <option value="{{ $s->address }}">{{ $s->address }}</option>
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

		<label for="">Material</label>
		<div>
				<select class="form-control" name="material">
						<option value="">Select</option>
						@foreach($materials as $s)
						<option value="{{ $s->material }}">{{ $s->material }}</option>
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
		
		<input type="submit" name="submit" value="Search" class="btn btn-danger">
	</form> 
	</div> 
	</div>
</div>
@endsection