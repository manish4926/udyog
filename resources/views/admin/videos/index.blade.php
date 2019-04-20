@extends('admin.videos.master')
@section('content')
<div class="vue-section"  id="app">
<div class='row'>
	<div class="col-lg-12 margin-tb" style="margin-top: 20px">
		<div class="pull-left">
			<h2>Live Videos Scheduler </h2>
		</div>
		<div class="pull-right">
			{{-- <a href="{{route('videos.create')}}" class="btn btn-success">Create New Videos Info</a> --}}
		</div>
	</div>
</div>

{{-- <div class="table-responsive">
	<table class="table table-hover">
		<thead>
			<tr>
				<th>No.</th>
				<th>Name</th>
				<th>Description</th>
				<th>Order</th>
				<th width="300px">Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($videos as $video)
			<tr>
				<td>{{$video->id}}</td>
				<td>{{$video->name}}</td>
				<td>{{$video->description}}</td>
				<td>{{$video->order}}</td>
				<td>
					<a href="{{route('videos.show', $video->id)}}" class="btn btn-info">Show</a>
					<a href="{{route('videos.edit', $video->id)}}" class="btn btn-primary">Edit</a>
					<form action="{{ route('videoinfo.delete', $video->id) }}" method="POST">
	                                {{ csrf_field() }}
	                                {!! method_field('delete') !!}

	                                <button type="submit" class="btn btn-danger">Delete</button>
	                </form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table> --}}

	<hr>
	<br>

	<table-draggable :videos="{{$videos}}" ></table-draggable>

</div>
</div>
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

	$(".delete-item").click(function(){
		var id = $(this).data('id');
		//alert(id);

    $.ajax({
        url: "{{route('deleteitem')}}",
        type: "post",
        data: { id : id },
        success: function(data){
            //$("#employees").html(data);
            location.reload();
        }
    });
});
</script> --}}

@endsection