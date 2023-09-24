<?php

namespace App\View\Components\Buttons;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BtnAdd extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public string $route, public string $label = 'Add New')
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render()
    {
        return view('components.buttons.btn-add');
    }
}
