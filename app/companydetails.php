<?php

namespace App;

use Illuminate\Dadel;

class companydetails extends Model
{
    //
        protected $fillable = [
        'cid','companyname','cdirector', 'companyaddress', 'password','companyemail',
    ];
        protected $hidden = [
        'password',
    ];


}
