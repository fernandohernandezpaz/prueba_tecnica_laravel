<?php

namespace App\Http\Controllers\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\v1\Reservations\StoreRequest;
use App\Http\Resources\v1\ReservationCollection;
use App\Models\Reservations;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\JsonResponse;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {
        $user = auth()->user();
        $myReservations = Reservations::query()
            ->whereHas('userPlans', function (Builder $q) use ($user) {
                $q->where('user_id', $user->id);
            })->get();
        return response()->json(ReservationCollection::collection(
            $myReservations
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return JsonResponse
     */
    public function store(StoreRequest $request): JsonResponse
    {
        Reservations::create($request->only(
            'route_id',
            'user_plan_id',
            'route_stop_origin_id',
            'route_stop_destination_id',
            'reservation_start',
            'reservation_end'
        ));
        return response()->status(201)->json();
    }

}
