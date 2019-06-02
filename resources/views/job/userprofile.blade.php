@extends('layout.master')
    
@section('content')

@push('topscript')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
@endpush

@section('center-content')

<div class="white-card">
  <br/>
  <br/>
    <div class="col-sm-10">
        <div data-spy="scroll" class="tabbable-panel">
            <div class="tabbable-line">
                <ul class="nav nav-tabs ">
                    <li class="active">
                        <a href="#tab_default_1" data-toggle="tab">Personal Info </a>
                    </li>
                    <li>
                        <a href="#tab_default_2" data-toggle="tab">Education</a>
                    </li>
                    <li>
                        <a href="#tab_default_3" data-toggle="tab">Work Experience</a>
                    </li>
                    <li>
                        <a href="#tab_default_5" data-toggle="tab">Certification Details</a>
                    </li>
                    <li>
                        <a href="#tab_default_6" data-toggle="tab">Resume</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab_default_1">
                        <div class="well well-sm">
                            <h4>PERSONAL DATA</h4>
                        </div>
                    <table class="table bio-table">
                        <tbody>
                            <tr>      
                                <td>Firstname</td>
                                <td>: {{ $applicantinfo->firstname}}</td>
                            </tr>
                            <tr>    
                                <td>Lastname</td>
                                <td>: {{ $applicantinfo->lastname}}</td>
                            </tr>
                            <tr>    
                                <td>Date of Birth</td>
                                <td>: {{$applicantdetails->dob}}</td>       
                            </tr>
                            <tr>
                                <td>Gender</td>
                                <td>:{{$applicantdetails->gender}} </td>
                            </tr>
                            <tr>
                                <td>E mail</td>
                                <td>: {{ $applicantinfo->email}}</td>
                            </tr>
                            <tr>
                                <td>Mobile no</td>
                                <td>:{{$applicantdetails->mobile_no}} </td>
                            </tr>
                             <tr>
                                <td>State</td>
                                <td>:{{$applicantdetails->state}} </td>
                            </tr>
                             <tr>
                                <td>City</td>
                                <td>:{{$applicantdetails->city}} </td>
                            </tr>
                        </tbody>
                    </table>
                </div>         
                <div class="tab-pane" id="tab_default_2">
                    <div class="well well-sm">
                        <h4>EDUCATIONAL BACKGROUND</h4>
                    </div>
                    
                    <table class="table bio-table">
                        <tbody>
                            <tr>
                                <td>Under Graduate</td>
                                <td>: {{$applicantdetails->graduation}}</td>
                            </tr>
                            <tr>
                                <td>Post Graduate</td>
                                <td>: {{$applicantdetails->postgraduation}} </td>
                            </tr>
                            <tr>
                                <td>Doctor of Philosophy (PhD)</td>
                                <td>: {{$applicantdetails->doctorate}} </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <div class="tab-pane" id="tab_default_3">
                    <div class="well well-sm">
                        <h4>EXPERIENCE</h4>
                    </div>
                    
                    <table class="table bio-table">
                        <tbody>
                            <tr>
                                <td>Total Experience</td>
                                <td>:{{$applicantdetails->experience}} </td>
                            </tr>
                            <tr>      
                                <td>Job Duration</td>
                                <td>:{{$applicantdetails->duration}} </td>
                            </tr>
                            <tr>
                                <td>Salary</td>
                                <td>:{{$applicantdetails->salary}} </td>
                            </tr>
                            <tr>
                                <td>Job Title</td>
                                <td>:{{$applicantdetails->jobtitle}} </td>
                            </tr>
                            <tr>
                                <td>Company Name</td>
                                <td>:{{$applicantdetails->companyname}} </td>
                            </tr>
                            <tr>
                                <td>Industry Name</td>
                                <td>:{{$applicantdetails->industry}} </td>
                            </tr>
                            <tr>
                                <td>Skills</td>
                                <td>:{{$applicantdetails->skills}} </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                 
                <div class="tab-pane" id="tab_default_5">
                    <div class="well well-sm">
                        <h4>CERTIFICATION DETAILS</h4>
                    </div>
                    
                    <table class="table bio-table">
                        <thead>
                            <tr>
                                <td> Certification details</td>
                                <td>: {{$applicantdetails->certifcate}}</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> Certification Name</td>
                                <td>: </td>
                            </tr>
                            <tr>
                                <td> Certification Company</td>
                                <td>: </td>
                            </tr>
                            <tr>
                                <td>
                            <select name="Year">
                            <option value="">Year</option>
                                <script type="text/javascript">
                                    for (var i = 1960; i < 2020; i++) {
                                        document.write('<option>'+i+'</option>');
                                    }
                                </script>
                            </select>
                        </td>
                            </tr>
                        
                        </tbody>
                    </table>
                    
                    <br/>
                    
                </div>
                
                <div class="tab-pane" id="tab_default_6">
                    <div class="well well-sm">
                        <h4>Download Resume</h4>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-offset-4">
                                    <h5>Click Here to download Resume : </h5><button type="submit" class="btn btn-primary">Download Resume</button>
                        </div><!-- /.col-lg-12 -->
                    </div><!-- /.row -->    
                </div>  
            </div>
        </div>
    </div>
</div>

</div>
@endsection
@section('right-content')
  @include('partials.sidebar-search-job')
@endsection
@endsection