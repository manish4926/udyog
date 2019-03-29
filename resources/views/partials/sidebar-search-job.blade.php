<div class="white-card">
<form method="post" action="{{ route('searchjob') }}"> {{ csrf_field() }}
            <div id="jobsearch-form" class="form-container" data-form-container>
              <div class="row">
                <div class="form-title">
                  <span>Search JOBS</span>
                </div>
              </div>
            <div class="input-container">
                <div class="row">
                  <span class="req-input" >
                    <span class="input-status" data-toggle="tooltip" data-placement="top" title="Input job title, company name or skills "> 
                    </span>
                    <input type="text" data-min-length="8" name="search" placeholder="Search job using title, company name or skills ">
                  </span>
                </div>    
            <div class="row">
              <span class="req-input">
                <span class="input-status" data-toggle="tooltip" data-placement="top" title="Please Input Experience"> </span>
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
            <div class="row">
              <span class="req-input">
                <select class="input-status" data-toggle="tooltip" data-placement="top" title="g">
                    <option>200000</option>
                    <option>300000</option>
                  </select>
              </span>
            </div>
            <div class="row submit-row">
              <button type="submit" class="btn btn-block submit-form">Submit</button>
            </div>
          </div>
        </div>
      </form>
</div>