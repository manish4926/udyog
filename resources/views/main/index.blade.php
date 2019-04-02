@extends('layout.master')

@section('title','BCI - Bhawana Chamber of Industries')

@section('content')

<div class="video-block section-padding">
  <div class="row">
    <div class="col-md-8">
      <div class="single-video-left">
        <div class="single-video">
          <video width="100%" height="550px" autoplay="on" controls>
            <source src="{{ asset('storage/upload/Prakash Chand Jain(1).mp4')}}" type="video/mp4">

            </video>
          </div>
          <div class="single-video-title box mb-3">
            <h2>Prakesh Chand Jain Director Chamber of Industries</h2>
            <p class="mb-0"><i class="fas fa-eye"></i> 2,729,347 views</p>
          </div>

          <div class="single-video-info-content box mb-3 text-justify ">



            {{--  card start --}}

            <div class="card">
              <div class="row ">
                <div class="col-md-4">
                  <img src="https://4.imimg.com/data4/IS/BQ/MY-4144035/work-shoes-250x250.jpg" class="w-100">
                </div>
                <div class="col-md-8 px-3">
                  <div class="card-block px-3">
                    <h1 class="card-title">FORTUNE ENTERPRISES</h1>
                    <h3 class="card-text">Aman Aggarwal </h3>
                    <h3 class="card-text">Safity Shoes</h3>
                    <a href="#" class="btn btn-primary">Read More</a>
                  </div>
                </div>
              </div>
            </div>
            {{-- card end  --}}
            <hr>
            {{--  card start --}}

            <div class="card">
              <div class="row ">
                <div class="col-md-4">
                  <img src="https://previews.123rf.com/images/gurza/gurza1301/gurza130100036/17599642-set-of-cosmetic-accessories-on-a-white-background.jpg" class="w-100">
                </div>
                <div class="col-md-8 px-3">
                  <div class="card-block px-3">
                    <h1 class="card-title">KUNAL ENTERPRISES	</h1>
                    <h3 class="card-text">Manvinder Singh </h3>
                    <h3 class="card-text">Cosmetic Accessories</h3>
                    <a href="#" class="btn btn-primary">Read More</a>
                  </div>
                </div>
              </div>
            </div>
            {{-- card end  --}}

            <hr>
            {{--  card start --}}

            <div class="card">
              <div class="row ">
                <div class="col-md-4">
                  <img src="https://5.imimg.com/data5/UR/JT/MY-1594025/non-woven-d-cut-bag-offset-printing-machine-500x500.jpg" class="w-100">
                </div>
                <div class="col-md-8 px-3">
                  <div class="card-block px-3">
                    <h1 class="card-title">S.R OFFSET PRESS</h1>
                    <h3 class="card-text">Harish Malhotra </h3>
                    <h3 class="card-text">Printing Press</h3>
                    <a href="#" class="btn btn-primary">Read More</a>
                  </div>
                </div>
              </div>
            </div>
            {{-- card end  --}}



          </div>
           @include('job.jobmaster')
        </div>
      </div>
      <div class="col-md-4">
        <div class="single-video-right">
          <div class="row">
            <div class="col-md-12">
              <div class="main-title">
                <div class="btn-group float-right right-action">
                </div>
                <h6>More BCI Videos</h6>
              </div>
            </div>
            <div class="col-md-12">
              @if(count($videos)>0)
              @foreach($videos as $file)
              <div class="video-card video-card-list">
                <div class="video-card-image">
                  <a class="play-icon" href="{{ route('videothumb',['id' => $file->id, 'slug' => $file->name]) }}"><i class="fas fa-play-circle"></i></a>
                  <a href="#"><img class="img-fluid" src="{{ asset('storage/thumbs/'.$file->thumbnail) }}" alt="" height="77px"></a>
                  <div class="time">{{sprintf('%02d:%02d',($file->duration/60%60), $file->duration%60)}}</div>
                </div>
                <div class="video-card-body">
                  <div class="video-title">
                    <a href="#">{{ $file->name }}</a>
                  </div>
                </div>
              </div>
              @endforeach
              @endif
            </div>


          </div>
        </div>
      </div>
    </div>


    @endsection