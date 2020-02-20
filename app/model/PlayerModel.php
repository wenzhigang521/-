<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class PlayerModel extends Model
{
    protected $table = 'player';
    protected $dateFormat = 'U';
    protected $primaryKey = 'player_id';
    public $timestamps = false;
    protected $guarded = [];
}
