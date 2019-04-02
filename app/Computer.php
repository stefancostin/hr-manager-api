<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Computer extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'employee_id',
        'code',
        'operating_system',
        'cpu',
        'ram',
        'hdd'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    /**
     * Get Employee that owns current Computer
     * (One-to-One)
     */
    public function Employee() {
        return $this->belongsTo('App\Employee', 'employee_id', 'id');
    }
}
