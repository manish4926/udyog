@extends('layout.master')

@section('title','BCI - Bhawana Chamber of Industries')

@section('content')
	<div class="container">
		<form action="/result" method="POST" role="search">
			{{ csrf_field() }}
			<div class="input-group">
			<br>
           <br>
            <label for="">Company Name  </label>
			
				<input type="text" class="form-control" name="q"
					placeholder="Search company...">

            </div>
			<br>
			<br>
			<label for="">Material</label>
					<br>
					Material: <input type="text"  name="material">
					
				<br>
				<br>
				<label for="">Sector</label>
                            <br>

                            <div class="dropdown">
                            <div id="myDropdown" class="dropdown-content">
                            
							<select name="sectors">
							<option value=" ">----</option>
							<option value="Sector-1">Sector-1</option>
							<option value="Sector-3">Sector-3</option>
							</select>
                            </div>
                            </div>
                            <br>
					<button type="submit" class="btn btn-info">Apply</button>
				</div>
		
		</form>

        @endsection
