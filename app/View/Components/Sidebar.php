<?php

namespace App\View\Components;

use App\Models\Collection;
use Illuminate\View\Component;

class Sidebar extends Component
{
    public $collections = [];
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->collections = Collection::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.sidebar');
    }
}
