<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\HeroSectionStoreRequest;
use App\Http\Requests\Admin\HeroSectionUpdateRequest;
use App\Models\HeroSection;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class HeroSectionController extends Controller
{
    public function index()
    {
        $heroSections = HeroSection::orderByDesc('id')->paginate(5);

        return view('admin.hero-sections.index', compact('heroSections'));
    }

    public function create()
    {
        return view('admin.hero-sections.create');
    }

    public function store(HeroSectionStoreRequest $request)
    {
        $heroSection = new HeroSection();

        // Update fields with request data
        $heroSection->title = $request->title;
        $heroSection->status = true;

        // Handle image upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '-' . Str::slug($request->title) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/hero-sections'), $filename);
            $heroSection->image = 'uploads/hero-sections/' . $filename;
        }

        $heroSection->save();

        return redirect()->route('admin.hero-sections.index')->with('toast', ['type' => 'success', 'message' => 'Hero Section created successfully.']);
    }

    public function edit(HeroSection $heroSection)
    {
        return view('admin.hero-sections.edit', compact('heroSection'));
    }

    public function update(HeroSectionUpdateRequest $request, HeroSection $heroSection)
    {
        // Update fields with request data
        $heroSection->title = $request->title;
        $heroSection->status = $request->boolean('status', true);

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($heroSection->image && file_exists(public_path($heroSection->image))) {
                unlink(public_path($heroSection->image));
            }

            $file = $request->file('image');
            $filename = time() . '-' . Str::slug($request->title) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/hero-sections'), $filename);
            $heroSection->image = 'uploads/hero-sections/' . $filename;
        }

        $heroSection->save();

        return redirect()->route('admin.hero-sections.index')->with('toast', ['type' => 'success', 'message' => 'Hero Section updated successfully.']);
    }

    public function destroy(HeroSection $heroSection)
    {
        // Delete image from public folder if exists
        if ($heroSection->image && file_exists(public_path($heroSection->image))) {
            unlink(public_path($heroSection->image));
        }

        $heroSection->delete();

        return redirect()->route('admin.hero-sections.index')->with('toast', ['type' => 'success', 'message' => 'Hero Section deleted successfully.']);
    }
}
