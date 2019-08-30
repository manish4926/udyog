@extends('layout.master')

@section('content')

@push('topscript')
<link rel="stylesheet" type="text/css" href="{{ asset('css/job/applicationform.css') }}">
@endpush

{{-- @include('partials.content-divider') --}}


@section('center-content')
<div class="white-card">
	
	@if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
                 @endif
                 
	<form action="{{route('applicationsubmit')}}" method="post" enctype="multipart/form-data">
		{{ csrf_field() }}

		<div class="form-group">
			<fieldset>
				<legend>Personal Details:</legend>
				<label>First Name :</label>{{ $applicantinfo->firstname}}<br>
				<label>Last Name :</label>{{$applicantinfo->lastname}}<br>
			</fieldset>
			

			<label>Email :  </label><input type="Email" name="Email" value="{{ $applicantinfo->email}}" /><br>
			<label>Mobile :  </label><input type="Mobile" name="mobile_no" value="{{isset($applicantdetails->mobile_no)?$applicantdetails->mobile_no:''}}" /><br>
			<label>City :  </label><input type="text" name="city" value="{{isset($applicantdetails->city)?$applicantdetails->city:''}}" />
			<label>State :  </label>                          
			<select name="state">
				<option value="{{isset($applicantdetails->state)?$applicantdetails->state:''}}">{{isset($applicantdetails->state)?$applicantdetails->state:''}}</option>
				<option value="Andaman Nicobar">Andaman Nicobar</option>
				<option value="Andhra Pradesh">Andhra Pradesh</option>
				<option value="Arunachal Pradesh">Arunachal Pradesh</option>
				<option value="Assam">Assam</option>
				<option value="Banglore">Banglore</option>
				<option value="Bihar">Bihar</option>
				<option value="Chandigarah">Chandigarah</option>
				<option value="Chennai">Chennai</option>
				<option value="Chhattisgarh">Chhattisgarh</option>
				<option value="Dadra Nagar Haveli">Dadra Nagar Haveli</option>
				<option value="Daman Diu">Daman Diu</option>
				<option value="Delhi">Delhi</option>
				<option value="Goa">Goa</option>
				<option value="Gujrat">Gujrat</option>
				<option value="Haryana">Haryana</option>
				<option value="Himachal Pradesh">Himachal Pradesh</option>
				<option value="Jharkhand">Jharkhand</option>
				<option value="Karnataka">Karnataka</option>
				<option value="Kerala">Kerala</option>
				<option value="Lakshadweep">Lakshadweep</option>
				<option value="Madhya Pradesh">Madhya Pradesh</option>
				<option value="Maharashtra">Maharashtra</option>
				<option value="Manipur">Manipur</option>
				<option value="Meghalaya">Meghalaya</option>
				<option value="Mizoram">Mizoram</option>
				<option value="Nagaland">Nagaland</option>
				<option value="Orissa">Orissa</option>
				<option value="Pondicherry">Pondicherry</option>
				<option value="Punjab<">Punjab</option>
				<option value="Rajasthan">Rajasthan</option>
				<option value="Sikkim">Sikkim</option>
				<option value="Tamilnadu">Tamilnadu</option>
				<option value="Tripur">Tripura</option>
				<option value="Uttar Pradesh">Uttar Pradesh</option>
				<option value="Uttaranchal">Uttaranchal</option>
				<option value="West Bengal">West Bengal</option>
			</select>

			<br><label>Date of Birth</label>
			<input type="date" name="dob" value="{{isset($applicantdetails->dob)?$applicantdetails->dob:''}}" format="dd-mm-yyyy">
			@if(isset($applicantdetails->gender))
			<label>Gender :</label>
			<input type="radio" name="gender" value="male" {{($applicantdetails->gender == 'male')?"checked":''}}> Male
			<input type="radio" name="gender" value="female"  {{($applicantdetails->gender == 'female')?"checked":''}}> Female
			<input type="radio" name="gender" value="other"  {{($applicantdetails->gender == 'other')?"checked":''}}> Other
<br>
			@else
			<label>Gender :</label>
			<input type="radio" name="gender" value="male" > Male
			<input type="radio" name="gender" value="female" > Female
			<input type="radio" name="gender" value="other" > Other
<br>
@endif
		<label>Skills :  </label><input type="text" name="skills" value="{{isset($applicantdetails->skills)?$applicantdetails->skills:''}}" /><br>
		</div>
	{{-- 	<div class="form-group">

			
		</div> --}}
		<div class="form-group">
			<fieldset>
				<legend>Work Experience:</legend>
				<label>Total Experience :</label>
				<select name="tyear">
					<option value="{{isset($yearex)?$yearex:''}}">{{isset($yearex)?$yearex:'Year'}}</option>
					<script type="text/javascript">
						for (var i = 0; i < 51; i++) {
							document.write('<option>'+i+'</option>');
						}
					</script>
				</select>
				<select name="tmonth">
					<option value="{{isset($monthex)?$monthex:''}}">{{isset($monthex)?$monthex:'Month'}}</option>
					<script type="text/javascript">
						for (var i = 0; i < 13; i++) {
							document.write('<option>'+i+'</option>');
						}
					</script>
				</select>
				<br>
				<label>Current CTC :</label>
				<select name="ddlSalaryLacs">
					<option value="{{isset($lacs)?$lacs:''}}">{{isset($lacs)?$lacs:'Lakhs'}}</option>
					<script type="text/javascript">
						for (var i = 0; i < 101; i++) {
							document.write('<option>'+i+'</option>');
						}
					</script>
				</select>
				<select name="salThousand" id="salary">
					<option value="{{isset($thousand)?$thousand:''}}">{{isset($thousand)?$thousand:'Thousands'}}</option>
					<script type="text/javascript">
						for (var i = 0; i < 100; i++) {
							document.write('<option>'+i+'</option>');
						}
					</script>
				</select>

			</fieldset>
			<br>
		</div>

		<div class="form-group">
			<fieldset>
				<legend>Current / Latest Job Details</legend>

				<label>Job Title :</label>
				<input name="jobtitle" type="text" value="{{isset($applicantdetails->jobtitle)?$applicantdetails->jobtitle:''}}">
				<label>Company Name :</label>
				<input name="companyname" type="text" value="{{isset($applicantdetails->companyname)?$applicantdetails->companyname:''}}">
				<label>Industry :</label>
				<select name="industry">
					<option selected="selected" value="{{isset($applicantdetails->industry)?$applicantdetails->industry:''}}">{{isset($applicantdetails->industry)?$applicantdetails->industry:''}}</option>
					<option value="Accounting / Finance">Accounting / Finance</option>
					<option value="Administration">Administration</option>
					<option value="Advertising / PR/ MR / Event Management">Advertising / PR/ MR / Event Management</option>
					<option value="Agency">Agency</option>
					<option value="Agriculture / Dairy/ Fertilizer/Pesticides">Agriculture / Dairy/ Fertilizer/Pesticides</option>
					<option value="Airlines/Travel/Transportation/Logistic/Car rental">Airlines/Travel/Transportation/Logistic/Car rental</option>
					<option value="Animation / Gaming">Animation / Gaming</option>
					<option value="Any Industry">Any Industry</option>
					<option value="Architecture / Interior Design<">Architecture / Interior Design</option>
					<option value="Automobile / Auto Alliance / Auto Components">Automobile / Auto Alliance / Auto Components</option>
					<option value="Banking / Financial Services / Broking">Banking / Financial Services / Broking</option>
					<option value="Beauty or  Wellness/SPA">Beauty &amp; Wellness/SPA</option>
					<option value="BPO/ Call Centre/ ITES">BPO/ Call Centre/ ITES</option>
					<option value="Brewery / Distillery">Brewery / Distillery</option>
					<option value="Ceramics / Sanitary ware">Ceramics / Sanitary ware</option>
					<option value="Chemicals/Petrochemicals/Tyres/Glass/Plastic/rubbe">Chemicals/Petrochemicals/Tyres/Glass/Plastic/rubbe</option>
					<option value="Construction / Engineering / Cement / Metals/ Stee">Construction / Engineering / Cement / Metals/ Stee</option>
					<option value="Consumer/durables/electricals/Switchgears">Consumer/durables/electricals/Switchgears</option>
					<option value="Courier / Transportation / Freight / Warehousing">Courier / Transportation / Freight / Warehousing</option>
					<option value="Education / Teaching / Training">Education / Teaching / Training</option>
					<option value="Electricals / Switchgears">Electricals / Switchgears</option>
					<option value="Engineering/oil  or gas/Power/Energy">Engineering/oil &amp; gas/Power/Energy</option>
					<option value="Entertainment/Media">Entertainment/Media</option>
					<option value="Event Management/Promotional event">Event Management/Promotional event</option>
					<option value="Export / Import">Export / Import</option>
					<option value="Facility Management">Facility Management</option>
					<option value="Fertilizers / Pesticides">Fertilizers / Pesticides</option>
					<option value="FMCG / Foods / Beverage">FMCG / Foods / Beverage</option>
					<option value="Food Processing">Food Processing</option>
					<option value="Footwear">Footwear</option>
					<option value="Fresher / Trainee / Entry Level">Fresher / Trainee / Entry Level</option>
					<option value="Gems / Jewellery">Gems / Jewellery</option>
					<option value="General">General</option>
					<option value="Glass / Glassware">Glass / Glassware</option>
					<option value="Government / Defence">Government / Defence</option>
					<option value="Heat Ventilation / Air Conditioning">Heat Ventilation / Air Conditioning</option>
					<option value="Hospitality/Hotel Management">Hospitality/Hotel Management</option>
					<option value="Household">Household</option>
					<option value="Industrial Products / Heavy Machinery">Industrial Products / Heavy Machinery</option>
					<option value="Infrastructure/Construction">Infrastructure/Construction</option>
					<option value="Insurance">Insurance</option>
					<option value="Internet / Ecommerce">Internet / Ecommerce</option>
					<option value="Iron and Steel">Iron and Steel</option>
					<option value="IT Software/ Software Services">IT Software/ Software Services</option>
					<option value="IT-Hardware or Networking">IT-Hardware &amp; Networking</option>
					<option value="KPO / Research / Analytics">KPO / Research / Analytics</option>
					<option value="Legal">Legal</option>
					<option value="Manufacturing">Manufacturing</option>
					<option value="Media / Entertainment / Internet">Media / Entertainment / Internet</option>
					<option value="Medical / Healthcare / Hospitals">Medical / Healthcare / Hospitals</option>
					<option value="Mining / Quarrying">Mining / Quarrying</option>
					<option value="NGO / Social Services / Regulators / Industry Asso">NGO / Social Services / Regulators / Industry Asso</option>
					<option value="Office Equipment / Automation">Office Equipment / Automation</option>
					<option value="Oil and Gas / Energy / Power / Infrastructure">Oil and Gas / Energy / Power / Infrastructure</option>
					<option value="Other">Other</option>
					<option value="Pharma / Biotech / Clinical Research">Pharma / Biotech / Clinical Research</option>
					<option value="Printing / Packaging">Printing / Packaging</option>
					<option value="Publishing">Publishing</option>
					<option value="Pulp and Paper">Pulp and Paper</option>
					<option value="Real Estate / Property">Real Estate / Property</option>
					<option value="Recruitment / Staffing">Recruitment / Staffing</option>
					<option value="Retail / Wholesale/ Shopkeeper">Retail / Wholesale/ Shopkeeper</option>
					<option value="Sales Marketing">Sales Marketing</option>
					<option value="Security / Law Enforcement">Security / Law Enforcement</option>
					<option value="Semiconductors / Electronics">Semiconductors / Electronics</option>
					<option value="Shipping / Marine">Shipping / Marine</option>
					<option value="Soft Skills/Personality Development">Soft Skills/Personality Development</option>
					<option value="Strategy / Management Consulting Firms">Strategy / Management Consulting Firms</option>
					<option value="Telcom / ISP">Telcom / ISP</option>
					<option value="Textiles / Garments / Accessories">Textiles / Garments / Accessories</option>
					<option value="Travel / Hotels / Restaurants / Airlines / Railway">Travel / Hotels / Restaurants / Airlines / Railway</option>
					<option value="Tyres">Tyres</option>
					<option value="Water Treatment / Waste Management">Water Treatment / Waste Management</option>
					<option value="Wellness / Fitness / Sports">Wellness / Fitness / Sports</option>
				</select>

				<br><label>Duration in this job :</label>
			
				<select name="yearduration">
					<option value="{{isset($year)?$year:''}}">{{isset($year)?$year:'Year'}}</option>
					<script type="text/javascript">
						for (var i = 0; i < 13; i++) {
							document.write('<option>'+i+'</option>');
						}
					</script>
				</select>
				<select name="monthduration">
					<option value="{{isset($month)?$month:''}}">{{isset($month)?$month:'month'}}</option>
					<script type="text/javascript">
						for (var i = 0; i < 13; i++) {
							document.write('<option>'+i+'</option>');
						}
					</script>

				</select>
			</fieldset>
			<br>
		</div> 
		<div class="form-group">
			<fieldset>
				<legend>Educational Details:</legend>
				<label>Basic Graduation :</label>

				<select name="basicgraduation">
					<option value="{{isset($applicantdetails->basicgraduation)?$applicantdetails->basicgraduation:''}}">{{isset($applicantdetails->basicgraduation)?$applicantdetails->basicgraduation:'Select'}}</option>
					<option value="8th">8th </option>
					<option value="10th (Higher Secondary)">10th (Higher Secondary)</option>
					<option value="12th (Senior Secondary)">12th (Senior Secondary)</option>
					
				</select>

		                           
				<br><label>Graduation :</label>

				<select name="graduation">
					<option value="{{isset($applicantdetails->graduation)?$applicantdetails->graduation:''}}">{{isset($applicantdetails->graduation)?$applicantdetails->graduation:'Select
					'}}</option>
					<option value="BA">B.A</option>
					<option value="BARCH">B.Arch</option>
					<option value="BBA">B.B.A</option>
					<option value="BCA">B.C.A</option>
					<option value="BCOM">B.Com</option>
					<option value="BDS">B.D.S</option>
					<option value="BED">B.Ed</option>
					<option value="BHM">B.H.M</option>
					<option value="Gra28">B.Lib.</option>
					<option value="Gra27">B.Pd</option>
					<option value="BPHARMA">B.Pharma</option>
					<option value="BSC">B.Sc</option>
					<option value="BE">B.Tech/B.E</option>
					<option value="BVSC">B.V.S.C</option>
				</select>


			   <br><label>Diploma :</label>
			   <select name="Diploma">
					<option value="DIPLOMA">Dilpoma</option>
					<option value="Gra29">ITI</option>
					<option value="Gra25">NTT</option>
					<option value="Gra24">PGT</option>
					<option value="Gra26">PRT</option>

				</select>

				<br><label>Post Graduation :</label>

				<select name="postgraduation">
					<option value="{{isset($applicantdetails->postgraduation)?$applicantdetails->postgraduation:''}}">{{isset($applicantdetails->postgraduation)?$applicantdetails->postgraduation:'Select'}}</option>
					<option value="CA">C.A</option>
					<option value="CS">C.S</option>
					<option value="ICWA">I.C.W.A</option>
					<option value="INTPG">Integrated PG</option>
					<option value="Pg23">Journalism</option>
					<option value="LLM">L.L.M</option>
					<option value="MA">M.A</option>
					<option value="MARCH">M.Arch</option>
					<option value="MBA">M.B.A/PGDM</option>
					<option value="MCA">M.C.A</option>
					<option value="MCM">M.C.M</option>
					<option value="MCOM">M.Com</option>
					<option value="MED">M.Ed</option>
					<option value="Pg24">M.Lib,</option>
					<option value="MPHARMA">M.Pharma</option>
					<option value="MS">M.S</option>
					<option value="MSC">M.Sc</option>
					<option value="MTECH">M.Tech</option>
					<option value="MVSC">M.V.S.C</option>
				</select>

				<br><label>Certified Course(s):</label>

				<br><textarea name="certificate" rows="2" cols="20" id="certificate" style="height:80px;width:250px;"> {{isset($applicantdetails->certificate)?$applicantdetails->certificate:''}}
				</textarea>
				<label>Upload Resume:</label>
				<input type="file" name="fileupload" />
			</fieldset>
				<br>
			</div>
				<div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit Application" name="submitApplication"/>
            	</div>
	</form>
</div>
@endsection

@endsection