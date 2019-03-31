<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Team extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'competence_center_id',
        'code',
        'name'
    ];

    /**
     * Get Employees assigned to current Team
     * (One-to-Many)
     */
    public function employees() {
        return $this->hasMany('App\Employee');
    }

    /**
     * Get Competence Center where Team is assigned to
     * (One-to-Many)
     */
    public function competenceCenter() {
        return $this->belongsTo('App\CompetenceCenter', 'competence_center_id', 'id');
    }

    /**
     * Get Projects assigned to current Team
     * (Many-to-Many)
     */
    public function projects() {
        return $this->belongsToMany('App\Project');
    }
}
