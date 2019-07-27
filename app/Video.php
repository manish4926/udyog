<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table='videos';
    protected $primaryKey='id';
    protected $fillable=['title','description','category','tags','name','size','slug','duration'];
}
