<div class="white-card">
  <form method="post" action="{{ route('searchjob') }}"> {{ csrf_field() }}
    <div>
        <div class="form-title">
          <h3>Search Jobs</h3>
        </div>
      <div>
          <span>
            <input type="text" data-min-length="8" name="search" placeholder="Search job using title, company name or skills ">
          </span>   
        <div>
            <select name="exp1">
              <option value="">Select Experience</option>
              <option>0 year</option> 
              <option>1 year</option> 
              <option>2 years</option> 
              <option>3 years</option>
              <option>4 years</option>
              <option>5 years</option>
              <option>6 years</option>
            </select>
          </span>
        </div>
        <div>
            <select name="sal">
              <option value="">Select Salary</option>
              <option value="10000"> less than 10000</option> 
              <option value="20000"> > 10000 and < 20000 </option> 
              <option value="30000"> >20000 and < 30000 </option>
              <option value="40000"> >30000 and < 40000 </option>
              <option value="50000"> >40000 and < 50000 </option>
              <option value="60000"> >50000 and < 60000 </option>
              <option value="70000"> >60000 and < 70000 </option>
              <option value="80000"> >70000 and < 80000 </option>
              <option value="90000"> >80000 and < 90000</option>
              <option value="100000"> >90000 and < 100000</option>
              <option value="200000"> >100000 and < 200000</option>
              <option value="200001"> more than 200000</option>
            </select>
          </span>
        </div>

         <div>
            <select name="loc">
              <option value="">Select Location</option>
              <option value="">State</option>
            <option value="an">Andaman Nicobar</option>
            <option value="and">Andhra Pradesh</option>
            <option value="ar">Arunachal Pradesh</option>
            <option value="as">Assam</option>
            <option value="ba">Banglore</option>
            <option value="bi">Bihar</option>
            <option value="ch">Chandigarah</option>
            <option value="che">Chennai</option>
            <option value="chh">Chhattisgarh</option>
            <option value="dad">Dadra Nagar Haveli</option>
            <option value="dam">Daman Diu</option>
            <option value="de">Delhi</option>
            <option value="go">Goa</option>
            <option value="gu">Gujrat</option>
            <option value="ha">Haryana</option>
            <option value="hi">Himachal Pradesh</option>
            <option value="jh">Jharkhand</option>
            <option value="kar">Karnataka</option>
            <option value="ker">Kerala</option>
            <option value="lak">Lakshadweep</option>
            <option value="luck">Lucknow</option>
            <option value="madh">Madhya Pradesh</option>
            <option value="maha">Maharashtra</option>
            <option value="mum">Mumbai</option>
            <option value="mani">Manipur</option>
            <option value="megh">Meghalaya</option>
            <option value="miz">Mizoram</option>
            <option value="naga">Nagaland</option>
            <option value="ori">Orissa</option>
            <option value="pond">Pondicherry</option>
            <option value="pun">Punjab</option>
            <option value="raj">Rajasthan</option>
            <option value="sik">Sikkim</option>
            <option value="tam">Tamilnadu</option>
            <option value="tri">Tripura</option>
            <option value="utt">Uttar Pradesh</option>
            <option value="ut">Uttaranchal</option>
            <option value="wes">West Bengal</option>
          </select>

          </span>
        </div>
        <div>
          <button type="submit" class="btn btn-block btn-info submit-form" align="center">Submit</button>
        </div>
      </div>
    </div>
  </form>
</div>