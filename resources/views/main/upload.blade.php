@extends('layout.master')

@section('title','Upload File')

@section('content')

	<div class="row">
			<br>
				<form action="{{ route('upload.file') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
					{{ csrf_field() }}
				<input type="file" name="videoFile">
				<br><br> 
				<input type="Submit" class="btn btn-info">
			</form>
	</div>

@endsection