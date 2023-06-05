<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Service;

class HomeController extends Controller
{

    public function index()
    {
        $services = Service::all();
        return view('home', compact('services'));
    }
}
