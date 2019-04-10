@extends('layout.master')


@section('title',preg_replace('/\\.[^.\\s]{3,4}$/', '', $video->name))

@section('content')

   <div class="container">
                  <div class="row">
                     <div class="col-md-8">
                        <div class="single-video-left">
                           <div class="single-video">

                              <video width="100%" height="550px" autoplay="on" controls>
                                 <source src="{{ asset('video/upload/'.$video->name)}}" type="video/mp4">                            
                              </video>
                           </div>
                           <div class="single-video-title box mb-3">
                              <h2>{{preg_replace('/\\.[^.\\s]{3,4}$/', '', $video->name)}}</h2>
                              <p class="mb-0"><i class="fas fa-eye"></i> 2,729,347 views</p>
                           </div>
                           
                           <div class="single-video-info-content box mb-3 text-justify ">

                            <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam necessitatibus, facere non optio! Necessitatibus sit perferendis adipisci dolores sapiente, odit, reiciendis itaque ab porro, voluptate accusamus, deleniti numquam est magnam!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit eos expedita, distinctio unde magnam quia illum. Sint esse corrupti aperiam mollitia! Repellendus amet, cum laboriosam molestias ipsum temporibus itaque, quam!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ex officiis deserunt placeat in! Aliquid possimus quam dolor vitae beatae sit, cupiditate mollitia unde adipisci ad doloremque, maxime assumenda tenetur!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat laboriosam ut tenetur, enim sint ipsa quae possimus aperiam voluptatem eveniet aut adipisci totam quas quos, blanditiis molestias unde, rerum. Voluptatem.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis numquam maiores, vero maxime, amet cum eaque eum vitae id ipsum deleniti illum sunt autem fugiat earum nostrum veniam recusandae accusamus.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id eum nobis labore aspernatur impedit, enim error alias fugit officiis quaerat laudantium doloremque deleniti excepturi, suscipit incidunt, accusantium placeat magnam rem.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis sit ab accusantium, voluptatibus aperiam earum, laborum doloribus, aspernatur praesentium beatae ratione nam sequi fugit aliquid unde totam corporis saepe provident.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem quaerat minima cum facilis deserunt necessitatibus nemo id expedita sunt similique esse inventore vel, quod, excepturi velit doloribus repellat quam, consequatur?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam voluptates consequatur obcaecati minima, maiores dolore, facere laboriosam ad sed placeat, sunt blanditiis quos reiciendis numquam harum facilis cumque repellat enim!
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum porro suscipit reprehenderit officiis sit nesciunt pariatur dolor quaerat iure debitis. Nisi enim ducimus itaque hic reprehenderit laudantium harum consequatur quam!</p>
                              
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
                                      <a href="{{ route('videothumb',['id' => $video->id, 'slug' => $video->slug]) }}">{{ preg_replace('/\\.[^.\\s]{3,4}$/', '', $video->name) }}</a>
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

