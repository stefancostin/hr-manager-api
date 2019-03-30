<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'code',
        'name'
    ];

    /**
     * Get Employees for current Role
     * (One-to-Many)
     */
    public function employees() {
        return $this->hasMany('App\Employee');
    }
}
