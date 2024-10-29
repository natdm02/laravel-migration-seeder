<?php

namespace App\Http\Controllers;

use App\Models\Train;
use App\Models\Passenger;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index()
    {
        $today = Carbon::today()->format('Y-m-d');
        $trains = Train::whereDate('orario_partenza', '=', $today)
                ->where('cancellato', false)
                ->get();

                // dd($trains);

        $passengers = Passenger::all();

        return view('pages.home', compact('trains','passengers'));
    }

}
