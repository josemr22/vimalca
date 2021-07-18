<?php

namespace App\Http\Livewire;

use App\Models\Review;
use Livewire\Component;

class ShowReviews extends Component
{
    public $review;
    public $reviews;
    public $action="store";

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

    public function render()
    {
        $this->reviews=Review::orderBy('created_at')->get();
        return view('livewire.show-reviews');
    }

    public function edit(Review $review){
        $this->review=$review;
        $this->resetErrorBag();
        $this->action='edit';
    }

    public function save(){
        $this->validate();
        if($this->action == 'store'){
            Review::create($this->validate()['review']);
        }else{
            $this->review->save();
        }
        $this->default();
        $this->emit('showToast', ['type' => 'success', 'message' => '🔥 Datos guardados correctamente']);
    }

    public function remove($id){
        Review::find($id)->delete();
    }

    public function default(){
        $this->resetErrorBag();
        $this->review=null;
        $this->action='store';
    }
}
