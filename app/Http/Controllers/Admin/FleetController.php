<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FleetStoreRequest;
use App\Http\Requests\FleetUpdateRequest;
use App\Models\Fleet;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class FleetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fleets = Fleet::orderBy('id')->paginate(10);

        return view('admin.fleets.index', compact('fleets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.fleets.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FleetStoreRequest $request)
    {
        $fleet = new Fleet();

        // Update fields with request data
        $fleet->title = $request->title;
        $fleet->slug = Str::slug($request->title);
        $fleet->description = $request->description;
        $fleet->status = true;
        $fleet->gltf = $request->gltf;

        // New fields
        $fleet->practice_range = $request->practice_range;
        $fleet->cruise_speed = $request->cruise_speed;
        $fleet->maximum_speed = $request->maximum_speed;
        $fleet->normal_takeoff_weight = $request->normal_takeoff_weight;
        $fleet->max_takeoff_weight = $request->max_takeoff_weight;

        // Handle image upload
        if ($request->hasFile('image')) {
            $fleet->image = $request->file('image')->store('fleets', 'public');
        }

        $fleet->save();

        return redirect()->route('admin.fleets.index')->with('success', 'Fleet created successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fleet $fleet)
    {
        return view('admin.fleets.edit', compact('fleet'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FleetUpdateRequest $request, Fleet $fleet)
    {
        // Update fields with request data
        $fleet->title = $request->title;
        $fleet->slug = Str::slug($request->title);
        $fleet->description = $request->description;
        $fleet->status = $request->boolean('status', true);
        $fleet->gltf = $request->gltf;

        // New fields
        $fleet->practice_range = $request->practice_range;
        $fleet->cruise_speed = $request->cruise_speed;
        $fleet->maximum_speed = $request->maximum_speed;
        $fleet->normal_takeoff_weight = $request->normal_takeoff_weight;
        $fleet->max_takeoff_weight = $request->max_takeoff_weight;

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($fleet->image) {
                Storage::disk('public')->delete($fleet->image);
            }
            $fleet->image = $request->file('image')->store('fleets', 'public');
        }

        $fleet->save();

        return redirect()->route('admin.fleets.index')->with('success', 'Fleet updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fleet $fleet)
    {
        // Delete image from storage if it exists
        if ($fleet->image) {
            Storage::disk('public')->delete($fleet->image);
        }

        $fleet->delete();

        return redirect()->route('admin.fleets.index')->with('success', 'Fleet deleted successfully');
    }
}
