@extends('layout.admin')


@section('title', ' All Videos | BCI - ADMIN')

@section('content')

   <div class="container">
   <h3 class="box-title">All Videos</h3>

    @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
                 @endif
                  <div class="row">
                     <div class="col-md-11">
                     <div class="box">
            <div class="box-header">
            <h3 class="box-title"><a href="{{route('uploadfile')}}"><button type="button" class="btn btn-block btn-primary btn-flat">Add Video</button></a></h3>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Title</th>
                  <th>Description</th>
                  <th>Category</th>
                  <th>Tags</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                  {{-- {{dd($videos)}} --}}
                @foreach($videos as $video)
                     <tr>
                     <td>{{$video->id}}</td>
                     <td>{{$video->title}}</td>
                     <td>{{$video->description}}</td>
                     <td>{{$video->category}}</td>
                     <td>
                        @if(!empty($video->tags))
                          @foreach(json_decode($video->tags) as $tags)
                               {{$tags->value}},
                          @endforeach
                        @endif
                      </td>
                     <td><a href="{{route('video.update',['id'=>$video->id])}}" class="btn btn-primary"><i class="fa fa-edit"></i></a></td>
                     <td><a href="{{route('video.delete',['id'=>$video->id])}}" class="btn btn-danger">X</a></td>
                     </tr>
                @endforeach
                </tbody>

              </table>
            </div>
            <!-- /.box-body -->
          </div>







                     </tr>
                     </table>
                        </div>
                     </div>
                  </div>


@endsection

