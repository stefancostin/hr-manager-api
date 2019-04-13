<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Incident extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'project_id',
        'employee_id',
        'code',
        'subject',
        'description',
        'is_solved'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    /**
     * Get Project that the current Incident is assigned to
     * (One-to-Many)
     */
    public function project() {
        return $this->belongsTo('App\Project', 'project_id', 'id');
    }

    /**
     * Get Employee that is assigned to current Incident
     * (One-to-Many)
     */
    public function employee() {
        return $this->belongsTo('App\Employee', 'employee_id', 'id');
    }
}
