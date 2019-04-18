@extends('layout.admin')

@section('title','Expired Jobs')

@section('content')

@push('topscript')

    <link href="{{ asset('css/tagify.css') }}" rel="stylesheet">

@endpush
    <div class="container">
    <div class="row">
            <br>
            <!-- <div class="box box-primary">
            <div class="box-header with-border"> -->
              <center><h3 class="box-title">Pending Jobs</h3></center>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="container"></div>

            
        </div>
          </div>
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
