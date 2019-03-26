<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'role_id',
        'team_id',
        'first_name',
        'last_name',
        'email',
        'hiring_date'
    ];

    /**
     * Get Computer that belongs to current User
     * (One-to-One)
     */
    public function computer() {
        return $this->hasOne('App\Computer');
    }

    /**
     * Get Role that belongs to current User
     * (One-to-Many)
     */
    public function role() {
        return $this->belongsTo('App\User', 'role_id', 'id');
    }

    /**
     * Get Team that belongs to current User
     * (One-to-Many)
     */
    public function team() {
        return $this->belongsTo('App\Team', 'team_id', 'id');
    }
}
