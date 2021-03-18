<?php

namespace App\View\Components\Layouts;

use Illuminate\Support\Facades\Config;
use Illuminate\View\Component;

class Main extends Component
{
    public $title;

    public $pageTitle;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $pageTitle)
    {
        $this->title = getenv('APP_NAME') . ' | ' . $title;
        $this->pageTitle = $pageTitle;
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
