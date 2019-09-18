@extends('layout.master')
@section('content')

            <!-- verticle thumb slider -->
            <section id="verticalSlider">
                <div class="row">
                    {{-- <div class="large-12 columns">
                        <div class="thumb-slider">
                            <div class="main-image">
                                <div class="image 1">
                                    
                                    <video id="live-video" class="live-video" autoplay="" controls>
                                        @if($live_videos)<source src="{{ asset('video/upload/'.$live_videos->filename)}}" type="video/mp4">@endif

                                    </video>
                                </div>
                            </div>
                            <div class="thumbs">
                                <div class="thumbnails">
                                    @foreach($videos as $file)
                                    <div class="ver-thumbnail">
                                        <img src="{{ asset('video/thumbs/'.$file->thumbnail) }}" alt="image">
                                        <div class="item-title">
                                            <span>{{ $file->category }}</span>
                                            <h6>The standard chunk of Lorem Ipsum used since.</h6>
                                        </div>
                                    </div>
                                    @endforeach
                                    <div class="ver-thumbnail" id="1">
                                        <img src="http://placehold.it/800x400" alt="imaga">
                                        <div class="item-title">
                                            <span>Technology</span>
                                            <h6>The standard chunk of Lorem Ipsum used since.</h6>
                                        </div>
                                    </div>
                                    <div class="ver-thumbnail" id="2">
                                        <img src="http://placehold.it/800x400" alt="imaga">
                                        <div class="item-title">
                                            <span>Technology</span>
                                            <h6>The standard chunk of Lorem Ipsum used since.</h6>
                                        </div>
                                    </div>
                                </div>

                                <a class="up" href="javascript:void(0)"><i class="fa fa-angle-up"></i></a>
                                <a class="down" href="javascript:void(0)"><i class="fa fa-angle-down"></i></a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div> --}}
                    <div class="large-8">
                        <video id="live-video" class="live-video" style="height: 425px" autoplay="off" controls>
                            @if($live_videos)<source id="mp4video" src="{{ asset('video/upload/'.$live_videos->filename)}}" type="video/mp4">@endif
                        </video>
                    </div>
                    <div class="large-4">
                        <div class="video-side-list">
                            <ul class="list-group index-side-list">
                                <li><a class="list-group-item index-side-list" href="{{route('currentaffairs')}}">Current affairs</a></li>
                                <li><a class="list-group-item index-side-list" href="#">Industrial Property</a></li>
                                {{-- <li><a class="list-group-item" href="{{route('training')}}">Training's</a></li> --}}
                                <li><a class="index-side-list list-group-item" href="{{route('labourlaws')}}">Labour Laws</a></li>
                                <li><a class="index-side-list list-group-item" href="{{route('taxation')}}">Taxation</a></li>
                                <li><a class="index-side-list list-group-item" href="{{route('newtechnology')}}">New Technology</a></li>
                                <li><a class="index-side-list list-group-item" href="{{route('newproducts')}}">New Products</a></li>
                                <li><a class="index-side-list list-group-item" href="{{route('health')}}">Health</a></li>
                                <li><a class="index-side-list list-group-item" href="{{route('growbusiness')}}">Expand your business</a></li>
                                <li><a class="index-side-list list-group-item" href="{{route('regarademarks')}}">Registerations & Grade Marks</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Recommended Videos -->
            <section id="premium" class="removeMargin">
                <div class="row">
                    <div class="heading clearfix">
                        <div class="large-11 columns">
                            <h4><i class="fa fa-play-circle-o"></i>Recommended Videos</h4>
                        </div>
                        <div class="large-1 columns">
                            <div class="navText show-for-large">
                                <a class="prev secondary-button"><i class="fa fa-angle-left"></i></a>
                                <a class="next secondary-button"><i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="owl-demo" class="owl-carousel carousel" data-car-length="4" data-items="4" data-loop="true" data-nav="false" data-autoplay="true" data-autoplay-timeout="3000" data-dots="false" data-auto-width="false" data-responsive-small="1" data-responsive-medium="2" data-responsive-xlarge="5">
                    @foreach($videos as $file)
                    <div class="item">
                        <figure class="premium-img">
                            <img src="{{ asset('video/thumbs/'.$file->thumbnail) }}" alt="carousel">
                            <figcaption>
                                <h5>{{ $file->title }}</h5>
                                <p>{{ $file->category }}</p>
                            </figcaption>
                        </figure>
                        <a href="{{ route('videothumb',['id' => $file->id, 'slug' => $file->slug]) }}" class="hover-posts">
                            <span><i class="fa fa-play"></i>Watch Video</span>
                        </a>
                    </div>
                    @endforeach
                
                </div>
            </section><!-- End Premium Videos -->
            <section class="mainContentv3">
                <div class="row">
                    <!-- left side content area -->
                    <div class="large-8 columns parentbg">
                        <div class="sidebarBg"></div>
                        <section class="content content-with-sidebar">
                            <!-- newest video -->
                            <div class="main-heading borderBottom">
                                <div class="row padding-14 ">
                                    <div class="medium-8 small-8 columns">
                                        <div class="head-title">
                                            <i class="fa fa-industry"></i>
                                            <h4>Companies for You</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="large-12 columns">
                                    <div class="tabs-content" data-tabs-content="newVideos">
                                        <div class="tabs-panel is-active" id="new-all">
                                            <div class="row list-group">
                                                @foreach($directory as $list)
                                                <div class="card">
                                                    <div class="row ">
                                                        <div class="col-md-4">
                                                            <img src="{{asset('microweb/images/logo/'.$list->logo)}}" class="card-img card-img-padding" alt="{{ ucfirst($list->cname) }}">
                                                        </div>
                                                        <div class="col-md-8 px-3">
                                                            <div class="card-block card-info">
                                                                <h4 class="card-title"><a href="#"> {{ ucfirst($list->cname) }} </a></h4>
                                                                <a href="#" class="btn btn-link"><u>{{ $list->material }}</u></a>
                                                                <div class="card-desc">Approx 3 Lines of Text</div>
                                                                <hr>
                                                                <div class="col-md-12">
                                                                    <div class="row">
                                                                        <div class="col-md-6 no-padding">
                                                                            <div><i class="fa fa-map-marker-alt red"></i><span class="card-head-span"> {{ $list->block}} {{ $list->sector }} {{ $list->area}} </span></div>
                                                                            @if(!empty($list->email))<div><i class="fa fa-envelope blue" ></i><span> {{ $list->email }}</span></div>@endif
                                                                            @if(!empty($list->phoneno))<div><i class="fa fa-phone green" ></i><span> {{ $list->phoneno }}</span></div>@endif
                                                                        </div>
                                                                        <div class="col-md-6 no-padding">
                                                                            <a href="{{route('microwebsite', ['site'=> $list->slug ])}}" class="btn btn-outline-primary lg-btn-padding" class="btn btn-sm"> Visit Site</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                
                                                @endforeach
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="text-center row-btn">
                                        <a class="button radius" href="{{route('industrylist')}}">View All Companies</a>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- ad Section -->
                       
                        @foreach ($advtmid as $advt)
                        @if(!empty($advt))
                        <div class="googleAdv text-center">
                            <a href="{{$advt->link}}"><img src="{{asset('advtphoto/'.$advt->image)}}" alt="{{$advt->title}}"></a>
                        </div>
                        @else
                        <div class="googleAdv text-center">
                            <a href="#"><img src="images/goodleadv.png" alt="googel ads"></a>
                        </div><!-- End ad Section -->
                        @endif
                        @endforeach
                       
                        <!-- popular video -->
                        <section class="content content-with-sidebar">
                            <!-- popular Videos -->
                            <div class="main-heading borderBottom">
                                <div class="row padding-14">
                                    <div class="medium-8 small-8 columns">
                                        <div class="head-title">
                                            <i class="fa fa-star"></i>
                                            <h4>Latest Jobs</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="large-12 columns">
                                    <div class="tabs-content" data-tabs-content="popularVideos">
                                        <div class="tabs-panel is-active" id="popular-all">
                                            <div class="row list-group">
                                                @foreach($jobs as $job_opening)
                                                <div class="col-12">
                                                    <div class="card">
                                                        <div class="">
                                                            <div class="card-body">
                                                                <div class="row">
                                                                    <div class="col-md-8">
                                                                        <h5 class="card-title"><i class="fas fa-bolt red"></i> <a href="{{ route('getdisplay',['job_id' => $job_opening->job_id]) }}">{{ ucfirst($job_opening->job_title) }}</a></h5>
                                                                        <p>Company: <a class="link-red" href="{{ route('getdisplay',['job_id' => $job_opening->job_id]) }}"><u>{{ ucfirst($job_opening->company_name) }}</u></a> </p>
                                                                        <p>{{ $job_opening->job_desc }} Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <img src="{{ asset('img/udyog_logo.png') }}" class="job-company-logo">
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <p><i class="fas fa-pen"></i> Skills: {{$job_opening->skills}}</p>
                                                                    </div>
                                                                    <div class="col-md-8">
                                                                        <p><i class="fas fa-archive"></i> Experience: {{$job_opening->experience}}</p>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <p><i class="fas fa-map-marker"></i> Location: {{$job_opening->location}}</p>
                                                                    </div>
                                                                    <div class="col-md-8">
                                                                        <p><i class="fas fa-rupee-sign"></i> Package: {{$job_opening->package}}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                @endforeach
                                                {{--Latest Jobs End--}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center row-btn">
                                        <a class="button radius" href={{route('alljob')}}>View All Jobs</a>
                                    </div>
                                </div>
                            </div>
                            <!-- ad Section -->
                            
                            @foreach ($advtbottom as $advt)
                            @if(!empty($advt))
                        <div class="googleAdv text-center">
                            <a href="{{$advt->link}}"><img src="{{asset('advtphoto/'.$advt->image)}}"  alt="{{$advt->title}}"></a>
                        </div>
                        @else
                        <div class="googleAdv text-center">
                            <a href="#"><img src="images/goodleadv.png" alt="googel ads"></a>
                        </div><!-- End ad Section -->
                        @endif
                        @endforeach
                        
                        </section><!-- End main content -->

                    </div><!-- end left side content area -->
                    <!-- sidebar -->
                    <div class="large-4 columns">
                        <aside class="sidebar">
                            <div class="sidebarBg"></div>
                            <div class="row">
                                @include('partials.events')

                                <!-- Events -->
                                @include('partials.news')
                                <!-- End Events -->


                                <!-- search Widget -->
                                {{-- <div class="large-12 medium-7 medium-centered columns">
                                    <div class="widgetBox">
                                        <div class="widgetTitle">
                                            <h5>Search Videos</h5>
                                        </div>
                                        <form id="searchform" method="get" role="search">
                                            <div class="input-group">
                                                <input class="input-group-field" type="text" placeholder="Enter your keyword">
                                                <div class="input-group-button">
                                                    <input type="submit" class="button" value="Submit">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div> --}}<!-- End search Widget -->

                                <!-- most view Widget -->
                                {{-- <div class="large-12 medium-7 medium-centered columns">
                                    <div class="widgetBox">
                                        <div class="widgetTitle">
                                            <h5>Most View Videos</h5>
                                        </div>
                                        <div class="widgetContent">
                                            <div class="video-box thumb-border">
                                                <div class="video-img-thumb">
                                                    <img src="http://placehold.it/300x190" alt="most viewed videos">
                                                    <a href="#" class="hover-posts">
                                                        <span><i class="fa fa-play"></i>Watch Video</span>
                                                    </a>
                                                </div>
                                                <div class="video-box-content">
                                                    <h6><a href="#">There are many variations of passage. </a></h6>
                                                    <p>
                                                        <span><i class="fa fa-user"></i><a href="#">admin</a></span>
                                                        <span><i class="fa fa-clock-o"></i>5 January 16</span>
                                                        <span><i class="fa fa-eye"></i>1,862K</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="video-box thumb-border">
                                                <div class="video-img-thumb">
                                                    <img src="http://placehold.it/300x190" alt="most viewed videos">
                                                    <a href="#" class="hover-posts">
                                                        <span><i class="fa fa-play"></i>Watch Video</span>
                                                    </a>
                                                </div>
                                                <div class="video-box-content">
                                                    <h6><a href="#">There are many variations of passage. </a></h6>
                                                    <p>
                                                        <span><i class="fa fa-user"></i><a href="#">admin</a></span>
                                                        <span><i class="fa fa-clock-o"></i>5 January 16</span>
                                                        <span><i class="fa fa-eye"></i>1,862K</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="video-box thumb-border">
                                                <div class="video-img-thumb">
                                                    <img src="http://placehold.it/300x190" alt="most viewed videos">
                                                    <a href="#" class="hover-posts">
                                                        <span><i class="fa fa-play"></i>Watch Video</span>
                                                    </a>
                                                </div>
                                                <div class="video-box-content">
                                                    <h6><a href="#">There are many variations of passage. </a></h6>
                                                    <p>
                                                        <span><i class="fa fa-user"></i><a href="#">admin</a></span>
                                                        <span><i class="fa fa-clock-o"></i>5 January 16</span>
                                                        <span><i class="fa fa-eye"></i>1,862K</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="video-box thumb-border">
                                                <div class="video-img-thumb">
                                                    <img src="http://placehold.it/300x190" alt="most viewed videos">
                                                    <a href="#" class="hover-posts">
                                                        <span><i class="fa fa-play"></i>Watch Video</span>
                                                    </a>
                                                </div>
                                                <div class="video-box-content">
                                                    <h6><a href="#">There are many variations of passage. </a></h6>
                                                    <p>
                                                        <span><i class="fa fa-user"></i><a href="#">admin</a></span>
                                                        <span><i class="fa fa-clock-o"></i>5 January 16</span>
                                                        <span><i class="fa fa-eye"></i>1,862K</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}<!-- end most view Widget -->

                                <!-- social Fans Widget -->
                                <!-- <div class="large-12 medium-7 medium-centered columns">
                                    <div class="widgetBox">
                                        <div class="widgetTitle">
                                            <h5>Notices & Circulars</h5>
                                        </div>
                                        {{-- <div class="widgetContent">
                                            <div class="social-links">
                                                <a class="socialButton" href="#">
                                                    <i class="fab fa-facebook"></i>
                                                    <span>698K</span>
                                                    <span>fans</span>
                                                </a>
                                                <a class="socialButton" href="#">
                                                    <i class="fab fa-twitter"></i>
                                                    <span>598</span>
                                                    <span>followers</span>
                                                </a>
                                                <a class="socialButton" href="#">
                                                    <i class="fab fa-google-plus"></i>
                                                    <span>98k</span>
                                                    <span>followers</span>
                                                </a>
                                                <a class="socialButton" href="#">
                                                    <i class="fab fa-youtube"></i>
                                                    <span>168k</span>
                                                    <span>followers</span>
                                                </a>
                                                <a class="socialButton" href="#">
                                                    <i class="fab fa-vimeo"></i>
                                                    <span>498</span>
                                                    <span>followers</span>
                                                </a>
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>End social Fans Widget -->

                                <!-- ad banner widget -->
                                <div class="large-12 medium-7 medium-centered columns">
                                    <div class="widgetBox">
                                            <div class="widgetContent">
                                           
                                            @foreach ($advtright as $advt)
                                            @if(!empty($advt->id))
                                            <div class="googleAdv text-center">
                                                <a href="{{$advt->link}}"><img src="{{asset('advtphoto/'.$advt->image)}}"  alt="{{$advt->title}}"></a>
                                            </div>
                                            @else
                                            <div class="googleAdv text-center">
                                                <a href="#"><img src="images/goodleadv.png" alt="googel ads"></a>
                                            </div><!-- End ad Section -->
                                            @endif
                                            @endforeach
                                       
                                        </div>
                                    </div>
                                </div><!-- end ad banner widget -->

                                <!-- Recent post videos -->
                                <div class="large-12 medium-7 medium-centered columns">
                                    <div class="widgetBox">
                                        <div class="widgetTitle">
                                            <h5>Recent post videos</h5>
                                        </div>
                                        <div class="widgetContent">
                                            <div class="media-object stack-for-small">
                                                <div class="media-object-section">
                                                    <div class="recent-img">
                                                        <img src= "http://placehold.it/120x80" alt="recent">
                                                        <a href="#" class="hover-posts">
                                                            <span><i class="fa fa-play"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="media-object-section">
                                                    <div class="media-content">
                                                        <h6><a href="#">The lorem Ipsumbeen the industry's standard.</a></h6>
                                                        <p><i class="fa fa-user"></i><span>admin</span><i class="fa fa-clock-o"></i><span>5 january 16</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-object stack-for-small">
                                                <div class="media-object-section">
                                                    <div class="recent-img">
                                                        <img src= "http://placehold.it/120x80" alt="recent">
                                                        <a href="#" class="hover-posts">
                                                            <span><i class="fa fa-play"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="media-object-section">
                                                    <div class="media-content">
                                                        <h6><a href="#">The lorem Ipsumbeen the industry's standard.</a></h6>
                                                        <p><i class="fa fa-user"></i><span>admin</span><i class="fa fa-clock-o"></i><span>5 january 16</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-object stack-for-small">
                                                <div class="media-object-section">
                                                    <div class="recent-img">
                                                        <img src= "http://placehold.it/120x80" alt="recent">
                                                        <a href="#" class="hover-posts">
                                                            <span><i class="fa fa-play"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="media-object-section">
                                                    <div class="media-content">
                                                        <h6><a href="#">The lorem Ipsumbeen the industry's standard.</a></h6>
                                                        <p><i class="fa fa-user"></i><span>admin</span><i class="fa fa-clock-o"></i><span>5 january 16</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="media-object stack-for-small">
                                                <div class="media-object-section">
                                                    <div class="recent-img">
                                                        <img src= "http://placehold.it/120x80" alt="recent">
                                                        <a href="#" class="hover-posts">
                                                            <span><i class="fa fa-play"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="media-object-section">
                                                    <div class="media-content">
                                                        <h6><a href="#">The lorem Ipsumbeen the industry's standard.</a></h6>
                                                        <p><i class="fa fa-user"></i><span>admin</span><i class="fa fa-clock-o"></i><span>5 january 16</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- End Recent post videos -->

                                <!-- tags -->
                                <!-- <div class="large-12 medium-7 medium-centered columns">
                                    <div class="widgetBox">
                                        <div class="widgetTitle">
                                            <h5>Tags</h5>
                                        </div>
                                        <div class="tagcloud">
                                            <a href="#">3D Videos</a>
                                            <a href="#">Videos</a>
                                            <a href="#">HD</a>
                                            <a href="#">Movies</a>
                                            <a href="#">Sports</a>
                                            <a href="#">3D</a>
                                            <a href="#">Movies</a>
                                            <a href="#">Animation</a>
                                            <a href="#">HD</a>
                                            <a href="#">Music</a>
                                            <a href="#">Recreation</a>
                                        </div>
                                    </div>
                                </div>End tags -->
                            </div>
                        </aside>
                    </div><!-- end sidebar -->
                </div>
            </section>

            <!-- movies -->
            {{-- <section id="movies" class="whiteBg pad-bottom-30">
                <div class="row">
                    <div class="large-12 columns">
                        <div class="column row">
                            <div class="heading category-heading clearfix">
                                <div class="cat-head pull-left">
                                    <i class="fa fa-video-camera"></i>
                                    <h4>Watch Movies</h4>
                                </div>
                                <div>
                                    <div class="navText pull-right show-for-large">
                                        <a class="prev secondary-button"><i class="fa fa-angle-left"></i></a>
                                        <a class="next secondary-button"><i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- movie carousel -->
                        <div id="owl-demo-movie" class="owl-carousel carousel" data-autoplay="true" data-autoplay-timeout="3000" data-autoplay-hover="true" data-car-length="5" data-items="6" data-dots="false" data-loop="true" data-auto-width="true" data-margin="10">
                            <div class="item-movie item thumb-border">
                                <figure class="premium-img">
                                    <img src="http://placehold.it/185x275" alt="carousel">
                                    <a href="single-video-v3.html" class="hover-posts">
                                        <span><i class="fa fa-search"></i></span>
                                    </a>
                                </figure>
                            </div>
                            <div class="item-movie item thumb-border">
                                <figure class="premium-img">
                                    <img src="http://placehold.it/185x275" alt="carousel">
                                    <a href="single-video-v3.html" class="hover-posts">
                                        <span><i class="fa fa-search"></i></span>
                                    </a>
                                </figure>
                            </div>
                            <div class="item-movie item thumb-border">
                                <figure class="premium-img">
                                    <img src="http://placehold.it/185x275" alt="carousel">
                                    <a href="single-video-v3.html" class="hover-posts">
                                        <span><i class="fa fa-search"></i></span>
                                    </a>
                                </figure>
                            </div>
                            <div class="item-movie item thumb-border">
                                <figure class="premium-img">
                                    <img src="http://placehold.it/185x275" alt="carousel">
                                    <a href="single-video-v3.html" class="hover-posts">
                                        <span><i class="fa fa-search"></i></span>
                                    </a>
                                </figure>
                            </div>
                            <div class="item-movie item thumb-border">
                                <figure class="premium-img">
                                    <img src="http://placehold.it/185x275" alt="carousel">
                                    <a href="single-video-v3.html" class="hover-posts">
                                        <span><i class="fa fa-search"></i></span>
                                    </a>
                                </figure>
                            </div>
                            <div class="item-movie item thumb-border">
                                <figure class="premium-img">
                                    <img src="http://placehold.it/185x275" alt="carousel">
                                    <a href="single-video-v3.html" class="hover-posts">
                                        <span><i class="fa fa-search"></i></span>
                                    </a>
                                </figure>
                            </div>


                        </div><!-- end carousel -->
                    </div>
                </div>
            </section> --}}<!-- End movie -->
            <!--News Feed-->

            
            @push('bottomscript')
            {{-- <script src="{{ asset('bower_components/foundation-sites/dist/foundation.js') }}"></script>
            <script src="{{ asset('js/jquery.showmore.src.js') }}" type="text/javascript"></script>

            <script src="{{ asset('js/main.js') }}"></script>

            <script src="{{ asset('layerslider/js/greensock.js') }}" type="text/javascript"></script>

            <script src="{{ asset('layerslider/js/layerslider.transitions.js') }}" type="text/javascript"></script>
            <script src="{{ asset('layerslider/js/layerslider.kreaturamedia.jquery.js') }}" type="text/javascript"></script>
            <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
            <script src="{{ asset('js/inewsticker.js') }}" type="text/javascript"></script>
            <script src="{{ asset('js/jquery.kyco.easyshare.js') }}" type="text/javascript"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> --}}


            {{-- <script>
                var nextVideo = "{{ asset('video/upload/'.$live_videos->last()->filename)}}";
                $("#live-video").load(nextVideo #live-video.src ); 
            </script> --}}


            <script type="text/javascript">

               

                function FetchData(filename) {

                   /* $('#live-video').get(0).pause();
                    $('#mp4video').attr('src', "video/upload/".filename);
                    $('#live-video').get(0).load();
                    $('#live-video').get(0).play();*/

var videocontainer = document.getElementById('live-video');
var videosource = document.getElementById('mp4video');

 console.log('{{ asset("video/upload/")}}'+"/"+filename);

    videocontainer.pause();
    videosource.setAttribute('src','{{ asset("video/upload/")}}'+"/"+filename);
     /*var d =  new Date();
    var temp = '{{ $live_videos->starttime }}'.split(/[- :]/);
    console.log(temp[4]);
    var hour = d.getHours()-temp[3];
    var min = d.getMinutes()-temp[4];
    var sec = d.getSeconds()-temp[5];
    document.getElementById('live-video').currentTime = hour*3600+min*60+sec;
    console.log(hour*3600+min*60+sec);*/
    videocontainer.load();
    /*document.getElementById('live-video').currentTime =*/ 
    //videocontainer.setAttribute('poster', newposter); //Changes video poster image
    videocontainer.play();
    



                     /*$('#live-video')[0].pause();
                     $('#live-video source').attr('src', "video/upload/".filename);
                    $('#live-video')[0].load();
                     $('#live-video')[0].play();*/

                    console.log(filename);
                }


                    $(document).ready(function(){

                        $('#live-video').on('ended',function(){
                          console.log('Video has ended!');
                          var endtime = '{{ $live_videos->endtime }}';

                              $.ajaxSetup({
                                    headers: {
                                        'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
                                    }
                                });


                            $.ajax({
                                type    : 'POST',
                                url     : '{{ route('getnextvideo') }}',
                                data : {starttime: endtime },
                                success: function(result){
                                    console.log(result);
                                    var video = $.parseJSON(result);
                                    var filename = video.filename;
                                    var duration = video.duration;
                                    var endtime = video.endtime;

                                    FetchData(filename);   
                                }           
                            });
                        });

                        var starttime = parseInt('{{ strtotime($live_videos->starttime) }}');
                        if(starttime != 0) {
                            var dt = new Date();
                            var currenttime = Math.floor(dt.getTime()/1000);
                            var difference = currenttime - starttime;
                            document.getElementById('live-video').addEventListener('loadedmetadata', function() {
                              this.currentTime = difference;
                            }, false);
                        }

                    });



            </script>

        @endpush
        @endsection

