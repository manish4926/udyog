@extends('layout.admin')

@section('title','Update Video')


@section('content')
	<div class="container">
	<div class="row">
			<br>

              <h3 class="box-title">Update Video</h3>
            </div>
 
            <div class="container"></div>
            <form action="{{ route('videosave',['id'=>$video->id]) }}" role="form" method="post" class="form-horizontal" enctype="multipart/form-data">
			{{ csrf_field() }}  
			<div class="box-body">
                <div class="form-group">
                  <label for="title">Video Title</label>
                  <input type="text" class="form-control" name="title" id="title" placeholder="Enter video title" value="{{$video->title}}">
                </div>
                <div class="form-group">
				<label>Video Description</label>
                  <textarea class="form-control" rows="3" name="description" placeholder="Enter video description">{{$video->description}}</textarea>
				</div>
				<div class="form-group">
                  <label>Select Category</label>
                  <select class="form-control" name="category">
                    <option>Rules & Regulations</option>
                    <option>Machines & Technology</option>
                    <option>GST & Laws</option>
                    <option>Industries</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="tags">Tags</label>
                  <input type="text" class="form-control" name="tags" id="tags" placeholder="Enter video tags" value="{{$video->tags}}">
                </div>
              </div>

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Update Video</button>
              </div>
            </form>
        </div>
		  </div>
		  </div>

@endsection