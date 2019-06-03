@extends('admin.videos.master')
@section('content')

<div class="row">
	<div class="col-lg-12 margin-tb" style-"margin-top: 20px;">
		<div class="pull-left">
			<h2>Edit Video</h2>
		</div>
		<div class="pull-right">
			<a href="{{route('videos.index')}}" class="btn btn-primary">Back</a>
		</div>
	</div>
</div>
<br>

<form action="{{route('videos.update',$video->id)}}" method="post" role="form">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	<input type="hidden" name="_method" value="PUT">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group{{$errors->has('name')?' has-error':''}}">
				<strong>Name:</strong>
				<input type="text" name="name" value="{{$video->name}}" class="form-control" placeholder="Name">
				<span class="text-danger">{{$errors->first('name')}}</span>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group {{$errors->has('detail')?' has-error':''}}">
				<strong>Description:</strong>
				<textarea class="form-control rows=10" name="description" placeholder="Description">{{$video->description}}</textarea>
				<span class="text-danger">{{$errors->first('description')}}</span>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12">
			<button type="submit" class="btn btn-primary">Update</button>
		</div>
	</div>
</form>
@endsection