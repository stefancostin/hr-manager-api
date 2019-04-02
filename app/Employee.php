<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'role_id',
        'team_id',
        'first_name',
        'last_name',
        'email',
        'hiring_date'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    /**
     * Get Computer that belongs to current Employee
     * (One-to-One)
     */
    public function computer() {
        return $this->hasOne('App\Computer');
    }

    /**
     * Get Role that belongs to current Employee
     * (One-to-Many)
     */
    public function role() {
        return $this->belongsTo('App\Role', 'role_id', 'id');
    }

    /**
     * Get Team that belongs to current Employee
     * (One-to-Many)
     */
    public function team() {
        return $this->belongsTo('App\Team', 'team_id', 'id');
    }
}
