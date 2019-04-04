@extends('layout.master')

@section('title','BCI - Bawana Chamber of Industries')

@section('content')

<div class="video-block section-padding">
	<div class="row">
		<div class="col-md-8">
			<div class="single-video-left">
				<div class="single-video">
					<video id="live-video" class="live-video" autoplay="on" controls>
						<source src="{{ asset('upload/live-video.mp4')}}" type="video/mp4">
					</video>
				</div>
				<div class="single-video-title box mb-3">
					<h2>Prakesh Chand Jain Director Chamber of Industries</h2>
					<p class="mb-0"><i class="fas fa-eye"></i> 2,729,347 views</p>
				</div>
			</div>


			{{--  Company Directory Start --}}
			<h3 class="title-blue">DIRECTORY </h3>
			@foreach($directory as $list)
			<div class="card">
				<div class="row ">
					<div class="col-md-4">
						<img src="https://cdn.shopify.com/s/files/1/0252/1347/products/IMG_3420.JPG?v=1486859233" class="card-img card-img-padding" alt="{{ ucfirst($list->cname) }}">
					</div>
					<div class="col-md-8 px-3">
						<div class="card-block card-info">
							<h4 class="card-title"><a href="#"> {{ ucfirst($list->cname) }} </a></h4>
							<a href="#" class="btn btn-link"><u>{{ $list->material }}</u></a>
							<div class="card-desc">Approx 3 Lines of Text</div>
							<hr>
							<div class="row">
							<div class="col-md-6 no-padding">
								<div><i class="fa fa-map-marker-alt red"></i><span class="card-head-span"> {{ $list->block}} {{ $list->sector }} {{ $list->area}} </span></div>
								@if(!empty($list->email))<div><i class="fa fa-envelope blue" style="color:grey"></i><span> {{ $list->email }}</span></div>@endif
								@if(!empty($list->phoneno))<div><i class="fa fa-phone" style="color:grey"></i><span> {{ $list->phoneno }}</span></div>@endif
							</div>
							<div class="col-md-6 no-padding">
								<a href="#" class="btn btn-outline-primary lg-btn-padding" class="btn btn-sm">Visit Site</a>
							</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<hr>
			@endforeach
			{{--  Company Directory Start --}}

			{{--Latest Jobs Start--}}

			<br>
			<h3 class="title-blue">LATEST JOBS</h3>
			@foreach($jobs as $job_opening)

			<div class="row">
				<div class="col-12 mt-3">
					<div class="card">
						<div class="card-horizontal">
							<div class="card-body">
								<h4 class="card-title"><i class="fas fa-bolt red"></i> {{ ucfirst($job_opening->job_title) }}</h4>
								<h3>Company: <a href="#">{{ ucfirst($job_opening->company_name) }}</a> </h3>
								<h5><p class="fas fa-file-alt"></p>{{$job_opening->job_desc}}</h5>
								<p class="fas fa-archive">{{$job_opening->experience}}</p>
								<p class="fa fa-map-marker" style="float:right">{{$job_opening->location}}</p>
								<p class="fas fa-pen" style="float:left">{{$job_opening->skills}}</p> 
							</div>
						</div>
						<div class="card-footer">
							<span class ="glyphicon glyphicon-user">
								<p class="fas fa-rupee-sign">{{$job_opening->package}}</p> 
								<small class="fas fa-user" style="float:right">{{$job_opening->hr_name}}</small>
							</span>
						</div>
					</div>
				</div>
			</div>
			@endforeach	 
			{{--Latest Jobs End--}}
			
		</div>



		{{--end jobs card--}}
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

								<a class="play-icon" href="{{ route('videothumb',['id' => $file->id, 'slug' => $file->slug]) }}"><i class="fas fa-play-circle"></i></a>
								<a href="#"><img class="img-fluid" src="{{ asset('video/thumbs/'.$file->thumbnail) }}" alt="" height="77px"></a>

								<div class="time">{{sprintf('%02d:%02d',($file->duration/60%60), $file->duration%60)}}</div>
							</div>
							<div class="video-card-body">
								<div class="video-title">
									<a href="{{ route('videothumb',['id' => $file->id, 'slug' => $file->slug]) }}">{{ preg_replace('/\\.[^.\\s]{3,4}$/', '', $file->name) }}</a>
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
</div>

@push('bottomscript')
<script type="text/javascript">
	$(document).ready(function() {
	    $('#live-video').currentTime=10;
	});
</script>
@endpush
@endsection

