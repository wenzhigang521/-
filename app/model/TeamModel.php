<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class TeamModel extends Model
{
    protected $table = 'team';
    protected $dateFormat = 'U';
    protected $primaryKey = 'team_id';
    public $timestamps = false;
    protected $guarded = [];
}
