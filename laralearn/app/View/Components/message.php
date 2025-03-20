<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class message extends Component
{
    public $msg;
    public $class;
    /**
     * Create a new component instance.
     */
    public function __construct($class,$msg)
    {
        $this->msg = $msg;
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.message');
    }
}
