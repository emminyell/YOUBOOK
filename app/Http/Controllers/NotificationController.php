<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\Reservation;
use app\Models\User;


class NotificationController extends Controller
{
    public function show()
    {
                return view('notification');
    }
    public function index()
    {
        $user = session('user');

        $reservations = Reservation::with(['book', 'user'])
        ->where('id_user', $user->id)
        ->where('end_date', '>', now())
        ->orderBy('end_date')
        ->get();

        $today = Carbon::today();
        foreach ($reservations as $reservation) {
            $reservation->remainingDays = $today->diffInDays($reservation->end_date);
        }

        return view('notification', compact('reservations','user'));
    }
}
