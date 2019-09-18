@extends('layout.master')
    
@section('content')

@push('topscript')
@endpush

@section('center-content')

<div class="white-card">
  <br/>
 
  <br/>
    <div class="col-sm-10">
        <div data-spy="scroll" class="tabbable-panel">
            <div class="tabbable-line">
                <!-- List group -->
<div class="list-group list-group-horizontal-md " id="myList" role="tablist">
  <a class="list-group-item list-group-item-action active" data-toggle="list" href="#Personalinfo" role="tab">Personal Info</a>
  <a class="list-group-item list-group-item-action" data-toggle="list" href="#Education" role="tab">Education</a>
  <a class="list-group-item list-group-item-action" data-toggle="list" href="#Work" role="tab">Work Experience</a>
  <a class="list-group-item list-group-item-action" data-toggle="list" href="#Certificates" role="tab">Certification Details</a>
  <a class="list-group-item list-group-item-action" data-toggle="list" href="#Appliedjob" role="tab">Applied Jobs</a>
  <a class="list-group-item list-group-item-action" data-toggle="list" href="#Resume" role="tab">Resume</a>
</div>

 <!-- Tab panes -->
{{--<div class="tab-content">
  <div class="tab-pane active" id="home" role="tabpanel">Daminee</div>
  <div class="tab-pane" id="profile" role="tabpanel">...</div>
  <div class="tab-pane" id="messages" role="tabpanel">...</div>
  <div class="tab-pane" id="settings" role="tabpanel">...</div>
</div> --}}
               {{--  <ul class="nav nav-tabs ">
                    <li class="nav-item active">
                        <a href="#tab_default_1" data-toggle="tab">Personal Info </a>
                    </li>
                    <li class="nav-item">
                        <a href="#tab_default_2" data-toggle="tab">Education</a>
                    </li>
                    <li class="nav-item">
                        <a href="#tab_default_3" data-toggle="tab">Work Experience</a>
                    </li>
                    <li class="nav-item">
                        <a href="#tab_default_5" data-toggle="tab">Certification Details</a>
                    </li>
                    <li class="nav-item">
                        <a href="#tab_default_6" data-toggle="tab">Resume</a>
                    </li>
                </ul> --}}
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="Personalinfo">
                        <div class="well well-sm">
                            <br>
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
                                <td>: {{isset($applicantdetails->dob)?$applicantdetails->dob:'NA'}}</td>       
                            </tr>
                            <tr>
                                <td>Gender</td>
                                <td>:{{isset($applicantdetails->gender)?$applicantdetails->gender:'NA'}} </td>
                            </tr>
                            <tr>
                                <td>E mail</td>
                                <td>: {{ isset($applicantinfo->email)?$applicantinfo->email:'NA'}}</td>
                            </tr>
                            <tr>
                                <td>Mobile no</td>
                                <td>: {{isset($applicantdetails->mobile_no)?$applicantdetails->mobile_no:'NA'}} </td>
                            </tr>
                             <tr>
                                <td>State</td>
                                <td>: {{isset($applicantdetails->state)?$applicantdetails->state:'NA'}} </td>
                            </tr>
                             <tr>
                                <td>City</td>
                                <td>: {{isset($applicantdetails->city)?$applicantdetails->city:'NA'}} </td>
                            </tr>
                        </tbody>
                    </table>
                </div>  


                       
                <div class="tab-pane" id="Education">
                    <div class="well well-sm">
                        <br>
                        <h4>EDUCATIONAL BACKGROUND</h4>
                    </div>
                    
                    <table class="table bio-table">
                        <tbody>
                            <tr>
                                <td>Under Graduate</td>
                                <td>: {{isset($applicantdetails->graduation)?$applicantdetails->graduation:'NA'}}</td>
                            </tr>
                            <tr>
                                <td>Post Graduate</td>
                                <td>: {{isset($applicantdetails->postgraduation)?$applicantdetails->postgraduation:'NA'}} </td>
                            </tr>
                            <tr>
                                <td>Doctor of Philosophy (PhD)</td>
                                <td>: {{isset($applicantdetails->doctorate)?$applicantdetails->doctorate:'NA'}} </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <div class="tab-pane" id="Work">
                    <div class="well well-sm">
                        <br>
                        <h4>EXPERIENCE</h4>
                    </div>
                    
                    <table class="table bio-table">
                        <tbody>
                            <tr>
                                <td>Total Experience</td>
                                <td>: {{isset($applicantdetails->experience)?$applicantdetails->experience:'NA'}} </td>
                            </tr>
                            <tr>      
                                <td>Job Duration</td>
                                <td>: {{isset($applicantdetails->duration)?$applicantdetails->duration:'NA'}} </td>
                            </tr>
                            <tr>
                                <td>Salary</td>
                                <td>: {{isset($applicantdetails->salary)?$applicantdetails->salary:'NA'}} </td>
                            </tr>
                            <tr>
                                <td>Job Title</td>
                                <td>: {{isset($applicantdetails->jobtitle)?$applicantdetails->jobtitle:'NA'}} </td>
                            </tr>
                            <tr>
                                <td>Company Name</td>
                                <td>: {{isset($applicantdetails->companyname)?$applicantdetails->companyname:'NA'}} </td>
                            </tr>
                            <tr>
                                <td>Industry Name</td>
                                <td>: {{isset($applicantdetails->industry)?$applicantdetails->industry:'NA'}} </td>
                            </tr>
                            <tr>
                                <td>Skills</td>
                                <td>: {{isset($applicantdetails->skills)?$applicantdetails->skills:'NA'}} </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                 
                <div class="tab-pane" id="Certificates">
                    <div class="well well-sm">
                        <br>
                        <h4>CERTIFICATION DETAILS</h4>
                    </div>
                    
                    <table class="table bio-table">
                        <thead>
                            <tr>
                                <td> Certification details</td>
                                <td>: {{isset($applicantdetails->certifcate)?$applicantdetails->certifcate:'NA'}}</td>
                            </tr>
                        </thead>
{{--                         <tbody>
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
                        
                        </tbody> --}}
                    </table>
                    
                    <br/>
                    
                </div>
                
                <div class="tab-pane" id="Resume">
                    <div class="well well-sm">
                        <br>
                        <h4>Download Resume</h4>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-offset-4">

                            @if(!empty($applicantdetails->resume))

                        <form action="{{ route('resumedownload',['userid'=>$applicantinfo->id]) }}" method="get">
                                   {{--  <h5>Click Here to download Resume : </h5> --}}<button type="submit" class="btn btn-primary">Download Resume</button>
                                   </form>
                                   @else

                                   <a>NA</a>
                        @endif
                        </div><!-- /.col-lg-12 -->
                    </div><!-- /.row -->    
                </div> 
                @if(isset($appliedjobs))
                 <div class="tab-pane" id="Appliedjob">
                    <div class="well well-sm">
                        <br>
                        <h4>APPLIED JOBS</h4>
                    </div>
                    
                    <table class="table bio-table">
                        <tbody>
                            <tr>
                                <td>S.no</td>
                                <td>Job Profile</td>
                                <td>Company Name</td>
                                <td>Details</td>
                            </tr>
                            @php $i = 0 @endphp
                            @foreach($appliedjobs as $appliedjob)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ ucfirst($appliedjob->getJob()->job_title) }}</td>
                                <td>{{ ucfirst($appliedjob->getJob()->company_name) }}</td>
                                <td><a href="{{ route('getdisplay',['job_id'=>$appliedjob->job_id])}}"> Check details</td>
                            </tr>
                            @endforeach
                            {{-- <tr>
                                <td>Job Profile</td>
                                <td>: {{isset($appliedjob->postgraduation)?$applicantdetails->postgraduation:'NA'}} </td>
                            </tr> --}}
                        </tbody>
                    </table>
                </div>

                @else
                <div class="tab-pane" id="Appliedjob">
                    <div class="well well-sm">
                        <br>
                        <h4>APPLIED JOBS</h4>
                    </div>
                    </div>
                @endif
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