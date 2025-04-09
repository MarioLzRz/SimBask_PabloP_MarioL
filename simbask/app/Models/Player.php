<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = [
        'name',
        'position',
        'number',
        'height',
        'weight',
        'birthdate',
        'team_id'
    ];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
