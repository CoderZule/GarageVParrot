<?php

namespace App\Http\Controllers;

use App\Models\OpeningHours;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Service;
use App\Models\User;

class HomeController extends Controller
{

    public function index()
    {
        $services = Service::all();
        $users = User::all();
        $openingHours = OpeningHours::orderBy('day_id')->get();

        return view('home', compact('services', 'users', 'openingHours'));
    }
}
