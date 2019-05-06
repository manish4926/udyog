
<div class="news-feeds">
	<div class="row">
		<h3 class="title-blue">NEWS AND EVENTS</h3>
		@foreach($worldfeeds as $item)		
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<strong><a href="{{$item->link}}">{{$item->title}}</a></strong>
					</div>
					<div class="card-body">
					<strong>Date:       {{$item->pubDate}}</strong> <br/>
					
						{!! $item->description !!}
					</div>
				</div>	
			</div>
		@endforeach
	</div>
</div>