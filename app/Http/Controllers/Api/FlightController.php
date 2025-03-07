<?php

namespace App\Http\Controllers\Api;

use App\Models\Flight;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FlightController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $flights = Flight::all();
        return response()->json($flights, 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $flight = Flight::create([
            'airportDeparture' => $request->airportDeparture,
            'airportArrival' => $request->airportArrival,
            'date' => $request->date,
            'plane_id' => $request->plane_id,
        ]);

        //$flight->save();
        return response()->json($flight, 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $flight = Flight::find($id);
        return response()->json($flight, 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $flight = Flight::find($id);

        $flight->update([
            'airportDeparture' => $request->airportDeparture,
            'airportArrival' => $request->airportArrival,
            'date' => $request->date,
            'plane_id' => $request->plane_id,

        ]);

        //$plane->save();
        return response()->json($flight, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $plane = Flight::find($id);
        $plane->delete();
    }
}
