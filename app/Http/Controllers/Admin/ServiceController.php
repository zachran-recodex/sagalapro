<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceStoreRequest;
use App\Http\Requests\ServiceUpdateRequest;
use App\Models\Service;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::orderByDesc('id')->paginate(4);

        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(ServiceStoreRequest $request)
    {
        $service = new Service();

        // Update fields with request data
        $service->title = $request->title;
        $service->slug = Str::slug($request->title);
        $service->description = $request->description;
        $service->status = true;

        // Handle image upload
        if ($request->hasFile('image')) {
            $service->image = $request->file('image')->store('services', 'public');
        }

        $service->save();

        return redirect()->route('admin.services.index')->with('toast', ['type' => 'success', 'message' => 'Service created successfully.']);
    }

    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    public function update(ServiceUpdateRequest $request, Service $service)
    {
        // Update fields with request data
        $service->title = $request->title;
        $service->slug = Str::slug($request->title);
        $service->description = $request->description;
        $service->status = $request->boolean('status', true);

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($service->image) {
                Storage::disk('public')->delete($service->image);
            }
            $service->image = $request->file('image')->store('services', 'public');
        }

        $service->save();

        return redirect()->route('admin.services.index')->with('toast', ['type' => 'success', 'message' => 'Service updated successfully.']);
    }

    public function destroy(Service $service)
    {
        // Delete images from storage if they exist
        if ($service->image) {
            Storage::disk('public')->delete($service->image);
        }

        $service->delete();

        return redirect()->route('admin.services.index')->with('toast', ['type' => 'success', 'message' => 'Service deleted successfully.']);
    }
}
