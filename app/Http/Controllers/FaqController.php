<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Http\Requests\StoreFaqRequest;
use App\Http\Requests\UpdateFaqRequest;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $faqs = Faq::orderBy('id')->paginate(4);

        return view('admin.faqs.index', compact('faqs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.faqs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFaqRequest $request)
    {
        $faq = new Faq();

        // Update fields with request data
        $faq->title = $request->title;
        $faq->description = $request->description;
        $faq->status = $request->status;

        $faq->save();

        return redirect()->route('admin.faqs.index')->with('success', 'faq created successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Faq $faq)
    {
        return view('admin.faqs.edit', compact('faq'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFaqRequest $request, Faq $faq)
    {
        // Update fields with request data
        $faq->title = $request->title;
        $faq->description = $request->description;
        $faq->status = $request->status;

        $faq->save();

        return redirect()->route('admin.faqs.index')->with('success', 'faq updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Faq $faq)
    {
        $faq->delete();

        return redirect()->route('admin.faqs.index')->with('success', 'faq deleted successfully');
    }
}
