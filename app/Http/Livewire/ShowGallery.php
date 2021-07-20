<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Gallery;
use Livewire\WithFileUploads;
use Intervention\Image\Facades\Image;

class ShowGallery extends Component
{
    use WithFileUploads;

    public $galleries;
    public $type='hielo';
    public $name;
    public $file;
    public $action="store";
    public $idToUpdate;

    protected $queryString = ['type'];

    protected $rules = [
        'name' => 'nullable',
        'file'=>'nullable',
    ];

    public function render()
    {
        $this->galleries = Gallery::where('category',$this->type)->orderByDesc('created_at')->get();
        return view('livewire.show-gallery');
    }

    public function edit(Gallery $gallery){
        $this->name = $gallery->one;
        $this->action = 'edit';
        $this->idToUpdate = $gallery->id;
    }

    public function save(){
        $data = $this->validate();
        if($this->action=='store'){
            if($this->file==null){
                $this->addError('file', 'Cargue una imagen');
                return redirect()->back()->withErrors(new \Illuminate\Support\MessageBag(['catch_exception'=>$this->getErrorBag()]));
            }
            $gallery=new Gallery();
            $gallery->one=$this->name;
            $gallery->category=$this->type;
            $fileName = time().$this->file->getClientOriginalName();
            Image::make($this->file)->save(public_path().'/img/gallery/'.$fileName);
            $gallery->image=$fileName;
            $gallery->save();
        }else{
            $gallery=Gallery::findOrFail($this->idToUpdate);
            $gallery->one=$this->name;
            if($this->file!=null){
                $fileName = time().$this->file->getClientOriginalName();
                Image::make($this->file)->save(public_path().'/img/gallery/'.$fileName);
                try {
                    unlink(public_path().'/img/gallery/'.$gallery->image);
                }catch (\Exception $e){
                }
                $gallery->image=$fileName;
            }
            $gallery->save();
        }
        session()->flash('message', 'Datos Guardados Correctamente');
        return redirect()->to("/galerias?type=$this->type");
    }

    public function default(){
        $this->name=null;
        $this->file=null;
        $this->action='store';
    }

    public function remove(Gallery $gallery){
        $gallery->delete();
    }
}
