
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

	.card-head {
		font-size: 20px;
	}

	.card-head span{
		font-size: 15x;
	}
	</style>
<div class="row">
  <div class="col-8">
<div class="white-card">

   <h3 class="center">Industry List</h3><br />

     <div class="table-responsive">
      <table class="table table-striped table-hover table-bordered">
      <!--  <thead class="thead-dark">
        <tr>
         		 <th>Company Name</th>
				 <th>Material</th>
				 <th>Email</th>
				 <th>Contact No.</th>
				 <th>Block</th>
				 <th>Sector</th>
				 <th>Area</th>
				 <th>Website Link</th>
        </tr> 
       </thead> -->
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
			
						<h3 class="card-head">Company Name: <span>{{ $set->cname }} </span></h3>

						<h2 class="card-head">Material Name: <span>{{ $set->material }} </span></h2>
						
						<h2 class="card-head">Email: <span>{{ NULL }} </span></h2>
					
						<h1 class="card-head">Phone no: <span>{{ $set->phoneno}} </span></h1>
						<h1 class="card-head">Block: <span>{{ $set->block}} </span></h1>
						<h1 class="card-head">Sector: <span>{{ $set->sector }} </span></h1>
						<h1 class="card-head">Area: <span>{{ $set->area}} </span></h1>
						<h1 class="card-head">Website: <span>{{ NULL}} </span></h1>

					
				
						</div>
					</div>
				</div>
			</div>
			

<!--
               <td>{{ $set->cname }}</td>
               <td>{{ $set->material }}</td>
               <td>{{ $set->email}}</td>
               <td>{{ $set->phoneno}}</td>
               <td>{{ $set->block }}</td>
               <td>{{ $set->sector }}</td>
               <td>{{ $set->area }}</td>
               <td>{{ $set->weblink }}</td> -->
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
		
		<input type="submit" name="submit" value="Search" class="btn btn-danger">
	</form> 
	</div> 
	</div>
</div>

<div class="row">
	<!--
<div class="col-md-4 col-sm-6 col-xs-12">
	<div class="white-card">
		<div class="feature-title-item">
			<h1>Property</h1>
			<img class="img-fluid" alt="Udyog TV" src="/img/udyog_logo.png" width="90px">
		</div>
		<div class="feature-box-text">
			<h3>
				<a href="">company name</a>
			</h3>
			<a href="#">
				<i class="fa fa-phone">
				</i>
				+91 9711223390
			</a>
			<p>
				details of company
			</p>
		</div>
		<div class="feature-item-location">
			<h2>
				<i class="fa fa-map-marker">
				</i>
				company location
			</h2>
		</div>
	</div>
</div>

<div class="col-md-4 col-sm-6 col-xs-12">
	<div class="white-card">
		<div class="feature-title-item">
			<h1>Property</h1>
			<img class="img-fluid" alt="Udyog TV" src="/img/udyog_logo.png" width="90px">
		</div>
		<div class="feature-box-text">
			<h3>
				<a href="">company name</a>
			</h3>
			<a href="#">
				<i class="fa fa-phone">
				</i>
				+91 9711223390
			</a>
			<p>
				details of company
			</p>
		</div>
		<div class="feature-item-location">
			<h2>
				<i class="fa fa-map-marker">
				</i>
				company location
			</h2>
		</div>
	</div>
</div>

<div class="col-md-4 col-sm-6 col-xs-12">
	<div class="white-card">
		<div class="feature-title-item">
			<h1>Property</h1>
			<img class="img-fluid" alt="Udyog TV" src="/img/udyog_logo.png" width="90px">
		</div>
		<div class="feature-box-text">
			<h3>
				<a href="">company name</a>
			</h3>
			<a href="#">
				<i class="fa fa-phone">
				</i>
				+91 9711223390
			</a>
			<p>
				details of company
			</p>
		</div>
		<div class="feature-item-location">
			<h2>
				<i class="fa fa-map-marker">
				</i>
				company location
			</h2>
		</div>
	</div>
</div>
</div> 
<div class="card mb-3">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="..." class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        
      </div>
    </div>
  </div>
</div>-->
@endsection