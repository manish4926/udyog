<div class="white-card">
  <form method="post" action="{{ route('searchjob') }}"> {{ csrf_field() }}
    <div>
        <div class="form-title">
          <span>Search JOBS</span>
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
              <option value="0-1"> less than 10000</option> 
              <option value="1-2"> > 10000 and < 20000 </option> 
              <option value="2-3"> >20000 and < 30000 </option>
              <option value="3-4"> >30000 and < 40000 </option>
              <option value="4-5"> >40000 and < 50000 </option>
              <option value="5-6"> >50000 and < 60000 </option>
              <option value="6-7"> >60000 and < 70000 </option>
              <option value="7-8"> >70000 and < 80000 </option>
              <option value="8-9"> >80000 and < 90000</option>
              <option value="9-10"> >90000 and < 100000</option>
               <option value="9-10"> >100000 and < 200000</option>
              <option value="10-100"> more than 200000</option>
            </select>
          </span>
        </div>

         <div>
            <select name="loc">
              <option value="">Select Location</option>
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
            <option value="luck">Lucknow</option>
            <option value="mp">Madhya Pradesh</option>
            <option value="mh">Maharashtra</option>
            <option value="mum">Mumbai</option>
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

          </span>
        </div>
        <div>
          <button type="submit" class="btn btn-block submit-form">Submit</button>
        </div>
      </div>
    </div>
  </form>
</div>