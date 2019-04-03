@extends('layout.master')

@section('title','BCI - Bhawana Chamber of Industries')

@section('content')

<div class="video-block section-padding">
	<div class="row">
		<div class="col-md-8">
			<div class="single-video-left">
				<div class="single-video">
					<video width="100%" height="550px" autoplay="on" controls>
						<source src="{{ asset('storage/upload/Prakesh Chand Jain(1).mp4')}}" type="video/mp4">

						</video>
					</div>
					<div class="single-video-title box mb-3">
						<h2>Prakesh Chand Jain Director Chamber of Industries</h2>
						<p class="mb-0"><i class="fas fa-eye"></i> 2,729,347 views</p>
					</div>

					<div class="single-video-info-content box mb-3 text-justify ">


						{{--  card start --}}
					@foreach($search as $set)
						<div class="card">
							<div class="row ">
								<div class="col-md-4">
									<img src="https://cdn.shopify.com/s/files/1/0252/1347/products/IMG_3420.JPG?v=1486859233" class="card-img" alt="...">
								</div>
								<div class="col-md-8 px-3">
									<div class="card-block px-3">
										<h4 class="card-title"><a href="{{ NULL }}"> {{ $set->cname }} </a></h2>
						<form action="{{ route('IndustryList') }}" method="get"> </h4>
										<h3 class="card-head" > 
									<span > 
										  <input type="submit" name="materialtag" value="Motor Brake Shous" class="btn btn-outline-secondary" class="btn btn-sm">
									</span></h3>
									<h2 class="card-head"></h2>
									<i class="fa fa-map-marker-alt" style="color:red"></i><span class="card-head-span"> {{ $set->block}} {{ $set->sector }} {{ $set->area}} </span>
									<h3 class="card-head" ></h3>
										<i class="fa fa-phone" style="color:grey"></i>
										<span >  {{ $set->phoneno }} </span>
										<h3> </h3>
									<a href="#" class="btn btn-info" class="btn btn-sm">Read More</a>

									</div>
								</div>
							</div>
						</div>
						<hr>
					@endforeach
						{{-- card end  --}}
						
						{{--  card start --}}
<!--
						<div class="card">
							<div class="row ">
								<div class="col-md-4">
									<img src="https://cdn.shopify.com/s/files/1/0252/1347/products/IMG_3420.JPG?v=1486859233" class="card-img">
								</div>
								<div class="col-md-8 px-3">
									<div class="card-block px-3">
										<h4 class="card-title">HINDUSTAN BROOMS </h4>
										<h3 class="card-head" > 
									<span > 
										  <input type="submit" name="materialtag" value="Brooms" class="btn btn-outline-secondary" class="btn btn-sm">
									</span></h3>
									<h2 class="card-head"></h2>
									<i class="fa fa-map-marker-alt" style="color:red"></i><span class="card-head-span"> A-3 Sector-3 Bawana  </span>
									<h3 class="card-head" ></h3>
										<i class="fa fa-phone" style="color:grey"></i>
										<span >  9810074613  </span>
										<h3> </h3>
									<a href="#" class="btn btn-info" class="btn btn-sm">Read More</a>

									</div>
								</div>
							</div>
						</div> -->
						{{-- card end  --}}

					{{--	<hr> --}}
						{{--  card start --}}

	<!--					<div class="card">
							<div class="row ">
								<div class="col-md-4">
									<img src="https://cdn.shopify.com/s/files/1/0252/1347/products/IMG_3420.JPG?v=1486859233" class="card-img">
								</div>
								<div class="col-md-8 px-3">
									<div class="card-block px-3">
										<h4 class="card-title">FORTUNE ENTERPRISES </h4>
										<h3 class="card-head" > 
									<span > 
										  <input type="submit" name="materialtag" value="Safity Shoes" class="btn btn-outline-secondary" class="btn btn-sm">
									</span></h3>
									<h2 class="card-head"></h2>
									<i class="fa fa-map-marker-alt" style="color:red"></i><span class="card-head-span"> A-5 Sector-3 Bawana   </span>
									<h3 class="card-head" ></h3>
										<i class="fa fa-phone" style="color:grey"></i>
										<span >  9811962523  </span>
										<h3> </h3>
									<a href="#" class="btn btn-info" class="btn btn-sm">Read More</a>

									</div>
								</div>
							</div>
						</div> 
						{{-- card end  --}}
					</div>
          {{--jobs card--}}
          @foreach($jobs as $job_opening)
            <div class="row">
              <div class="col-12 mt-3">
                  <div class="card">
                      <div class="card-horizontal">
                          <div class="card-body">
                              <h4 class="card-title"><p class="fas fa-bolt" style="color:red"></p>{{$job_opening->job_title}}</h4>
                              <h3>{{$job_opening->company_name}}</h3>
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

         {{--end jobs card--}}

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
	</div>

@endsection

