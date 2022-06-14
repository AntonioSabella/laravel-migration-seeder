<?php

namespace App\Http\Controllers;

use App\Vacation;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $vacations = Vacation::all();
        //dd($vacations);
        return view('welcome', compact('vacations'));
    }
}
