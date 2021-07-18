<?php

namespace App\Http\Livewire;

use App\Models\Branch;
use Livewire\Component;

class ShowBranches extends Component
{
    public $branch;
    public $action = 'store';
    public $type;

    protected $rules = [
        'branch.introduction' => 'required|string',
        'branch.description' => 'required|string',
        'branch.video' => 'required|string',
    ];

    protected $messages = [
        'branch.introduction.required' => 'Complete el campo',
        'branch.description.required' => 'Complete el campo',
        'branch.video.required' => 'Complete el campo',
    ];

    public function mount($type){
        $this->type = $type;
        $this->branch = Branch::where('name',$type)->first();
    }

    public function render()
    {
        return view('livewire.show-branches');
    }

    public function save(){
        $this->validate();
        $this->branch->save();
        return redirect()->route('branches');
    }
}
