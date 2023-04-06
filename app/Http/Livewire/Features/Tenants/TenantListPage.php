<?php

namespace App\Http\Livewire\Features\Tenants;

use App\Http\Livewire\BaseComponent;
use Livewire\Component;

class TenantListPage extends BaseComponent
{
    public function render()
    {
        return view('livewire.features.tenants.tenant-list-page');
    }
}
