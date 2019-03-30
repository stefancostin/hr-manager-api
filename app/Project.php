<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use SoftDeletes;

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
