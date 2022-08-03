<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservations extends Model
{
    /*
     |--------------------------------------------------------------------------
     | GLOBAL VARIABLES
     |--------------------------------------------------------------------------
     */

    protected $table = 'reservations';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    protected $hidden = ['updated_at', 'created_at'];
    protected $casts = [
        'user_plan_id'=>'integer',
        'route_id'=>'integer',
        'track_id'=>'integer',
        'route_stop_origin_id'=>'integer',
        'route_stop_destination_id'=>'integer',
    ];
}
