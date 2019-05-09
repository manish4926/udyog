@extends('layout.admin')


@section('title', ' All Categories | BCI - ADMIN')


@section('content')


   <div class="container">
   <h3 class="box-title">All Categories</h3>

                  <div class="row">
                     <div class="col-md-10">
                     <div class="box">
            <div class="box-header">
              <h3 class="box-title"><a href="{{ route('categorypage') }}"><button type="button" class="btn btn-block btn-primary btn-flat">Add New Category</button></a></h3>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Category</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                     <tr>
                     <td>{{$category->id}}</td>
                     <td>{{$category->category}}</td>
                     <td><a href="{{route('category.update',['id'=>$category->id])}}" class="btn btn-primary"><i class="fa fa-edit"></i></a></td>
                     <td><a href="{{route('category.delete',['id'=>$category->id])}}" class="btn btn-danger">X</a></td>
                     </tr>
                     @endforeach
                </tbody>

              </table>
            </div>
            <!-- /.box-body -->
          </div>



@endsection

