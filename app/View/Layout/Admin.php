<?php

namespace App\View\Layout;

use Illuminate\View\Component;
use Illuminate\View\View;

class Admin extends Component
{
    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        return view('layouts.admin');
    }
}
