<?php

namespace App\Rules;

use App\Models\CalendarDaysDisabled;
use App\Models\RouteData;
use Carbon\Carbon;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Str;

class ValidRangeReservationDateRule implements Rule
{
    private $routeId;
    private $days = [
        'monday' => 'mon',
        'tuesday' => 'tue',
        'wednesday' => 'wed',
        'thursday' => 'thu',
        'friday' => 'fri',
        'saturday' => 'sat',
        'sunday' => 'sun',
    ];

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct(int $routeId)
    {
        $this->routeId = $routeId;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param string $attribute
     * @param mixed $value
     * @return bool
     */
    public function passes($attribute, $value): bool
    {
        $nameDay = Str::lower(Carbon::parse($value)->dayName);
        $workDay = RouteData::where('route_id', $this->routeId)->first();

        if ($workDay) {
            $onDay = $workDay[$this->days[$nameDay]];
            if ($onDay === 0) {
                return true;
            }
        }

        $disabledDay = CalendarDaysDisabled::where('day', $value)->EnablesDays()->exists();
        if ($disabledDay) {
            return true;
        }

        return false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message(): string
    {
        return 'The validation error message.';
    }
}
