<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Cars;

class Dashboard extends Controller
{
    public function index()
    {

        $cars = Cars::all();

        return view('pages.home')
            ->with('cars', $cars);

    }

    public function explore()
    {

        $cars = Cars::all();

        return view('pages.cars')
            ->with('cars', $cars);

    }
}
