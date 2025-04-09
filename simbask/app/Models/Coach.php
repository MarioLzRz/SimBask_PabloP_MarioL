<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    protected $fillable = [
        'dni',
        'name',
        'age',
        'experience_years',
        'team_id'
    ];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
