<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;
use Carbon\Carbon;

class TrainController extends Controller
{
    public function index()
    {
        $today = Carbon::today();
        $trains = Train::whereDate('data_di_partenza', $today)->get();
        // $trains = Train::all();

        return view('trains', compact('trains'));
    }
}
