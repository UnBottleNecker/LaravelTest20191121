<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;

class ReservationController extends Controller
{
    public function index() {
        $reservations = Reservation::all();
        return view('reservation.index', ['reservations' => $reservations]);
    }

    public function create() {
        return view('reservation.create');
    }

    public function store(Request $request) {
        $reservation = new Reservation;
        $reservation->datetime = $request->datetime;
        $reservation->family = $request->family;
        $reservation->member_a = $request->member_a;
        $reservation->member_b = $request->member_b;
        $reservation->member_c = $request->member_c;
        $reservation->member_d = $request->member_d;
        $reservation->name = $request->name;
        $reservation->tel = $request->tel;
        $reservation->mail = $request->mail;
        $reservation->etc = $request->etc;
        $reservation->save();
        return view('reservation.store');
    }

    public function edit(Request $request, $id) {
        $reservation = Reservation::find($id);
        return view('reservation.edit', ['reservation' => $reservation]);
    }

    public function update(Request $request) {
        $reservation = Reservation::find($request->id);
        $reservation->datetime = $request->datetime;
        $reservation->family = $request->family;
        $reservation->member_a = $request->member_a;
        $reservation->member_b = $request->member_b;
        $reservation->member_c = $request->member_c;
        $reservation->member_d = $request->member_d;
        $reservation->name = $request->name;
        $reservation->tel = $request->tel;
        $reservation->mail = $request->mail;
        $reservation->etc = $request->etc;
        $reservation->save();
        return view('reservation.update');
    }

    public function show(Request $request, $id) {
       $reservation = Reservation::find($id);
       return view('reservation.show', ['reservation' => $reservation]);
    }

    public function delete(Request $request) {
        Reservation::destroy($request->id);
        return view('reservation.delete');
    }
}
