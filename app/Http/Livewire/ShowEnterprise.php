<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Enterprise;
use Livewire\WithFileUploads;
use Intervention\Image\Facades\Image;

class ShowEnterprise extends Component
{
    use WithFileUploads;
    public $enterprise;
    public $file;

    protected $rules = [
        'enterprise.who'=>'required',
        'enterprise.about'=>'required',
        'enterprise.mision'=>'required',
        'enterprise.vision'=>'required',
    ];
    protected $messages = [
        'enterprise.who.required'=>'Complete el campo',
        'enterprise.about.required'=>'Complete el campo',
        'enterprise.mision.required'=>'Complete el campo',
        'enterprise.vision.required'=>'Complete el campo',
    ];

    public function mount(){
        $this->enterprise=Enterprise::first();
    }

    public function render()
    {
        return view('livewire.show-enterprise');
    }

    public function save(){
        $this->validate();
        $this->enterprise->save();
        if($this->file!=null){
            $fileName = time().$this->file->getClientOriginalName();
            Image::make($this->file)->resize(800, 960)->save(public_path().'/img/vimalca/'.$fileName);
            try {
                // unlink(public_path().'/img/vimalca/'.$this->enterprise->image);
            }catch (\Exception $e){
            }
            $this->enterprise->image=$fileName;
            $this->enterprise->save();
        }
        session()->flash('message', 'Datos Guardados Correctamente');
        return redirect()->route('vimalca');
    }
}
