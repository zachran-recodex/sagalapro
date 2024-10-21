<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;
use App\Services\AppConfigService;

class SettingComposer
{
    protected $appConfigService;

    public function __construct(AppConfigService $appConfigService)
    {
        $this->appConfigService = $appConfigService;
    }

    public function compose(View $view)
    {
        $view->with([
            'navServices' => $this->appConfigService->getServices(),
            'setting' => $this->appConfigService->getSetting(),
        ]);
    }
}
