<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function goWelcome()
    {
        return view('system/welcome');
    }
}
