<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class input extends Component
{

    public string $name;
    public string $type;
    public string $text;
    public string $example;
    public string $required;

    /**
     * Create a new component instance.
     */
    public function __construct(string $name, string $text, $type = "text", $example = "", $required=false)
    {
        $this->name = $name;
        $this->text = $text;
        $this->type = $type;
        $this->example = $example;
        $this->required = $required;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input');
    }
}
