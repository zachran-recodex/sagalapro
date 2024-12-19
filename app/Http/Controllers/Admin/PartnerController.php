<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PartnerStoreRequest;
use App\Http\Requests\PartnerUpdateRequest;
use App\Models\Partner;
use Illuminate\Support\Facades\Storage;

class PartnerController extends Controller
{
    public function index()
    {
        $partners = Partner::orderByDesc('id')->paginate(10);

        return view('admin.partners.index', compact('partners'));
    }

    public function create()
    {
        return view('admin.partners.create');
    }

    public function store(PartnerStoreRequest $request)
    {
        $partner = new Partner();

        // Update fields with request data
        $partner->status = true;

        // Handle image upload
        if ($request->hasFile('image')) {
            $partner->image = $request->file('image')->store('partners', 'public');
        }

        $partner->save();

        return redirect()->route('admin.partners.index')->with('toast', ['type' => 'success', 'message' => 'Partner created successfully.']);
    }

    public function edit(Partner $partner)
    {
        return view('admin.partners.edit', compact('partner'));
    }

    public function update(PartnerUpdateRequest $request, Partner $partner)
    {
        // Update fields with request data
        $partner->status = $request->boolean('status', true);

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($partner->image) {
                Storage::disk('public')->delete($partner->image);
            }
            $partner->image = $request->file('image')->store('partners', 'public');
        }

        $partner->save();

        return redirect()->route('admin.partners.index')->with('toast', ['type' => 'success', 'message' => 'Partner updated successfully.']);
    }

    public function destroy(Partner $partner)
    {
        // Delete images from storage if they exist
        if ($partner->image) {
            Storage::disk('public')->delete($partner->image);
        }

        $partner->delete();

        return redirect()->route('admin.partners.index')->with('toast', ['type' => 'success', 'message' => 'Partner deleted successfully.']);
    }
}
