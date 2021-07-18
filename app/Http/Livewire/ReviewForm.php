<?php

namespace App\Http\Livewire;

use App\Models\Review;
use Livewire\Component;

class ReviewForm extends Component
{
    public $review;

    protected $rules = [
        'review.autor' => 'required|string',
        'review.company' => 'nullable|string',
        'review.body' => 'required|string|max:500',
    ];

    protected $messages = [
        'review.autor.required' => 'Complete el campo',
        'review.company.required' => 'Complete el campo',
        'review.body.required' => 'Complete el campo',
        'review.body.max' => 'Máximo 500 caracteres',
    ];

    public function mount(Review $review){
        $this->review = $review;
    }

    public function render()
    {
        return view('livewire.review-form');
    }

    public function update(){
        $this->validate();
        $this->review->save();
        $this->emit('showToast', ['type' => 'success', 'message' => '🔥 Actualizado Correctamente']);
    }
}
