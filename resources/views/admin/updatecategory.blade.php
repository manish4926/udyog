@extends('layout.admin')

@section('title','Update Category')


@section('content')
<div class="container">
	<div class="row">
			<br>

              <h3 class="box-title">Update Category</h3>
            </div>

            <div class="container"></div>
            <form action="{{ route('savecategory',['id'=>$category->id]) }}" role="form" method="post" class="form-horizontal" enctype="multipart/form-data">
			{{ csrf_field() }}
			<div class="box-body">
                <div class="form-group">
                  <label for="title">Edit Category</label>
                  <input type="text" class="form-control" name="category" id="title" value="{{$category->category}}">
                </div>
              </div>

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Update Category</button>
              </div>
            </form>
        </div>
		  </div>
		  </div>


@endsection

