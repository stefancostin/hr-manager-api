<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'code',
        'name'
    ];

    /**
     * Get Teams assigned to current Project
     * (Many-to-Many)
     */
    public function teams() {
        return $this->belongsToMany('App\Team');
    }
}
