<?php

namespace App\Http\Controllers;

use App\Models\OpeningHours;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Service;
use App\Models\User;
use App\Models\Vehicle;

class HomeController extends Controller
{

    public function index()
    {
        $services = Service::all();
        $users = User::all();
        $openingHours = OpeningHours::orderBy('day_id')->get();
        $vehicles = Vehicle::all();

        return view('home.home', compact('services', 'users', 'openingHours', 'vehicles'));
    }
}
