<?php

namespace App\Livewire;

use Livewire\Component;

class Breadcrumb extends Component
{
    public array $items = [];

    public function mount()
    {
        $this->items = $this->generateItems();
    }

    protected function generateItems(): array
    {
        $route = request()->route();
        $routeName = $route->getName();
        $segments = explode('.', $routeName);
        $items = [];
        $path = '';
        foreach ($segments as $segment) {
            $path .= ($path ? '.' : '') . $segment;
            $items[] = [
                'label' => ucfirst(str_replace('-', ' ', $segment)),
                'url' => route($path)
            ];
        }
        return $items;
    }
    
    public function render()
    {
        return view('livewire.breadcrumb');
    }
}
