<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyDetail extends Model
{
    protected $table = 'companydetails';

    public function users()
    {
        return $this->hasOne('App\User','id','user_id');
    }

    public function directory()
    {
        return $this->hasOne('App\Directory','c_id','company_id');
    }


    public function getUser()
    {
        return $this->users()->first();
    }

    public function getDirectory()
    {
        return $this->directory()->first();
    }
}
