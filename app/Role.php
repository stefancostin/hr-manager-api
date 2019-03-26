<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'code',
        'name'
    ];

    /**
     * Get Users for current Role
     * (One-to-Many)
     */
    public function users() {
        return $this->hasMany('App\User');
    }
}
