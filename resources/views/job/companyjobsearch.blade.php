
<div class="white-card">
  <form method="post" action="{{ route('candidatesearch') }}"> {{ csrf_field() }}
    <div id="jobsearch-form" class="form-container" data-form-container>
      <div class="row">
        <div class="form-title">
         <legend>Search Candidates</legend>
        </div>
      </div>
      <div class="input-container">
        <div class="row">
          <span class="req-input" >
            <br><label>Search skills :</label>
            <input type="text" data-min-length="8" name="search" placeholder="Search skills">
          </span>
        </div>    
        <div class="row">
          <span class="req-input">
            <br><label>Select Experience :</label>
            <select name="exp1">
              <option value="">Select Experience</option> 
              <option value="0-1"> less than 1 yr</option> 
              <option value="1-2"> > 1 yr and < 2 yrs</option> 
              <option value="2-3"> >2 yrs and < 3 yrs</option>
              <option value="3-4"> >3 yrs and < 4 yrs</option>
              <option value="4-5"> >4 yrs and < 5 yrs</option>
              <option value="5-6"> >5 yrs and < 6 yrs</option>
              <option value="6-7"> >6 yrs and < 7 yrs</option>
              <option value="7-8"> >7 yrs and < 8 yrs</option>
              <option value="8-9"> >8 yrs and < 9 yrs</option>
              <option value="9-10"> >9 yrs and < 10 yrs</option>
              <option value="10-100"> more than 10 yrs</option>
          </select>
          </span>
        </div>
        <div class="row">
          <span class="req-input">
				<label>Basic / Graduation :</label>

				<select name="graduation">
					<option value="">Basic/Graduation</option>
					<option value="Gra21">10th (Higher Secondary)</option>
					<option value="Gra22">12th (Senior Secondary)</option>
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
					<option value="DbCourse_Code">DbCourse_Name</option>
					<option value="DIPLOMA">Dilpoma</option>
					<option value="Gra31">Fashion Design</option>
					<option value="Gra18">Graduation (Any)</option>
					<option value="Gra29">ITI</option>
					<option value="LLB">L.L.B</option>
					<option value="MBBS">M.B.B.S</option>
					<option value="Gra23">Mass Com.</option>
					<option value="NPG">Not Pursuing Graduation</option>
					<option value="Gra25">NTT</option>
					<option value="OTH">Others</option>
					<option value="Gra24">PGT</option>
					<option value="Gra26">PRT</option>

				</select>

				<br><label>Post Graduation :</label>

				<select name="postgraduation">
					<option value="">Post Graduation</option>
					<option value="CA">C.A</option>
					<option value="CS">C.S</option>
					<option value="DbCourse_Code">DbCourse_Name</option>
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
					<option value="OTH">Other</option>
					<option value="PGD">PG Diploma</option>
					<option value="Pg20">Post Graduation (Any)</option>
				</select>
          </span>
        </div>
        <div class="row submit-row">
          <button type="submit" class="btn btn-info">
      		<span class="glyphicon glyphicon-search"></span> Search
    	  </button>
        </div>
      </div>
    </div>
  </form>
</div>