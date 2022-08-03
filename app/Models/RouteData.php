<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RouteData extends Model
{
    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'route_data';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    protected $hidden = ['updated_at', 'created_at'];
    protected $casts = [
        'route_circular' => 'integer',
        'thu' => 'integer',
        'wed' => 'integer',
        'route_id' => 'integer',
        'tue' => 'integer',
        'mon' => 'integer',
        'calendar_id' => 'integer',
        'fri' => 'integer',
        'sat' => 'integer',
        'sun' => 'integer'
    ];
}
