@extends('layout.admin')

@section('title',' Add Category')
@section('content')

	<div class="container">
	<div class="row">
			<br>

            <h3 class="box-title">Add New Category</h3>
            </div>

            <div class="container"></div>
            <form action="{{ route('addcategory') }}" method="POST" class="form-horizontal">
			{{ csrf_field() }}
			<div class="box-body">
                <div class="form-group">
                  <label for="title"> New Category</label>
                  <input type="text" class="form-control" name="category" id="title" placeholder="Enter new category">
                </div>
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Add Category</button>
              </div>
            </form>
        </div>
		  </div>
		  </div>

@endsection
