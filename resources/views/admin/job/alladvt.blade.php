@extends('layout.admin')

@section('title','all events')

@section('content')

@push('topscript')

    <link href="{{ asset('css/tagify.css') }}" rel="stylesheet">

@endpush
	<div class="container">
	<div class="row">
			<br>
			<!-- <div class="box box-primary">
            <div class="box-header with-border"> -->
              <center><h3 class="box-title">All Advertisements</h3></center>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="container"></div>

            <!-- <form method="get" action="{{ route('alladvt') }}">   -->
                    {{ csrf_field() }}
                    <table class="table table-hover table-striped table-bordered">
                        <thead class="thead-dark" align="center">
                            <tr>
                                <th>Advertisement Title</th>
                                <th>Advertisement Position</th>
                                <th>Advertisement Image</th>
                                <!-- <th>Update Advertisement</th> -->
                                <th>Delete Advertisement</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($alladvts as $alladvt)
                                <tr>
                                    <td>{{$alladvt->title}}</td>
                                    <td>{{$alladvt->position}}</td>
                                   <td>
                                    <a target="_blank" href="{{ asset('advtphoto/'.$alladvt->image) }}" class="btn btn-outline-primary lg-btn-padding" class="btn btn-sm">Download Event Photo</a>
                                    </td>
                                    <!-- <td><a href="{{ route('updateevent',['id'=>$alladvt->id])}}">UPDATE EVENT</a></td> -->
                                    <td><button class="btn btn-link" data-id="{{ $alladvt->id}}" onclick="deleteAdvt.call(this)">Delete</button></td>        
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                <!-- </form> -->
            
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

        function deleteAdvt() {
            
           //alert($(this).attr("data-id"));
           //alert($(this).data(id));
           $this = $(this);
           advtid = $this.attr("data-id");
            //alert(jobid);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


            $.ajax({
                url: "{{ route('deleteAdvt')}}",
                type: "post",
                dataType : 'json',
                data: { advtid : advtid },
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
