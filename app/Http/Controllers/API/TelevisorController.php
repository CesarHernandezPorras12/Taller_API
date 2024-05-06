<?php

namespace App\Http\Controllers\API;

use App\Models\Televisor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TelevisorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $televisores = Televisor::all();
        return response()->json($televisores, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return response()->json(Televisor::create($request->all()), 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Televisor $televisor)
    {
        return response()->json($televisor, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Televisor $televisor)
    {
        return response()->json($televisor->update($request->all()), 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Televisor $televisor)
    {
        return response()->json($televisor->delete(), 204);
    }
}
