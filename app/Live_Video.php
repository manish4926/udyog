<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Live_Video extends Model
{
    protected $table='livevideos';
    protected $primaryKey='id';
    protected $fillable=['name','description','order'];
}
