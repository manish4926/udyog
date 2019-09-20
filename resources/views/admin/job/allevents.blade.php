@extends('layout.admin')

@section('title','all events')

@section('content')

@push('topscript')

    <link href="{{ asset('css/tagify.css') }}" rel="stylesheet">

@endpush
	<div class="container">
	<div class="row">


			<br>

             @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
                 @endif
			<!-- <div class="box box-primary">
            <div class="box-header with-border"> -->
              <center><h3 class="box-title">All Events</h3></center>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="container"></div>

            <form method="get" action="{{ route('allevents') }}">  
                    {{ csrf_field() }}
                    <table class="table table-hover table-striped table-bordered">
                        <thead class="thead-dark" align="center">
                            <tr>
                                <th>Event Title</th>
                                <th>Event Decription</th>
                                <th>Evant Author</th>
                                <th>Event Photo</th>
                                <th>Update Event</th>
                                <th>Delete Event</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($allevents as $allevent)
                                <tr>
                                    <td>{{$allevent->title}}</td>
                                    <td>{{$allevent->description}}</td>
                                    <td>{{$allevent->author}}</td>
                                   <td>
                                    <a target="_blank" href="{{ asset('eventphoto/'.$allevent->photo) }}" class="btn btn-outline-primary lg-btn-padding" class="btn btn-sm">Download Event Photo</a>
                                    </td>
                                    <td><a href="{{ route('updateevent',['id'=>$allevent->id])}}">UPDATE EVENT</a></td>
                                    <td><button type="button" class="btn btn-link" data-id="{{ $allevent->id }}" onclick="deleteEvent.call(this)">Delete</button></td>        
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </form>
            
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

        <script type="text/javascript">

        function deleteEvent() {
            
           //alert($(this).attr("data-id"));
           //alert($(this).data(id));
           $this = $(this);
           eventid = $this.attr("data-id");
            //alert(jobid);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


            $.ajax({
                url: "{{ route('deleteEvent')}}",
                type: "post",
                dataType : 'json',
                data: { eventid : eventid },
                success: function(data){
                    //$("#employees").html(data);
                    //console.log(data);
                    if(data == 'success') {
                        $this.parent().closest('tr').hide();
                        //console.log(data);
                    }
                }
            });
        }
    </script>

@endpush

@endsection
