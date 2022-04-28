<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;

class TrainController extends Controller
{
    public function index() {
        $data = Train::all();
        return view('trains.index', compact('data'));
    }
}
