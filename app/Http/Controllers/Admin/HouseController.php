<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\HouseStoreRequest;
use App\Http\Requests\Admin\UpdateHouseRequest;
use App\Models\Admin\House;
use App\Models\SuperAdmin\Location;
use App\Models\SuperAdmin\University;

class HouseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $houses = House::all();

        return view('admin.houses.index', compact('houses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $universities = University::all();
        $locations = Location::all();

        return view('admin.houses.create', compact('universities', 'locations'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(HouseStoreRequest $request)
    {

        $image = $request->file('image')->store('public/houses');
        $house = House::create([
            'university_id' => $request->university_id,
            'image' => $image,
            'address' => $request->address,
            'city' => $request->city,
            'country' => $request->country,
            'location_id' => $request->location_id,
            't_of_accommodation' => $request->t_of_accommodation,
            'rental_rate' => $request->rental_rate,
            'occ_date' => $request->occ_date,
            'no_of_washrooms' => $request->no_of_washrooms,
            'l_occupied' => $request->l_occupied,
            'distance' => $request->distance,
            'w_time' => $request->w_time,
            'c_time' => $request->c_time,
            'd_time' => $request->d_time,
            'description' => $request->description,
            'utilities' => $request->utilities,
            'amenities' => $request->amenities,
            'status' => $request->status,
            'student_number' => $request->student_number,

        ]);

        return redirect()->route('admin.houses.index')->with('success', 'House created successfully.');
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
    public function edit(House $house)
    {
        $universities = University::all();
        $locations = Location::all();

        return view('admin.houses.edit', [
            'house' => $house,
            'universities' => $universities,
            'locations' => $locations,

        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHouseRequest $request, House $house)
    {

        $house->update(
            $request->safe()
                ->collect()
                ->filter()
                ->all()
        );

        return redirect()->route('admin.houses.index')->with('success', 'House updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(House $house)
    {
        $house->delete();

        return redirect()->route('admin.houses.index')->with('success', 'House deleted successfully.');

    }
}
