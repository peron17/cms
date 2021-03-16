<?php

namespace App\View\Components\Layouts;

use Illuminate\Support\Facades\Config;
use Illuminate\View\Component;

class Main extends Component
{
    public $title;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title)
    {
        $this->title = getenv('APP_NAME') . ' | ' . $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.layouts.main');
    }
}
