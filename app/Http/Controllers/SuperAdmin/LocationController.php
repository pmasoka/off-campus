<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SuperAdmin\LocationStoreRequest;
use App\Models\SuperAdmin\Location;
use App\Models\SuperAdmin\University;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $locations = Location::all();
        return view('superadmin.locations.index', compact('locations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $universities = University::all();
        return view('superadmin.locations.create',  compact('universities'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LocationStoreRequest $request)
    {

        $location = Location::create([
            'name' => $request->name
        ]);

        if ($request->has('universities')) {
            $location->universities()->attach($request->universities);
        }

        return to_route('superadmin.locations.index')->with('success', 'Location created successfully.');
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
    public function edit(Location $location)
    {
        $universities = University::all();
        return view('superadmin.locations.edit', compact('location', 'universities'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Location $location)
    {
        $request->validate([
            'name' => 'required'
        ]);
        
       

        $location->update([
            'name' => $request->name
        ]);

        if ($request->has('universities')) {
            $location->universities()->sync($request->universities);
        }
        return to_route('superadmin.locations.index')->with('success', 'Location updated successfully.');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Location $location)
    {
        $location->universities()->detach();
        $location->delete();
        return to_route('superadmin.locations.index')->with('danger', 'Location deleted successfully.');
    }
}
