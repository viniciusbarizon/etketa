<?php

namespace App\View\Components;

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
        $title = 'Mantenha as suas etiquetas online com uma explicação clara das instruções de lavagem, secagem, como
            passar, etc.';
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.title');
    }
}
