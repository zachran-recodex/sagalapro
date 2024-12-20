<?php

namespace App\View\Section;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BlogSection extends Component
{
    public $blogs;

    /**
     * Create a new component instance.
     */
    public function __construct($blogs)
    {
        $this->blogs = $blogs;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('sections.blog-section');
    }
}
