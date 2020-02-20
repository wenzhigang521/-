<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Adminmodel extends Model
{
    protected $table = 'admin';
    protected $dateFormat = 'U';
    protected $primaryKey = 'admin_id';
    public $timestamps = false;
    protected $guarded = [];
}
