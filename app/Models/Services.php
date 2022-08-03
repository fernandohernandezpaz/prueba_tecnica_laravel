<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    /*
     |--------------------------------------------------------------------------
     | GLOBAL VARIABLES
     |--------------------------------------------------------------------------
     */

    protected $table = 'services';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';
}
