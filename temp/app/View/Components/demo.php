<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class demo extends Component
{
    /**
     * Create a new component instance.
     */
    public $temp;
    public function __construct($temp)
    {
        $this->temp=$temp;
    }

    /**
     * Get the view / contents that represent the component.
     */
    // custom function
    public function KK()
    {
        return 'nyr';
    }
    public function render(): View|Closure|string
    {
        return view('components.demo');
    }
}
