@extends('layout.admin')

@section('title','Upload File')


@section('content')
	<div class="container">
	<div class="row">
			<br>
			<!-- <div class="box box-primary">
            <div class="box-header with-border"> -->
              <h3 class="box-title">Upload File</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="container"></div>
            <form action="{{ route('uploadfile') }}" role="form" method="post" class="form-horizontal" enctype="multipart/form-data">
			{{ csrf_field() }}  
			<div class="box-body">
                <div class="form-group">
                  <label for="title">Video Title</label>
                  <input type="text" class="form-control" name="title" id="title" placeholder="Enter video title">
                </div>
                <div class="form-group">
				<label>Video Description</label>
                  <textarea class="form-control" rows="3" name="description" placeholder="Enter video description"></textarea>
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
                  <input type="text" class="form-control" name="tags" id="tags" placeholder="Enter video tags">
                </div>
                <div class="form-group">
                  <label for="videoFile">File Upload</label>
                  <input type="file" name="videoFile">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Upload</button>
              </div>
            </form>
        </div>
		  </div>
		  </div>

@endsection