<?php

namespace App\Http\Resources\v1;

use App\Models\CalendarDaysDisabled;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CalendarDaysDisabledCollection extends JsonResource
{

    /**
     * The resource that this resource collects.
     *
     * @var string
     */
    public $collects = CalendarDaysDisabled::class;

    /**
     * Transform the resource collection into an array.
     *
     * @param Request $request
     * @return array
     */
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'day' => $this->day,
            'calendar'=>optional($this->calendar)->name,
        ];
    }
}
