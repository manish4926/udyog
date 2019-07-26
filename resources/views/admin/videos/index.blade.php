@extends('layout.admin')
@section('content')

<div class = 'container'>
	<h1><center>Live Video Scheduler</h1>	
	<div class = 'col-md-6'>
		<h3>All Videos </h3>
		<table class="table table-bordered table-dark">
		  <thead style ="background-color:gray; color:white;" class="thead-dark">
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Title</th>
		      <th scope="col">Duration</th>
		      <th scope="col">Move to Live </th>
		    </tr>
		  </thead>
		  <tbody>
		   @foreach($videos as $videos)
		   	<tr>
		   		<td>{{$videos->id}}</td>
		   		<td>{{$videos->title}}</td>
		   		<td>{{$videos->duration}}</td>
		   		<td><button class="btn btn-success" onclick="move('{{$videos->id}}')"><i class="fa fa-check"></i></button></td>
		   	</tr>
          @endforeach      
          </tbody>
		</table>
	</div>
	<div class = 'col-md-6'>
		<h3>Live Videos</h3>
		<table class="table table-bordered table-dark">
		  <thead style ="background-color:gray; color:white;" class="thead-dark">
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Title</th>
		      <th scope="col">Start Time</th>
		      <th scope="col">End Time</th>
		      <th scope="col">Duration</th>
		    </tr>
		  </thead>
		   <tbody>
		   @foreach($livevideos as $livevideos)
		   	<tr>
		   		<td>{{$livevideos->id}}</td>
		   		<td>{{$livevideos->name}}</td>
		   		<td>{{$livevideos->starttime}}</td>
		   		<td>{{$livevideos->endtime}}</td>
		   		<td>{{$livevideos->duration}}</td>

		   	</tr>
          @endforeach      
          </tbody>
		 </table>
	</div>
</div>

@push('bottomscript')
<script>
function move(id) {

  $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
        }
    });


	$.ajax({
	    type    : 'POST',
	    url     : '{{ route('moveToLive') }}',
	    data : {id: id },
	    success: function(result){
	        console.log(result);
	        location.reload();
	        
	    }           
	});
}
</script>
@endpush
@endsection