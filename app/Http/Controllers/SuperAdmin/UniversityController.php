<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SuperAdmin\UniversityStoreRequest;
use App\Models\SuperAdmin\University;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UniversityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $universities = University::all();
        return view('superadmin.universities.index', compact('universities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('superadmin.universities.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UniversityStoreRequest $request)
    {
        $image = $request->file('image')->store('public/universities');

        University::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $image
        ]);

        return to_route('superadmin.universities.index')->with('success', 'University created successfully.');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(University $university)
    {
        return view('superadmin.universities.edit', compact('university'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, University $university)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);
        $image = $university->image;
        if ($request->hasFile('image')) {
            Storage::delete($university->image);
            $image = $request->file('image')->store('public/universities');
        }

        $university->update([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $image
        ]);
        return to_route('superadmin.universities.index')->with('success', 'University updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(University $university)
    {
        Storage::delete($university->image);
        $university->locations()->detach();
        $university->delete();

        return to_route('superadmin.universities.index')->with('danger', 'University deleted successfully.');
    }
}
