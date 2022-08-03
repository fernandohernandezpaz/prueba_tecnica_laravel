<?php

namespace App\Http\Requests\v1\Reservations;

use App\Rules\ValidRangeReservationDateRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        $routeId = $this->input('route_id');
        $reservationStartRules = [
            'required', 'integer', new ValidRangeReservationDateRule($routeId)
        ];
        $reservationEndRules = [
            'required', 'integer', new ValidRangeReservationDateRule($routeId)
        ];
        return [
            'track_id' => 'nullable|integer',
            'user_plan_id' => 'required|integer',
            'route_id' => 'required|integer',
            'reservation_start' => $reservationStartRules,
            'reservation_end' => $reservationEndRules,
            'route_stop_origin_id' => 'required|integer',
            'route_stop_destination_id' => 'required|integer',
        ];
    }
}
