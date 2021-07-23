<?php

namespace App\Http\Livewire;

use App\Models\Branch;
use Livewire\Component;
use Livewire\WithFileUploads;
use Intervention\Image\Facades\Image;

class ShowBranches extends Component
{
    use WithFileUploads;
    public $branch;
    public $action = 'store';
    public $type;
    public $file;

    protected $rules = [
        'branch.introduction' => 'required|string',
        'branch.description' => 'required|string',
        'branch.label_introduction' => 'required|string',
        'branch.label_description' => 'required|string',
        'branch.resume' => 'required|string',
        'branch.video' => 'required|string',
    ];

    protected $messages = [
        'branch.introduction.required' => 'Complete el campo',
        'branch.description.required' => 'Complete el campo',
        'branch.label_introduction.required' => 'Complete el campo',
        'branch.label_description.required' => 'Complete el campo',
        'branch.resume.required' => 'Complete el campo',
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
        if($this->file!=null){
            $fileName = time().$this->file->getClientOriginalName();
            Image::make($this->file)->resize(750, 500)->save(public_path().'/img/branches/'.$fileName);
            try {
                unlink(public_path().'/img/branches/'.$this->branch->image);
            }catch (\Exception $e){
            }
            $this->branch->image=$fileName;
            $this->branch->save();
        }
        session()->flash('message', 'Datos Guardados Correctamente');
        return redirect()->route('branches.edit',$this->type);
    }
}
