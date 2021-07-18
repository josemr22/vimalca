<?php

namespace App\Http\Livewire;

use App\Models\Message;
use Livewire\Component;

class Contact extends Component
{
    public $message;

    protected $rules = [
        'message.name'=>'required',
        'message.email'=>'required|email',
        'message.phone'=>'required|digits_between:6,13',
        'message.message'=>'required',
    ];

    protected $messages = [
        'message.name.required'=>'Ingrese su nombre',
        'message.email.required'=>'Ingrese su email',
        'message.email.email'=>'Ingrese un email válido',
        'message.phone.required'=>'Ingrese su teléfono',
        'message.phone.digits_between'=>'Ingrese un número teléfono válido',
        'message.message.required'=>'Ingrese un mensaje',
    ];

    public function render()
    {
        return view('livewire.contact');
    }

    public function save(){
        $data = $this->validate();
        Message::create($data['message']);
        $this->message=null;
        $this->emit('alertSuccess');
    }
}
