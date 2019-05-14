<div class="large-12 medium-7 medium-centered columns event-section">
    <div class="widgetBox">
        <div class="widgetTitle">
            <h5>Events</h5>
        </div>
        @foreach($event as $events)
        <div class="widgetContent">
            <div class="media-object stack-for-small">
                <div class="media-object-section">
                    <div class="recent-img">
                        <img src= {{ asset('eventphoto/'.$events->photo)}}>
                    </div>
                </div>
                <div class="media-object-section">
                    <div class="media-content">
                        <h5><a href="#">{{ ucfirst($events->title) }}</a></h5>
                        <h6>{{$events->description}}</h6>
                        <p><i class="fa fa-clock-o"></i><span>{{$events->date}}</span></p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>