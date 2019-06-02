@extends('layout.master')

@section('content')

@push('topscript')
<link rel="stylesheet" type="text/css" href="{{ asset('css/job/applicationform.css') }}">
@endpush

{{-- @include('partials.content-divider') --}}


@section('center-content')
<div class="white-card">
	
	<form action="{{route('applicationsubmit')}}" method="post" enctype="multipart/form-data">
		{{ csrf_field() }}

		<div class="form-group">
			<fieldset>
				<legend>Personal Details:</legend>
				<label>First Name :</label>{{$user->firstname}}<br>
				<label>Last Name :</label>{{$user->lastname}}<br>
				<label>E-mail :</label>{{$user->email}}
			</fieldset>

			<label>Mobile :  </label><input type="Mobile" name="mobile_no" placeholder="Enter mobile no" /><br>
			<label>City :  </label><input type="text" name="city" placeholder="Enter City" /><br>
			<label>State :  </label>                          
			<select name="state">
				<option value="">State</option>
				<option value="an">Andaman Nicobar</option>
				<option value="ap">Andhra Pradesh</option>
				<option value="ar">Arunachal Pradesh</option>
				<option value="as">Assam</option>
				<option value="St40">Banglore</option>
				<option value="br">Bihar</option>
				<option value="cg">Chandigarah</option>
				<option value="St39">Chennai</option>
				<option value="ch">Chhattisgarh</option>
				<option value="dn">Dadra Nagar Haveli</option>
				<option value="dd">Daman Diu</option>
				<option value="dl">Delhi</option>
				<option value="ga">Goa</option>
				<option value="gj">Gujrat</option>
				<option value="hr">Haryana</option>
				<option value="hp">Himachal Pradesh</option>
				<option value="jr">Jharkhand</option>
				<option value="kr">Karnataka</option>
				<option value="ka">Kerala</option>
				<option value="ld">Lakshadweep</option>
				<option value="mp">Madhya Pradesh</option>
				<option value="mh">Maharashtra</option>
				<option value="mn">Manipur</option>
				<option value="ml">Meghalaya</option>
				<option value="mz">Mizoram</option>
				<option value="nl">Nagaland</option>
				<option value="or">Orissa</option>
				<option value="pn">Pondicherry</option>
				<option value="pb">Punjab</option>
				<option value="rj">Rajasthan</option>
				<option value="sk">Sikkim</option>
				<option value="tn">Tamilnadu</option>
				<option value="tr">Tripura</option>
				<option value="up">Uttar Pradesh</option>
				<option value="ut">Uttaranchal</option>
				<option value="wb">West Bengal</option>
			</select>

			<br><label>Date of Birth</label>
			<input type="date" name="dob" format="dd-mm-yyyy">

			<br><label>Gender :</label>
			<input type="radio" name="gender" value="male"> Male
			<input type="radio" name="gender" value="female"> Female
			<input type="radio" name="gender" value="other"> Other

		</div>
		<div class="form-group">

			<label>Skills :  </label><input type="text" name="skills" placeholder="Enter your skills" /><br>
		</div>
		<div class="form-group">
			<fieldset>
				<legend>Work Experience:</legend>
				<label>Total Experience :</label>
				<select name="tyear">
					<option value="">Year</option>
					<script type="text/javascript">
						for (var i = 0; i < 51; i++) {
							document.write('<option>'+i+'</option>');
						}
					</script>
				</select>
				<select name="tmonth">
					<option value="Month">Month</option>
					<script type="text/javascript">
						for (var i = 0; i < 13; i++) {
							document.write('<option>'+i+'</option>');
						}
					</script>
				</select>
				<br>
				<label>Current CTC :</label>
				<select name="ddlSalaryLacs">
					<option value="">Lacs</option>
					<script type="text/javascript">
						for (var i = 0; i < 101; i++) {
							document.write('<option>'+i+'</option>');
						}
					</script>
				</select>
				<select name="salThousand" id="salary" style="width:125px;">
					<option value="">Thousands</option>
					<script type="text/javascript">
						for (var i = 0; i < 100; i++) {
							document.write('<option>'+i+'</option>');
						}
					</script>
				</select>
			</fieldset>
		</div>
		<div class="form-group">
			<fieldset>
				<legend>Current / Latest Job Details</legend>

				<label>Job Title :</label>
				<input name="jobtitle" type="text">
				<br>
				<label>Company Name :</label>
				<input name="companyname" type="text">
				<br>
				<label>Industry :</label>
				<select name="industry">
					<option selected="selected" value="Industry">Industry</option>
					<option value="Ind4">Accounting / Finance</option>
					<option value="Ind60">Administration</option>
					<option value="Ind5">Advertising / PR/ MR / Event Management</option>
					<option value="Ind61">Agency</option>
					<option value="Ind6">Agriculture / Dairy/ Fertilizer/Pesticides</option>
					<option value="Ind9">Airlines/Travel/Transportation/Logistic/Car rental</option>
					<option value="Ind7">Animation / Gaming</option>
					<option value="Ind74">Any Industry</option>
					<option value="Ind8">Architecture / Interior Design</option>
					<option value="Ind3">Automobile / Auto Alliance / Auto Components</option>
					<option value="Ind10">Banking / Financial Services / Broking</option>
					<option value="Ind73">Beauty &amp; Wellness/SPA</option>
					<option value="Ind2">BPO/ Call Centre/ ITES</option>
					<option value="Ind11">Brewery / Distillery</option>
					<option value="Ind12">Ceramics / Sanitary ware</option>
					<option value="Ind13">Chemicals/Petrochemicals/Tyres/Glass/Plastic/rubbe</option>
					<option value="Ind14">Construction / Engineering / Cement / Metals/ Stee</option>
					<option value="Ind15">Consumer/durables/electricals/Switchgears</option>
					<option value="Ind16">Courier / Transportation / Freight / Warehousing</option>
					<option value="Ind17">Education / Teaching / Training</option>
					<option value="Ind18">Electricals / Switchgears</option>
					<option value="Ind62">Engineering/oil &amp; gas/Power/Energy</option>
					<option value="Ind63">Entertainment/Media</option>
					<option value="Ind64">Event Management/Promotional event</option>
					<option value="Ind19">Export / Import</option>
					<option value="Ind20">Facility Management</option>
					<option value="Ind21">Fertilizers / Pesticides</option>
					<option value="Ind22">FMCG / Foods / Beverage</option>
					<option value="Ind23">Food Processing</option>
					<option value="Ind65">Footwear</option>
					<option value="Ind24">Fresher / Trainee / Entry Level</option>
					<option value="Ind25">Gems / Jewellery</option>
					<option value="Ind66">General</option>
					<option value="Ind26">Glass / Glassware</option>
					<option value="Ind27">Government / Defence</option>
					<option value="Ind28">Heat Ventilation / Air Conditioning</option>
					<option value="Ind67">Hospitality/Hotel Management</option>
					<option value="Ind68">Household</option>
					<option value="Ind29">Industrial Products / Heavy Machinery</option>
					<option value="Ind69">Infrastructure/Construction</option>
					<option value="Ind30">Insurance</option>
					<option value="Ind36">Internet / Ecommerce</option>
					<option value="Ind31">Iron and Steel</option>
					<option value="Ind1">IT Software/ Software Services</option>
					<option value="Ind32">IT-Hardware &amp; Networking</option>
					<option value="Ind33">KPO / Research / Analytics</option>
					<option value="Ind34">Legal</option>
					<option value="Ind70">Manufacturing</option>
					<option value="Ind35">Media / Entertainment / Internet</option>
					<option value="Ind37">Medical / Healthcare / Hospitals</option>
					<option value="Ind38">Mining / Quarrying</option>
					<option value="Ind39">NGO / Social Services / Regulators / Industry Asso</option>
					<option value="Ind40">Office Equipment / Automation</option>
					<option value="Ind41">Oil and Gas / Energy / Power / Infrastructure</option>
					<option value="Ind59">Other</option>
					<option value="Ind43">Pharma / Biotech / Clinical Research</option>
					<option value="Ind44">Printing / Packaging</option>
					<option value="Ind45">Publishing</option>
					<option value="Ind42">Pulp and Paper</option>
					<option value="Ind46">Real Estate / Property</option>
					<option value="Ind47">Recruitment / Staffing</option>
					<option value="Ind48">Retail / Wholesale/ Shopkeeper</option>
					<option value="Ind71">Sales Marketing</option>
					<option value="Ind49">Security / Law Enforcement</option>
					<option value="Ind50">Semiconductors / Electronics</option>
					<option value="Ind51">Shipping / Marine</option>
					<option value="Ind72">Soft Skills/Personality Development</option>
					<option value="Ind52">Strategy / Management Consulting Firms</option>
					<option value="Ind53">Telcom / ISP</option>
					<option value="Ind54">Textiles / Garments / Accessories</option>
					<option value="Ind55">Travel / Hotels / Restaurants / Airlines / Railway</option>
					<option value="Ind56">Tyres</option>
					<option value="Ind57">Water Treatment / Waste Management</option>
					<option value="Ind58">Wellness / Fitness / Sports</option>
				</select>

				<br><label>Duration in this job :</label>

				<select name="yearduration">
					<option value="">Year</option>
					<script type="text/javascript">
						for (var i = 0; i < 13; i++) {
							document.write('<option>'+i+'</option>');
						}
					</script>
				</select>
				<select name="monthduration">
					<option value="">Month</option>
					<script type="text/javascript">
						for (var i = 0; i < 13; i++) {
							document.write('<option>'+i+'</option>');
						}
					</script>

				</select>
			</fieldset>
		</div> 
		<div class="form-group">
			<fieldset>
				<legend>Educational Details:</legend>
				<label>Basic Graduation :</label>

				<select name="basicgraduation">
					<option value="">Basic Graduation</option>
					<option value="basicgra21">8th </option>
					<option value="basicgra21">10th (Higher Secondary)</option>
					<option value="basicgra22">12th (Senior Secondary)</option>
					
				</select>

		                           
				<br><label>Graduation :</label>

				<select name="graduation">
					<option value="">Graduation</option>
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
					<option value="">Post Graduation</option>
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

				<br><textarea name="certificate" rows="2" cols="20" id="certificate" style="height:80px;width:250px;">
				</textarea>
				<br><label>Upload Resume:</label>
				<input type="file" name="fileupload" />

				<div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit Application" name="submitApplication"/>
            	</div>
			</fieldset>
		</div>
	</form>
</div>
@endsection
@section('right-content')
 @include('partials.sidebar-search-job')
@endsection

@endsection