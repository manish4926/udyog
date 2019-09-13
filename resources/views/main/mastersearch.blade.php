@extends('layout.master')
    
@section('content')

@push('topscript')
   
@endpush

@section('center-content')

<div class="row">
  <div class="col-12">
    <div class="white-card-main-search">
        <br>
       <h3 class="center">Search Result</h3><br />
       <div class="row">
       	@foreach($videos as $file)
         <div class="col-md-6">
            <div class="card">
            <a target="_blank" href="{{ asset('https://www.youtube.com/watch?v='.$ytvideo->id->videoId) }}">
                <img class="card-img-top" src="{{ asset('video/thumbs/'.$file->thumbnail) }}" alt="{{ $ytvideo->snippet->title }}">
                <div class="card-body">
                    <h4 class="card-title">{{ $file->title }}</h4>
					   <p>{{ $file->category }}</p>
                </div>
            </a>
            </div>
        </div> 
         @endforeach
     </div>
    </div>    
  </div>
</div>
@endsection
@endsection