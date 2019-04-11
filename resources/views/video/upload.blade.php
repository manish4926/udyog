@extends('layout.master')

@section('title','Upload File')

@section('content')

@push('topscript')
    <link href="{{ asset('css/tagify.css') }}" rel="stylesheet">

@endpush

	<div class="row">
			<br>
				<form action="{{ route('uploadfile') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
					{{ csrf_field() }}
				<input type="file" name="videoFile">
                <br>
                <br>
                <label for="tags">Tags: </label>
                <input type="text" name="tags" placeholder="Tags">

				<br><br>
				<input type="Submit" class="btn btn-info">
			</form>
	</div>

@push('bottomscript')


    <script src="{{ asset('js/jQuery.tagify.min.js') }}"></script>

    <script type="text/javascript">
                    // jQuery
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
