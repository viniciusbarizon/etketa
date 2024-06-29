<?php

namespace App\View\Components\Header;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Logo extends Component
{
    public string $path;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->path = 'resources/images/header/logo.png';
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.header.logo');
    }
}
