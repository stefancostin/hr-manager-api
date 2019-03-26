<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class ProjectTeam extends Pivot
{
    // protected $table = "project_team";

    protected $fillable = [
        'project_id',
        'team_id'
    ];

}
