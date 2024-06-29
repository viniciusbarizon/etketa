<?php

namespace App\View\Components\Header;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Title extends Component
{
    public string $title;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->title = 'Guarde as suas etiquetas, convertemos os símbolos do guia da lavanderia para texto em uma
            linguagem mais clara.';
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.header.title');
    }
}
