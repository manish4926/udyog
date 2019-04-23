@extends('layout.master')
    
@section('content')

@push('topscript')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
@endpush

@section('center-content')
@foreach($users as $userdata)
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
                                <td>: {{$userdata->firstname}}</td>
                            </tr>
                            <tr>    
                                <td>Lastname</td>
                                <td>: </td>
                            </tr>
                            <tr>    
                                <td>Date of Birthday</td>
                                <td>: </td>       
                            </tr>
                            <tr>
                                <td>Gender</td>
                                <td>: </td>
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
                                <td>: </td>
                            </tr>
                            <tr>
                                <td>Post Graduate</td>
                                <td>: </td>
                            </tr>
                            <tr>
                                <td>Doctor of Philosophy (PhD)</td>
                                <td>: </td>
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
                                <td>: </td>
                            </tr>
                            <tr>      
                                <td>Duration</td>
                                <td>: </td>
                            </tr>
                            <tr>
                                <td>Salary</td>
                                <td>: </td>
                            </tr>
                            <tr>
                                <td>Job Title</td>
                                <td>: </td>
                            </tr>
                            <tr>
                                <td>Company Name</td>
                                <td>: </td>
                            </tr>
                            <tr>
                                <td>Industry Name</td>
                                <td>: </td>
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
                                <th colspan="2"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>   Line 1</td>
                                <td>: </td>
                            </tr>
                            <tr>
                                <td>   Line 2</td>
                                <td>: </td>
                            </tr>
                            <tr>
                                <td>   City</td>
                                <td>: </td>
                            </tr>
                            <tr>
                                <td>   State</td>
                                <td>: </td>
                            </tr>
                            <tr>
                                <td>   Country</td>
                                <td>: </td>
                            </tr>
                            <tr>
                                <td>   Pin code</td>
                                <td>: </td>
                            </tr>
                        </tbody>
                    </table>
                    
                    <br/>

                    <table class="table bio-table">
                        <thead>
                            <tr>
                                <th colspan="2">Permanent Residential Address</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>   Plot No / Door No / Part No / Block No</td>
                                <td>: </td>
                            </tr>
                            <tr>
                                <td>   Street Name</td>
                                <td>: </td>
                            </tr>
                            <tr>
                                <td>   City</td>
                                <td>: </td>
                            </tr>
                            <tr>
                                <td>   State</td>
                                <td>: </td>
                            </tr>
                            <tr>
                                <td>   Country</td>
                                <td>: </td>
                            </tr>
                            <tr>
                                <td>   Pin code</td>
                                <td>: </td>
                            </tr>
                        </tbody>
                    </table>
                    
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
@endforeach
</div>
@endsection
@section('right-content')
  @include('partials.sidebar-search-job')
@endsection
@endsection