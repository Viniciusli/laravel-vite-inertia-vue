<?php

namespace App\Http\Controllers;

use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        $users = User::all(['id', 'name', 'email'])->toArray();
        return inertia('home', [
            'users' => $users
        ]);
    }

    public function about()
    {
        return inertia('about');
    }
}
