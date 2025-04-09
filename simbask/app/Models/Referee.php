<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Referee extends Model
{
    protected $fillable = [
        'name',
        'age',
        'experience_years'
    ];
    
    public function games()
    {
        return $this->hasMany(Game::class);
    }
}
