<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Http\Requests\StoreCarRequest;
use App\Http\Requests\UpdateCarRequest;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::paginate(10);
        return view('cars.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCarRequest $request)
    {
        $validatedData = $request->validated();
        // dd($validatedData);
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo')->store('photos', 'public');
            $validatedData['photo'] = $photo;
        }

        Car::create($validatedData);
        return redirect()->route('cars.index')->with('success','Car added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Car $car)
    {
        return view('cars.edit', compact('car'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCarRequest $request, Car $car)
    {
        $validatedData = $request->validated();
        // dd($validatedData);
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo')->store('photos', 'public');
            $validatedData['photo'] = $photo;
        }

        $car->update($validatedData);
        return redirect()->route('cars.index')->with('sucess', 'Car updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        $car->delete();
        return redirect()->back()->with('sucess', 'Car deleted successfully!');
    }
    
}
