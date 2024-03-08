<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\SuperAdmin\University;
use Illuminate\Http\Request;

class UniversityController extends Controller
{
    public function index()
    {
        $universities = University::all();
        return view('universities.index', compact('universities'));
    }

    public function show(University $university)
    {
        return view('universities.show', compact('university'));
    }

    public function showtable(University $university)
    {
        return view('universities.table', compact('university'));
    }
}
