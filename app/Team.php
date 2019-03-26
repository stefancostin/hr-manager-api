<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'competence_center_id',
        'code ',
        'name'
    ];

    /**
     * Get Users assigned to current Team
     * (One-to-Many)
     */
    public function users() {
        return $this->hasMany('App\User');
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
