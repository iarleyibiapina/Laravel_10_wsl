<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class StatusProduto extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        protected string $status,
    ) {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        // default
        $color = 'blue';

        $color = $this->status === 'A' ? 'green' : $color;
        $color = $this->status === 'B' ? 'orange' : $color;
        $color = $this->status === 'C' ? 'gray' : $color;

        $textStatus = getStatusProduto($this->status);
        return view('components.status-produto', compact('textStatus', 'color'));
    }
}
