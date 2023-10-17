<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboard(Request $request)
    {
        $sort = $request->input('sort');

        if ($sort === 'custom') {
            $reservations = Reservation::orderBy('date')->orderBy('start_time')->get();
        } else {
            $reservations = Reservation::all();
        }
    
        return view('dashboard', compact('reservations'));
    
    }
}
