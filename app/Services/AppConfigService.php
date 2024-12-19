<?php

namespace App\Services;

use App\Models\Service;
use App\Models\Setting;

class AppConfigService
{
    protected $navServices;
    protected Setting $setting;

    public function __construct()
    {
        $this->navServices = Service::orderBy('id')->take(4)->get();
        $this->setting = Setting::first(); // Ambil setting pertama
    }

    public function getServices()
    {
        return $this->navServices;
    }

    public function getSetting()
    {
        return $this->setting;
    }
}
