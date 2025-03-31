<?php

namespace App\Http\Controllers\Api;

use App\Models\Plane;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PlaneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $planes = Plane::all();
        return response()->json($planes, 200);
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
        $plane = Plane::create([
            'registration' => $request->registration,
            'imgplane' => $request->imgplane,
            'seats' => $request->seats,
        ]);

        //$plane->save();
        return response()->json($plane, 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $plane = Plane::find($id);
        return response()->json($plane, 200);
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
        $plane = Plane::find($id);

        $plane->update([
            'registration' => $request->registration,
            'imgplane' => $request->imgplane,
            'seats' => $request->seats,
        ]);

        //$plane->save();
        return response()->json($plane, 200);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $user = Auth::user();
        $plane = Plane::find($id);

        if($user->isAdmin){
            $plane->delete();
            return response()->json(['error' => 'the plane has deleted'], 200);

        }

        if(!$user->isAdmin)
        {
            return response()->json(['error' => 'Unauthorized to delete a Plane, you are not admin'], 401);
        }




    }


}
