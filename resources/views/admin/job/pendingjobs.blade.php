@extends('layout.admin')

@section('title','Pending Jobs')

@section('content')

@push('topscript')

    <link href="{{ asset('css/tagify.css') }}" rel="stylesheet">

@endpush
    <div class="container-fluid">
    <div class="row">
            <br>
            <!-- <div class="box box-primary">
            <div class="box-header with-border"> -->
              <center><h3 class="box-title">Pending Jobs</h3></center>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            

            
                    <table class="table table-hover table-striped table-bordered">
                        <thead class="thead-dark" align="center">
                            <tr>
                                <th>Job Title</th>
                                <th>Company Name</th>
                                <th>HR Name</th>
                                <th>Experience</th>
                                <th>Skills</th>
                                <th>Post Date</th>
                                <th>Expiry Date</th>
                                <th>Location</th>
                                <th>Package</th>
                                <th>Details</th>
                                <th>Activation</th>
                                <th>Delete Job</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($job_active as $job_opening)
                                <tr>
                                    <td>{{$job_opening->job_title}}</td>
                                    <td>{{$job_opening->company_name}}</td>
                                    <td>{{$job_opening->hr_name}}</td>
                                    <td>{{$job_opening->experience}}</td>
                                    <td>{{$job_opening->skills}}</td>
                                    <td>{{$job_opening->postdate}}</td>
                                    <td>{{$job_opening->expdate}}</td>
                                    <td>{{$job_opening->location}}</td>
                                    <td>{{$job_opening->package}}</td>
                                    <td><a href="{{ route('getdisplay',['job_id'=>$job_opening->job_id])}}">View details</a></td>
                                    <td><button class="btn btn-link" data-id="{{ $job_opening->job_id }}" onclick="activateJob.call(this)">Activate</button></td>
                                    <td><button class="btn btn-link" data-id="{{ $job_opening->job_id }}" onclick="deleteJob.call(this)">Delete</button></td>           
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
            
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
        
        function activateJob() {
            
           //alert($(this).attr("data-id"));
           //alert($(this).data(id));
           $this = $(this);
           jobid = $this.attr("data-id");
            //alert(jobid);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


            $.ajax({
                url: "{{ route('activejobssubmit')}}",
                type: "post",
                dataType : 'json',
                data: { jobid : jobid },
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

        function deleteJob() {
            
           //alert($(this).attr("data-id"));
           //alert($(this).data(id));
           $this = $(this);
           jobid = $this.attr("data-id");
            //alert(jobid);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


            $.ajax({
                url: "{{ route('deletejobssubmit')}}",
                type: "post",
                dataType : 'json',
                data: { jobid : jobid },
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
