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

    public function detail()
    {   
        $cars = Car::all();

        return view('frontend.detail', compact('cars'));
    }

    public function about()
    {
        return view('frontend.about');
    }
}