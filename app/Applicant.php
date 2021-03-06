<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    protected $table = 'applicants';

    public function users()
    {
        return $this->hasOne('App\User','id','user_id');
    }

    public function job()
    {
        return $this->hasMany('App\job_opening','job_id','job_id');
    }

    public function getUser()
    {
        return $this->users()->first();
    }

    public function getJob()
    {
        return $this->job()->first();
    }

}
