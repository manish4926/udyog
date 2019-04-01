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
	</style>
<div class="row">
  <div class="col-8">
<div class="white-card">

   <h3 class="center">Industry List</h3><br />

     <div class="table-responsive">
      <table class="table table-striped table-hover table-bordered">
       <thead class="thead-dark">
        <tr>
         <th>Company Name</th>
				 <th>Material</th>
				 <th>Block</th>
				 <th>Area</th>
				 <th>Email</th>
				 <th>Contact No.</th>
				 <th>Website Link</th>
        </tr>
       </thead>
       <tbody>
			@foreach($search as $set)
            <tr>
               <td>{{ $set->cname }}</td>
               <td>{{ $set->material }}</td>
               <td>{{ $set->address }}</td>
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
				  @foreach($select as $s)
				  <option value="{{ $s->Address }}">{{ $s->address }}</option>
				  @endforeach
				</select>
		</div>
		
		<label for="">Material</label>
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
						@foreach($select as $s)
						<option value="{{ $s->Cname }}">{{ $s->cname }}</option>
						@endforeach
				</select>
		</div>
		<input type="submit" name="submit" value="Search" class="btn btn-danger">
	</form> 
	</div> 
	</div>
</div>
@endsection