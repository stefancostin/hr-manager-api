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

    protected $hidden = [
        'updated_at',
        'deleted_at'
    ];

    protected $cascadeDeletes = [
        'incidents',
    ];

    /**
     * Get Teams assigned to current Project
     * (Many-to-Many)
     */
    public function teams() {
        return $this->belongsToMany('App\Team');
    }

    /**
     * Get Incidents assigned to current Project
     * (Many-to-Many)
     */
    public function incidents() {
        return $this->hasMany('App\Incident');
    }
}
