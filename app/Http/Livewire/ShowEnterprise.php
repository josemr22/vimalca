<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Enterprise;

class ShowEnterprise extends Component
{
    public $collection;

    protected $rules = [
        'collection.*.one'=>'required'
    ];
    protected $messages = [
        'collection.*.one.required'=>'Complete el campo'
    ];

    public function mount(){
        $this->collection=Enterprise::get();
    }

    public function render()
    {
        return view('livewire.show-enterprise');
    }

    public function save(){
        $this->validate();
        foreach($this->collection as $item){
            $item->save();
        }
        $this->emit('showToast', ['type' => 'success', 'message' => '🔥 Datos guardados correctamente']);
    }
}
