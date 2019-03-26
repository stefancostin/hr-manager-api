<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
    protected $fillable = [
        'user_id',
        'code',
        'operating_system',
        'cpu',
        'ram',
        'hdd'
    ];

    /**
     * Get User that owns current Computer
     * (One-to-One)
     */
    public function user() {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
