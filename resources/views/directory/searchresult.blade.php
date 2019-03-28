@extends('layout.master')

@section('title','BCI - Bhawana Chamber of Industries')

@section('content')
	<div class="container">
		<form action="/result" method="POST" role="search">
			{{ csrf_field() }}
			
            <div class="input-group">
           <br>
           <br>
            <label for="">Company Name</label>
            <br>
            	<input type="text" class="form-control" name="q"
					placeholder="Search users">
                    <!-- <span class="input-group-btn">
					<button type="submit" class="btn btn-default">
						<span class="glyphicon glyphicon-search"></span>
					</button>
				</span> -->
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
                            <!--   <input type="radio"  name="sectors" value="Sector-1"}->Sector-1
                            <input type="radio"  name="sectors" value="Sector-3"}->Sector-3 -->

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

            </div>

            <div class="container">
                @if(isset($details))
                    <p> The Search results for your query <b> {{ $query }} </b> are :</p>
                <h2>Company details</h2>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Company Name</th>
                            <th>Contact Number</th>
                            <th>Material</th>
                            <th>Address</th>   
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($details as $user)
                        <tr>
                            <td><a href="/search">{{$user->Cname}}</a></td>
                            <td>{{$user->Material}}
                            <td>{{$user->Phoneno}}</td>
                            <td>{{$user->Address}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @endif
            </div>

            @endsection
