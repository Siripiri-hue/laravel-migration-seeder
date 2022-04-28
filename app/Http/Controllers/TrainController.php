<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;
use Illuminate\Support\Carbon;

class TrainController extends Controller
{
    public function index() {
        $now = now();
        $data = Train::whereDate('departure_time', Carbon::today())->get();
        return view('trains.index', compact('data'));
    }
}
