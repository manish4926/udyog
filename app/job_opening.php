<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class job_opening extends Model
{
    public function applicants()
    {
        return $this->hasMany('App\Applicant','job_id','job_id');
    }

    public function getApplicants($job_id)
    {
        return $this->applicants()->where('job_id' , $job_id)->first();
    }
}
