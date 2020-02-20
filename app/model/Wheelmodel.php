<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Wheelmodel extends Model
{
    protected $table = 'wheel';
    protected $dateFormat = 'U';
    protected $primaryKey = 'wheel_id';
    public $timestamps = false;
    protected $guarded = [];
}
