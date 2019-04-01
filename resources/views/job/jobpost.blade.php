@extends('layout.master')
    
@section('content')

@push('topscript')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/job/jobform.css') }}">
@endpush
            <div class="container">
            <div class="row">
                <div class="col-md-offset-3" id="form" style="float:right">
                    <center><b id="post">JOB POSTING FORM</b></center>            
           <form method="post" action="{{ route('postjobsubmit') }}">

                {{ csrf_field() }}
            
                @if($errors->any())
            <div>
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            <div class="form-group">
                <label>Job Title :</label>
                <input type="text" class="form-control text" name="title" placeholder="Enter Job Title" />
            </div>
            <div class="form-group">
                <label>Company Name :</label>
                <input type="text" class="form-control text" name="companyname" placeholder="Enter Company Name" />
            </div>
            <div class="form-group">
                <label>HR Name :</label>
                <input type="text" class="form-control" name="hrname" placeholder="Enter HR Name"/>
            </div>
            <div class="form-group">
                <label>Experience</label>
                <select name="exp" class="form-control">
                    <option>0 years</option> 
                    <option>1 years</option>
                    <option>2 years</option> 
                    <option>3 years</option> 
                    <option>4 years</option> 
                    <option>5 years</option> 
                    <option>6 years</option> 
                    <option>7 years</option> 
                    <option>8 years</option> 
                    <option>9 years</option> 
                    <option>10 years</option>  
                </select>
            </div>
            <div class="form-group">
                <label>Skills :</label>
                <input class="form-control text" type="text" name="skill" placeholder="Enter Skills"/>
            </div>
            <div class="form-group">
                <label>Post date :</label>
                <input type="text" class="form-control text" id="datetime" name="postdate" placeholder="Enter Post Date" />
            </div>
            <div class="form-group">
                <label>Expiry date :</label>
                <input type="text" class="form-control text" id="datetime" name="expdate" placeholder="Enter Expiry Date" />
            </div>
            <div class="form-group">
                <label>Location :</label>
                <input type="text" class="form-control text" name="location" placeholder="Enter Location" />
            </div>
            <div class="form-group">
                <label>Package :</label><input type="text" class="form-control" placeholder="Enter Package" name="pack" />
            </div>
            <div class="form-group">
                <label>Job Description</label>
                <textarea class="form-control" rows="6" placeholder="Enter Full Address"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Post Job" name="submit">
                <input type="reset" class="btn btn-danger" value="Reset">
            </div>
            </form>
            
        
@push('bottomscript')
<script type="text/javascript" src="{{asset('js/bootstrap-datepicker.min.js')}}"></script>

<script type="text/javascript">
$(document).ready(function() {
    $('.datetime').datepicker({
        format: 'yyyy-mm-dd'
    });
});

</script>
@endpush
@endsection