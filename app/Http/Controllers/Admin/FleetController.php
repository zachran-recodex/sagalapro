<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\FleetStoreRequest;
use App\Http\Requests\Admin\FleetUpdateRequest;
use App\Models\Fleet;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class FleetController extends Controller
{
    public function index()
    {
        $fleets = Fleet::orderByDesc('id')->paginate(10);

        return view('admin.fleets.index', compact('fleets'));
    }

    public function create()
    {
        return view('admin.fleets.create');
    }

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

        return redirect()->route('admin.fleets.index')->with('toast', ['type' => 'success', 'message' => 'Fleet created successfully.']);
    }

    public function edit(Fleet $fleet)
    {
        return view('admin.fleets.edit', compact('fleet'));
    }

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

        return redirect()->route('admin.fleets.index')->with('toast', ['type' => 'success', 'message' => 'Fleet updated successfully.']);
    }

    public function destroy(Fleet $fleet)
    {
        // Delete image from storage if it exists
        if ($fleet->image) {
            Storage::disk('public')->delete($fleet->image);
        }

        $fleet->delete();

        return redirect()->route('admin.fleets.index')->with('toast', ['type' => 'success', 'message' => 'Fleet deleted successfully.']);
    }
}
