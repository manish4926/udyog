@extends('layout.master')

@section('title',preg_replace('/\\.[^.\\s]{3,4}$/', '', $video->title))

@section('content')

                  <div class="row">
                     <div class="col-md-8">
                        <div class="single-video-left">
                           <div class="single-video">

                              <video width="100%" height="550px" autoplay="on" controls>
                                 <source src="{{ asset('video/upload/'.$video->name)}}" type="video/mp4">
                              </video>
                           </div>
                           <div class="single-video-title box mb-3">
                              <h2>{{preg_replace('/\\.[^.\\s]{3,4}$/', '', $video->title)}}</h2>
                              <p class="mb-0"><i class="fas fa-eye"></i> 2,729,347 views</p>
                           </div>

                           <div class="single-video-info-content box mb-3 text-justify ">

                            <p>
                              <span style="font-size: 20px;">Keywords: </span>
                              @foreach(json_decode($video->tags) as $tags)
                                <span class="badge badge-secondary badge-pill" style="font-size: 14px;">{{ $tags->value }}</span>
                              @endforeach

                              <br>
                              <br>
                             <span style="font-size: 17px;">{{ $video->description }}</span>
                              <br>
                              <span style="font-size: 12px;">Category: {{ $video->category }}</span>
                                </p>


                           </div>
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
                              @if(count($all)>0)
                              @foreach($all as $video)
                                <div class="video-card video-card-list">
                                  <div class="video-card-image">

                                    <a class="play-icon" href="{{ route('videothumb',['id' => $video->id, 'slug' => $video->slug]) }}"><i class="fas fa-play-circle"></i></a>
                                    <a href="#"><img class="img-fluid" src="{{ asset('video/thumbs/'.$video->thumbnail) }}" alt="" height="77px"></a>

                                    <div class="time">{{sprintf('%02d:%02d',($video->duration/60%60), $video->duration%60)}}</div>
                                  </div>
                                  <div class="video-card-body">
                                    <div class="video-title">
                                      <a href="{{ route('videothumb',['id' => $video->id, 'slug' => $video->slug]) }}">{{ $video->title }}</a>
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

