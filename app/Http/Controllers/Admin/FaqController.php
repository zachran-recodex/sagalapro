<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FaqStoreRequest;
use App\Http\Requests\FaqUpdateRequest;
use App\Models\Faq;

class FaqController extends Controller
{
    public function index()
    {
        $faqs = Faq::orderByDesc('id')->paginate(4);

        return view('admin.faqs.index', compact('faqs'));
    }
    public function create()
    {
        return view('admin.faqs.create');
    }
    public function store(FaqStoreRequest $request)
    {
        $faq = new Faq();

        // Update fields with request data
        $faq->title = $request->title;
        $faq->description = $request->description;
        $faq->status = filter_var($request->status, FILTER_VALIDATE_BOOLEAN);

        $faq->save();

        return redirect()->route('admin.faqs.index')->with('toast', ['type' => 'success', 'message' => 'Faq created successfully.']);
    }

    public function edit(Faq $faq)
    {
        return view('admin.faqs.edit', compact('faq'));
    }

    public function update(FaqUpdateRequest $request, Faq $faq)
    {
        // Update fields with request data
        $faq->title = $request->title;
        $faq->description = $request->description;
        $faq->status = filter_var($request->status, FILTER_VALIDATE_BOOLEAN);

        $faq->save();

        return redirect()->route('admin.faqs.index')->with('toast', ['type' => 'success', 'message' => 'Faq updated successfully.']);
    }

    public function destroy(Faq $faq)
    {
        $faq->delete();

        return redirect()->route('admin.faqs.index')->with('toast', ['type' => 'success', 'message' => 'Faq deleted successfully.']);
    }
}
