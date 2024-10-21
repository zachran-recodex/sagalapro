<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Blog;
use App\Models\Fleet;
use App\Models\Contact;
use App\Models\Partner;
use App\Models\Service;
use App\Models\HeroSection;
use App\Http\Requests\StoreContactRequest;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hero_sections = HeroSection::all();
        $services = Service::all();
        $partners = Partner::all();
        $blogs = Blog::all();
        $faqs = Faq::all();

        return view('index', compact('hero_sections', 'services', 'partners', 'blogs', 'faqs'));
    }

    public function about()
    {
        $partners = Partner::all();
        $blogs = Blog::all();
        $faqs = Faq::all();

        return view ('main.about', compact('partners', 'blogs', 'faqs'));
    }

    public function service($slug)
    {
        $services = Service::all();
        $blogs = Blog::all();
        $faqs = Faq::all();
        $service = Service::where('slug', $slug)->firstOrFail();

        return view('main.service', compact('service', 'services', 'faqs', 'blogs'));
    }

    public function fleet()
    {
        $fleets = Fleet::all();
        $blogs = Blog::all();
        $faqs = Faq::all();

        return view ('main.fleet', compact('fleets', 'blogs', 'faqs'));
    }

    public function detailFleet($slug)
    {
        $blogs = Blog::all();
        $faqs = Faq::all();
        $fleet = Fleet::where('slug', $slug)->firstOrFail();

        return view ('main.discover', compact('fleet', 'faqs', 'blogs'));
    }

    public function blog($slug)
    {
        $blogs = Blog::all();
        $blog = Blog::where('slug', $slug)->firstOrFail();

        return view('main.blog', compact('blog', 'blogs'));
    }

    public function contact()
    {
        return view ('main.contact');
    }

    public function storeContact(StoreContactRequest $request)
    {
        $contact = new Contact();

        // Update fields with request data
        $contact->name = $request->name;
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->service = $request->service;
        $contact->message = $request->message;

        $contact->save();

        return redirect()->route('main.contact')->with('success', 'Service created successfully');
    }

    public function acquisition()
    {
        return view ('main.acquisition');
    }

    public function aerial()
    {
        return view ('main.aerial');
    }

    public function cargo()
    {
        return view ('main.cargo');
    }

    public function charter()
    {
        return view ('main.charter');
    }
}
