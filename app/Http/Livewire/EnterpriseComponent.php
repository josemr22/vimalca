<?php

namespace App\Http\Livewire;

use App\Models\Branch;
use Livewire\Component;

class EnterpriseComponent extends Component
{
    public $type = 'hielo';
    public $branch;
    public function render()
    {
        $this->branch = Branch::where('name',$this->type)->first();
        return view('livewire.enterprise-component');
    }
}
