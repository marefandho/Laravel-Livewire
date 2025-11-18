<?php

namespace App\Livewire\Pages;

use App\Services\CompanyService;
use Livewire\Component;

class Company extends Component
{
    public array $company = [];

    public function mount(): void
    {
        $company = app(CompanyService::class)->getData();
        $this->company = $company ? $company->toArray() : [];
    }
    
    public function render()
    {
        return view('livewire.pages.company');
    }
}
