<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    /*
     |--------------------------------------------------------------------------
     | GLOBAL VARIABLES
     |--------------------------------------------------------------------------
     */

    protected $table = 'calendars';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    protected $hidden = ['updated_at', 'created_at'];
}
