@extends('admin.videos.master')
@section('content')

<div class="row">
	<div class="col-lg-12 margin-tb" style-"margin-top: 20px;">
		<div class="pull-left">
			<h2>Show Videos</h2>
		</div>
		<div class="pull-right">
			<a href="{{route('videos.index')}}" class="btn btn-primary">Back</a>
		</div>
	</div>
</div>

<br>

<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<strong>Name:</strong>
			{{$video->name}}
		</div>
		<div class="form-group">
			<strong>Description:</strong>
			{{$video->description}}
		</div>
		<div class="form-group">
			<strong>Order:</strong>
			{{$video->order}}
		</div>
	</div>
</div>
@endsection