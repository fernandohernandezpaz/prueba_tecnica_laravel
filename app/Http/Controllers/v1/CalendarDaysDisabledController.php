<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\v1\CalendarDaysDisabledCollection;
use App\Models\CalendarDaysDisabled;
use Illuminate\Http\JsonResponse;

class CalendarDaysDisabledController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        return response()->json(
            CalendarDaysDisabledCollection::collection(
                CalendarDaysDisabled::query()
                    ->enablesDays()
                    ->with('calendar')
                    ->get()
            )
        );
    }
}
