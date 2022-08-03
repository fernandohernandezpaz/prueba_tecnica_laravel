<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CalendarDaysDisabled extends Model
{
    /*
     |--------------------------------------------------------------------------
     | GLOBAL VARIABLES
     |--------------------------------------------------------------------------
     */

    protected $table = 'calendar_days_disableds';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    protected $hidden = ['updated_at', 'created_at'];
    protected $casts = [
        'enabled' => 'boolean'
    ];
}
