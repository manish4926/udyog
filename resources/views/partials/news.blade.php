<!-- news Widget -->
<div class="large-12 medium-7 medium-centered columns">
    <div class="widgetBox">
        <div class="widgetTitle">
            <h5>News & Events</h5>
        </div>
        <div class="widgetContent news-feeds home-news">
        	@foreach($worldfeeds as $item)		
				<div class="news-section">
					<div class="">
						<a href="{{$item->link}}">{{$item->title}}</a>
					</div>
				</div>	
			@endforeach
        </div>
        
    </div>
</div><!-- End news Widget -->