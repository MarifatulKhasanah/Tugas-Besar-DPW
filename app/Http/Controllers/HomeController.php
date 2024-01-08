<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class HomeController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        return view('frontend.homepage', compact('cars'));
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function detail($id)
    {   
        $car = Car::find($id);

        if (!$car) {
            // Handle case where car is not found
            abort(404);
        }

        return view('frontend.detail', compact('car'));
    }

    public function about()
    {
        return view('frontend.about');
    }
}
