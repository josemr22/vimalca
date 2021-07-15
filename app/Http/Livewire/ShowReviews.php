<?php

namespace App\Http\Livewire;

use App\Models\Review;
use Livewire\Component;

class ShowReviews extends Component
{
    public $reviews;
    public $toDelete =[];

    protected $rules = [
        'reviews.*.autor' => 'required|string',
        'reviews.*.company' => 'nullable|string',
        'reviews.*.body' => 'required|string|max:500',
    ];

    protected $messages = [
        'reviews.*.autor.required' => 'Complete el campo',
        'reviews.*.company.required' => 'Complete el campo',
        'reviews.*.body.required' => 'Complete el campo',
        'reviews.*.body.max' => 'Máximo 500 caracteres',
    ];

    public function mount(){
        $this->reviews = Review::orderByDesc('created_at')->get();
    }

    public function render()
    {
        return view('livewire.show-reviews');
    }

    public function save(){
        $this->validate();
        foreach(Review::get() as $review){
            if (in_array($review->id, $this->toDelete)) {
                $review->delete();
            }
        }
        foreach ($this->reviews as $review) {
            $review->save();
        }
        $this->toDelete=[];
        $this->emit('showToast', ['type' => 'success', 'message' => '🔥 Datos guardados correctamente']);
    }

    public function removeReview($id){
        $this->reviews = $this->reviews->filter(function ($review) use($id) {
            if ($review->id != $id) {
                return $review;
            }else{
                array_push($this->toDelete,$review->id);
            }
        });
    }
}
