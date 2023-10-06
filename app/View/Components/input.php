<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class input extends Component
{
    public string $placeholder = '';
    public string $id = '';
    public string $name = '';
    public string $type = '';
    /**
     * Create a new component instance.
     */
    public function __construct($name, $id, $type, $placeholder)
    {
        $this->name = $name;
        $this->id = $id;
        $this->type = $type;
        $this->placeholder = $placeholder;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input');
    }
}
