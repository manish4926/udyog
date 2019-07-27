<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
	<video id="live-video" class="live-video" autoplay="autoplay" controls style="height:300px;">

		<source id="mp4video" src="{{ asset('video/upload/'.$live_videos->filename)}}" type="video/mp4">
	</video>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$('#live-video')[0].currentTime = {{ $playtime }};
				$('#live-video').on('ended',function(){
					console.log('Video has ended!');
					//var endtime = '{{ $live_videos->endtime }}';
					location.reload();

				});
			});
		</script>
</body>
</html>