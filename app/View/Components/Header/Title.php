<?php

namespace App\View\Components\Header;

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
        $this->title = 'Guarde as suas etiquetas, convertemos os símbolos das instruções de uso, limpeza e conservação
            para texto em uma linguagem mais clara.';
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View
    {
        return view('components.header.title');
    }
}
