<?php

namespace App\Http\Controllers;

use App\Models\HeroSection;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\HeroSectionStoreRequest;
use App\Http\Requests\HeroSectionUpdateRequest;

class HeroSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $heroSections = HeroSection::orderBy('id')->paginate(3);

        return view('admin.hero-sections.index', compact('heroSections'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.hero-sections.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(HeroSectionStoreRequest $request)
    {
        $heroSection = new HeroSection();

        // Update fields with request data
        $heroSection->title = $request->title;
        $heroSection->status = filter_var($request->status, FILTER_VALIDATE_BOOLEAN);

        // Handle image upload
        if ($request->hasFile('image')) {
            $heroSection->image = $request->file('image')->store('hero-sections', 'public');
        }

        $heroSection->save();

        return redirect()->route('admin.hero-sections.index')->with('success', 'Hero Section created successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HeroSection $heroSection)
    {
        return view('admin.hero-sections.edit', compact('heroSection'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(HeroSectionUpdateRequest $request, HeroSection $heroSection)
    {
        // Update fields with request data
        $heroSection->title = $request->title;
        $heroSection->status = filter_var($request->status, FILTER_VALIDATE_BOOLEAN);

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($heroSection->image) {
                Storage::disk('public')->delete($heroSection->image);
            }
            $heroSection->image = $request->file('image')->store('hero-sections', 'public');
        }

        $heroSection->save();

        return redirect()->route('admin.hero-sections.index')->with('success', 'Hero Section updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HeroSection $heroSection)
    {
        // Delete images from storage if they exist
        if ($heroSection->image) {
            Storage::disk('public')->delete($heroSection->image);
        }

        $heroSection->delete();

        return redirect()->route('admin.hero-sections.index')->with('success', 'Hero Section deleted successfully');
    }
}
