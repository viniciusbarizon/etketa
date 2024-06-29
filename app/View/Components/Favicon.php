<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Favicon extends Component
{
    const PATH = 'resources/favicon/';

    public array $favicons;
    public string $webManifestPath;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->favicons = $this->getFavicons();
        $this->webManifestPath = 'resources/favicon/site.webmanifest';
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.favicon');
    }

    private function getFavicons(): array
    {
        return [
            ['href' => self::PATH . 'apple-touch-icon.png', 'rel' => 'apple-touch-icon', 'sizes' => '180x180'],
            ['href' => self::PATH . 'favicon-32x32.png', 'rel' => 'icon', 'sizes' => '32x32'],
            ['href' => self::PATH . 'favicon-16x16.png', 'rel' => 'icon', 'sizes' => '16x16'],
        ];
    }
}
