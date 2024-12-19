<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\ContactStoreRequest;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\Faq;
use App\Models\Fleet;
use App\Models\HeroSection;
use App\Models\Partner;
use App\Models\Service;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $heroSections = HeroSection::where('status', true)
            ->orderBy('id', 'desc')
            ->paginate(3);
        $services = Service::where('status', true)
            ->orderBy('id', 'desc')
            ->paginate(10);
        $partners = Partner::where('status', true)
            ->orderBy('id', 'desc')
            ->paginate(10);
        $blogs = Blog::where('status', true)
            ->orderBy('id', 'desc')
            ->paginate(5);
        $faqs = Faq::where('status', true)
            ->orderBy('id', 'desc')
            ->paginate(5);

        return view('index', compact('heroSections', 'services', 'partners', 'blogs', 'faqs'));
    }

    public function about()
    {
        $partners = Partner::where('status', true)
            ->orderBy('id', 'desc')
            ->paginate(20);
        $blogs = Blog::where('status', true)
            ->orderBy('id', 'desc')
            ->paginate(5);
        $faqs = Faq::where('status', true)
            ->orderBy('id', 'desc')
            ->paginate(5);

        return view ('main.about', compact('partners', 'blogs', 'faqs'));
    }

    public function service($slug)
    {
        $services = Service::where('status', true)
            ->orderBy('id', 'desc')
            ->paginate(10);
        $blogs = Blog::where('status', true)
            ->orderBy('id', 'desc')
            ->paginate(5);
        $faqs = Faq::where('status', true)
            ->orderBy('id', 'desc')
            ->paginate(5);
        $service = Service::where('slug', $slug)->firstOrFail();

        return view('main.service', compact('service', 'services', 'faqs', 'blogs'));
    }

    public function fleet()
    {
        $fleets = Fleet::where('status', true)
            ->orderBy('id', 'desc')
            ->paginate(10);
        $blogs = Blog::where('status', true)
            ->orderBy('id', 'desc')
            ->paginate(5);
        $faqs = Faq::where('status', true)
            ->orderBy('id', 'desc')
            ->paginate(5);

        return view ('main.fleet', compact('fleets', 'blogs', 'faqs'));
    }

    public function detailFleet($slug)
    {
        $blogs = Blog::where('status', true)
            ->orderBy('id', 'desc')
            ->paginate(5);
        $faqs = Faq::where('status', true)
            ->orderBy('id', 'desc')
            ->paginate(5);
        $fleet = Fleet::where('slug', $slug)->firstOrFail();

        return view ('main.discover', compact('fleet', 'faqs', 'blogs'));
    }

    public function blog($slug)
    {
        $blogs = Blog::where('status', true)
            ->orderBy('id', 'desc')
            ->paginate(10);
        $blog = Blog::where('slug', $slug)->firstOrFail();

        return view('main.blog', compact('blog', 'blogs'));
    }

    public function contact()
    {
        return view ('main.contact');
    }

    public function storeContact(ContactStoreRequest $request)
    {
        $contact = new Contact();

        // Manual assignment
        $contact->name = $request->name;
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->service = $request->service;
        $contact->message = $request->message;

        $contact->save();

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }

    public function termsConditions()
    {
        return view('main.terms-conditions');
    }

    public function privacyPolicy()
    {
        return view('main.privacy-policy');
    }
}
