<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\hasMany;

class UserPlans extends Model
{
    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'user_plans';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
    protected $casts = [
        'user_id' => 'integer',
        'currency_id' => 'integer',
        'next_user_plan_id' => 'integer',
        'financiation' => 'integer',
        'status_financiation' => 'integer',
        'requires_invoice' => 'integer',
        'calendar_id' => 'integer',
        'company_id' => 'integer',
        'cancel_employee' => 'integer',
        'force_renovation' => 'integer',
        'cost_center_id' => 'integer',
        'amount_confirm_canceled' => 'boolean',
        'credit_confirm_canceled' => 'boolean'
    ];

    const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';
}
