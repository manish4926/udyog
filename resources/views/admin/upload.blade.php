@extends('layout.admin')

@section('title','Upload File')

@section('content')

@push('topscript')
    <style>
        .progress { position:relative; width:100%; border: 1px solid #7F98B2; padding: 1px; border-radius: 3px; height: 30px}
        .bar { background-color: #B4F5B4; width:0%; height:55px; border-radius: 3px; }
        .percent { position:absolute; display:inline-block; top:3px; left:48%; color: #7F98B2;}
    </style>

    <link href="{{ asset('css/tagify.css') }}" rel="stylesheet">

@endpush
	<div class="container">
	<div class="row">
			<br>
			<!-- <div class="box box-primary">
            <div class="box-header with-border"> -->
              <h3 class="box-title">Upload Video</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="container"></div>
            <form action="{{ route('uploadfile') }}" role="form" method="post" class="form-horizontal" enctype="multipart/form-data">
			{{ csrf_field() }}
			<div class="box-body">
                <div class="form-group">
                  <label for="title">Video Title</label>
                  <input type="text" class="form-control" name="title" id="title" placeholder="Enter video title">
                </div>
                <div class="form-group">
				<label>Video Description</label>
                  <textarea class="form-control" rows="3" name="description" placeholder="Enter video description"></textarea>
				</div>
				<div class="form-group">
                  <label>Select Category</label>
                  <select class="form-control" name="category">
                    <option>Rules & Regulations</option>
                    <option>Machines & Technology</option>
                    <option>GST & Laws</option>
                    <option>Industries</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="tags">Tags</label>
                  <input type="text" class="form-control" name="tags" id="tags" placeholder="Enter video tags">
                </div>

                <div class="form-group">
                  <label for="videoFile">Video Upload</label>
                  <input type="file" name="videoFile">
                </div>
                <div class="form-group">
                  <label for="thumbnail">Thumbnail Upload</label>
                  <input type="file" name="thumbFile">
                </div>

              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Upload</button>
              </div>
                <br>
                <div class="progress">
                      <div id="progressBar"class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
                    </div>
            </form>
        </div>
		  </div>
		  </div>

@push('bottomscript')
    <script src="{{ asset('js/jQuery.tagify.min.js') }}"></script>


    <script type="text/javascript">
                    // jQuery

            //----------TAGS JAVASCRIPT----------
            $('[name=tags]').tagify();
            // Vanilla JavaScript
            var input = document.querySelector('input[name=tags]'),
            tagify = new Tagify( input );
            $('[name=tags]').tagify({duplicates : false});
            var myInput = $('[name=tags]').tagify();
            // adds new tag
            // String (word, single or multiple with a delimiter) or an Array of Objects
            myInput.addTags();
            // removes a specific tag
            myInput.removeTag(DOM);
            // removes all tags
            myInput.removeAllTags();
            // destroy the plugin
            myInput.destroy();
            var myInput = $('[name=tags]').tagify();

        </script>

@endpush

@endsection
