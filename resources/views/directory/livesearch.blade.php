<<<<<<< HEAD

=======
>>>>>>> d2692a5e98b7dfc23494d27ca3b0d654eb1091c0
@extends('layout.master')

@section('title','BCI - Bhawana Chamber of Industries')

<<<<<<< HEAD
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

@section('content')
=======
@section('content')

>>>>>>> d2692a5e98b7dfc23494d27ca3b0d654eb1091c0
<style>
	.white-card {
		background: #fff;
		display: block;
		widows: 100%;
		min-height: 200px;
		padding:20px;
	}

<<<<<<< HEAD
	.card-head {
		font-size: 20px;
	}

	.card-head span{
		font-size: 15x;
	}
	</style>
=======
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

>>>>>>> d2692a5e98b7dfc23494d27ca3b0d654eb1091c0
<div class="row">
  <div class="col-8">
<div class="white-card">

   <h3 class="center">Industry List</h3><br />

     <div class="table-responsive">
<<<<<<< HEAD
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
=======
      <table >

>>>>>>> d2692a5e98b7dfc23494d27ca3b0d654eb1091c0
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
			
<<<<<<< HEAD
						<h3 class="card-head">Company Name: <span>{{ $set->cname }} </span></h3>

						<h2 class="card-head">Material Name: <span>{{ $set->material }} </span></h2>
						
						<h2 class="card-head">Email: <span>{{ NULL }} </span></h2>
					
						<h1 class="card-head">Phone no: <span>{{ $set->phoneno}} </span></h1>
						<h1 class="card-head">Block: <span>{{ $set->block}} </span></h1>
						<h1 class="card-head">Sector: <span>{{ $set->sector }} </span></h1>
						<h1 class="card-head">Area: <span>{{ $set->area}} </span></h1>
						<h1 class="card-head">Website: <span>{{ NULL}} </span></h1>

					
				
=======
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

>>>>>>> d2692a5e98b7dfc23494d27ca3b0d654eb1091c0
						</div>
					</div>
				</div>
			</div>
			
<<<<<<< HEAD

<!--
               <td>{{ $set->cname }}</td>
               <td>{{ $set->material }}</td>
               <td>{{ $set->email}}</td>
               <td>{{ $set->phoneno}}</td>
               <td>{{ $set->block }}</td>
               <td>{{ $set->sector }}</td>
               <td>{{ $set->area }}</td>
               <td>{{ $set->weblink }}</td> -->
=======
>>>>>>> d2692a5e98b7dfc23494d27ca3b0d654eb1091c0
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

<<<<<<< HEAD
		<label for="">Company</label>
		<div>
				<select class="form-control" name="company">
						<option value="">Select</option>
						@foreach($companys as $s)
						<option value="{{ $s->cname }}">{{ $s->cname }}</option>
=======
		<label for="">Business Type</label>
		<div>
				<select class="form-control" name="businee_type">
						<option value="">Select</option>
				        @foreach($business_type as $s)
						<option value="{{ $s }}">{{ $s }}</option>
>>>>>>> d2692a5e98b7dfc23494d27ca3b0d654eb1091c0
						@endforeach
				</select>
		</div>

<<<<<<< HEAD
		<label for="">Material</label>
		<div>
				<select class="form-control" name="material">
						<option value="">Select</option>
						@foreach($materials as $s)
						<option value="{{ $s->material }}">{{ $s->material }}</option>
=======
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
						@foreach($select as $s)
						<option value="{{ $s->Material }}">{{ $s->material }}</option>
						@endforeach
				</select>
		</div>

		<label for="">Company</label>
		<div>
				<select class="form-control" name="company">
						<option value="">Select</option>
						@foreach($companys as $s)
						<option value="{{ $s->cname }}">{{ $s->cname }}</option>
>>>>>>> d2692a5e98b7dfc23494d27ca3b0d654eb1091c0
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
<<<<<<< HEAD
		
=======
		<br/>	
>>>>>>> d2692a5e98b7dfc23494d27ca3b0d654eb1091c0
		<input type="submit" name="submit" value="Search" class="btn btn-danger">
	</form> 
	</div> 
	</div>
</div>
<<<<<<< HEAD

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
=======
>>>>>>> d2692a5e98b7dfc23494d27ca3b0d654eb1091c0
@endsection