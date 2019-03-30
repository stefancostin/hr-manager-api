<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CompetenceCenter extends Model
{
    use SoftDeletes;

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
