<?php

// app/Http/Controllers/HomeController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::all(); // Retrieve all users
        $userCount = User::count(); // Count the number of users

        return view('home', compact('users', 'userCount'));
    }
}
