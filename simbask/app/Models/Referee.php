<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Referee extends Model
{
    protected $fillable = [
        'name',
        'age',
        'experience_years',
        'league_id'
    ];
    public function league()
    {
        return $this->belongsTo(League::class);
    }
}
