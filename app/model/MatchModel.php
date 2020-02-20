<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class MatchModel extends Model
{
    protected $table = 'match';
    protected $dateFormat = 'U';
    protected $primaryKey = 'match_id';
    public $timestamps = false;
    protected $guarded = [];
}
