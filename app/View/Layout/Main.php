<?php

namespace App\View\Layout;

use Illuminate\View\Component;
use Illuminate\View\View;

class Main extends Component
{
    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        return view('layouts.main');
    }
}
