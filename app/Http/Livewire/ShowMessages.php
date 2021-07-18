<?php

namespace App\Http\Livewire;

use App\Models\Message;
use Livewire\Component;
use Livewire\WithPagination;

class ShowMessages extends Component
{
    use WithPagination;

    public function render()
    {
        $messages=Message::orderByDesc('created_at')->paginate(15);
        return view('livewire.show-messages',compact('messages'));
    }
}
