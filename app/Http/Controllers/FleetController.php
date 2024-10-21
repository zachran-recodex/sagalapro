<?php

namespace App\Http\Controllers;

use App\Models\Fleet;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreFleetRequest;
use App\Http\Requests\UpdateFleetRequest;

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
    public function store(StoreFleetRequest $request)
    {
        $fleet = new Fleet();

        // Update fields with request data
        $fleet->title = $request->title;
        $fleet->slug = Str::slug($request->title);
        $fleet->description = $request->description;
        $fleet->status = $request->status;

        // Handle image upload
        if ($request->hasFile('image')) {
            $fleet->image = $request->file('image')->store('fleets', 'public');
        }

        // Upload GLTF file
        if ($request->hasFile('gltf')) {
            $fleet->gltf = $request->file('gltf')->store('fleets/gltf', 'public');
        }

        $fleet->save();

        return redirect()->route('admin.fleets.index')->with('success', 'fleet created successfully');
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
    public function update(UpdateFleetRequest $request, Fleet $fleet)
    {
        // Update fields with request data
        $fleet->title = $request->title;
        $fleet->slug = Str::slug($request->title);
        $fleet->description = $request->description;
        $fleet->status = $request->status;

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($fleet->image) {
                Storage::disk('public')->delete($fleet->image);
            }
            $fleet->image = $request->file('image')->store('fleets', 'public');
        }

        // Update GLTF file
        if ($request->hasFile('gltf')) {
            if ($fleet->gltf) {
                Storage::disk('public')->delete($fleet->gltf);
            }
            $fleet->gltf = $request->file('gltf')->store('fleets/gltf', 'public');
        }

        $fleet->save();

        return redirect()->route('admin.fleets.index')->with('success', 'fleet updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fleet $fleet)
    {
        // Delete images from storage if they exist
        if ($fleet->image) {
            Storage::disk('public')->delete($fleet->image);
        }

        if ($fleet->gltf) {
            Storage::disk('public')->delete($fleet->gltf);
        }

        $fleet->delete();

        return redirect()->route('admin.fleets.index')->with('success', 'fleet deleted successfully');
    }
}
