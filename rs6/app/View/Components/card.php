<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class card extends Component
{
    /**
     * Create a new component instance.
     */
    public $subTitle,$cardTitle,$cardDesription;
    public function __construct($subTitle,$cardTitle,$cardDesription)
    {
        $this->cardTitle=$cardTitle;
        $this->$cardDesription=$cardDesription;
        $this->subTitle=$subTitle;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card');
    }
    //component method
    public function demo(){
        return "demo";
    }
}
