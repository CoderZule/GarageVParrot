<?php

namespace App\Http\Controllers;

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
        return view('home', compact('services', 'users'));
    }
}
