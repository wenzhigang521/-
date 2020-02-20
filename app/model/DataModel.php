<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class DataModel extends Model
{
    protected $table = 'data';
    protected $dateFormat = 'U';
    protected $primaryKey = 'data_id';
    public $timestamps = false;
    protected $guarded = [];
}
