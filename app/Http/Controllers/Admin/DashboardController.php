<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $widgets = [
            [
                'route' => route('admin.hero-sections.index'),
                'icon' => 'tabler:carousel-horizontal',
                'title' => 'Hero Sections',
            ],
            [
                'route' => route('admin.services.index'),
                'icon' => 'material-symbols:home-repair-service-outline',
                'title' => 'Services',
            ],
            [
                'route' => route('admin.fleets.index'),
                'icon' => 'hugeicons:helicopter',
                'title' => 'Fleets',
            ],
            [
                'route' => route('admin.partners.index'),
                'icon' => 'mdi:partnership-outline',
                'title' => 'Partners',
            ],
            [
                'route' => route('admin.blogs.index'),
                'icon' => 'mdi:blog-outline',
                'title' => 'Blogs',
            ],
            [
                'route' => route('admin.faqs.index'),
                'icon' => 'mdi:faq',
                'title' => 'Faqs',
            ],
            [
                'route' => route('admin.contacts.index'),
                'icon' => 'material-symbols:contact-mail-outline',
                'title' => 'Contacts',
            ],
            [
                'route' => route('admin.settings.index'),
                'icon' => 'icon-park-outline:setting-two',
                'title' => 'Settings',
            ],
        ];

        return view('admin.dashboard', compact('widgets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
