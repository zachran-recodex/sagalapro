<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Blog;
use App\Models\Fleet;
use App\Models\Contact;
use App\Models\Partner;
use App\Models\Service;
use App\Models\HeroSection;
use App\Http\Requests\ContactStoreRequest;

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
        $services = Service::where('status', true);
        $partners = Partner::where('status', true);
        $blogs = Blog::where('status', true);
        $faqs = Faq::where('status', true);

        return view('index', compact('heroSections', 'services', 'partners', 'blogs', 'faqs'));
    }

    public function about()
    {
        $partners = Partner::where('status', true);
        $blogs = Blog::where('status', true);
        $faqs = Faq::where('status', true);

        return view ('main.about', compact('partners', 'blogs', 'faqs'));
    }

    public function service($slug)
    {
        $services = Service::where('status', true);
        $blogs = Blog::where('status', true);
        $faqs = Faq::where('status', true);
        $service = Service::where('slug', $slug)->firstOrFail();

        return view('main.service', compact('service', 'services', 'faqs', 'blogs'));
    }

    public function fleet()
    {
        $fleets = Fleet::where('status', true);
        $blogs = Blog::where('status', true);
        $faqs = Faq::where('status', true);

        return view ('main.fleet', compact('fleets', 'blogs', 'faqs'));
    }

    public function detailFleet($slug)
    {
        $blogs = Blog::where('status', true);
        $faqs = Faq::where('status', true);
        $fleet = Fleet::where('slug', $slug)->firstOrFail();

        return view ('main.discover', compact('fleet', 'faqs', 'blogs'));
    }

    public function blog($slug)
    {
        $blogs = Blog::where('status', true);
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

    public function termsconditions()
    {
        return view('main.terms-conditions');
    }

    public function privacypolicy()
    {
        return view('main.privacy-policy');
    }
}
