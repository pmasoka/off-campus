<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SuperAdmin\University;


class WelcomeController extends Controller
{
    public function index()
    {
        $universities = University::all();
        return view('welcome', compact('universities'));
    }

}
