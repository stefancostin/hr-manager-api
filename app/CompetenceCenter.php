<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompetenceCenter extends Model
{
    protected $fillable = [
        'code',
        'city',
    ];

    /**
     * Get Teams assigned to Competence Center
     * (One-to-Many)
     */
    public function teams() {
        return $this->hasMany('App\Team');
    }
}
