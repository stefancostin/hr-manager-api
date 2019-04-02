<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'code',
        'name',
        'description',
        'is_management'
    ];

    protected $attributes = [
        'is_management' => false
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    /**
     * Get Employees for current Role
     * (One-to-Many)
     */
    public function employees() {
        return $this->hasMany('App\Employee');
    }
}
