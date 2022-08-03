<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    /*
   |--------------------------------------------------------------------------
   | QUERY SCOPES
   |--------------------------------------------------------------------------
   */
    /**
     * Scope a query to only include popular users.
     *
     * @param Builder $query
     * @param bool $enabled
     * @return Builder
     */
    public function scopeEnablesDays(Builder $query, bool $enabled = true): Builder
    {
        return $query->where('enabled', $enabled);
    }

    /*
      |--------------------------------------------------------------------------
      | RELATIONSHIPS
      |--------------------------------------------------------------------------
      */
    public function calendar(): BelongsTo
    {
        return $this->belongsTo(Calendar::class, 'calendar_id');
    }
}
