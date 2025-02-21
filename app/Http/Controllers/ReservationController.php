<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        return view('reservations.index', ['reservations' => Reservation::all()]);
    }
    public function create()
    {
        return view('reservations.create');
    }
    public function store(Request $request)
    {
        Reservation::create($request->all());
        return redirect()->route('reservations.index');
    }

    public function update(Request $request, Reservation $reservation)
    {
        $reservation->update($request->all());
        return redirect()->route('reservations.index');
    }
    public function destroy(Reservation $reservation)
    {
        $reservation->delete();
        return redirect()->route('reservations.index');
    }
}
