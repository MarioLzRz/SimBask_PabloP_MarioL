<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'dni',
        'name',
        'abbreviation',
        'picture',
        'founded_year',
        'stadium_id',
        'league_id'
    ];

    public function stadium()
    {
        return $this->hasOne(Stadium::class);
    }
    public function league()
    {
        return $this->belongsTo(League::class);
    }
}
