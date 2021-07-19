<?php

namespace App\Http\Livewire;

use App\Models\Client;
use Livewire\Component;
use Livewire\WithFileUploads;
use Intervention\Image\Facades\Image;

class ShowClients extends Component
{
    use WithFileUploads;

    public $clients;
    public $type='hielo';
    public $name;
    public $file;
    public $action="store";
    public $idToUpdate;

    protected $rules = [
        'name' => 'required',
        'file'=>'nullable',
    ];

    public function render()
    {
        $this->clients = Client::where('branch',$this->type)->orderByDesc('created_at')->get();
        return view('livewire.show-clients');
    }

    public function edit(Client $client){
        $this->name = $client->name;
        $this->action = 'edit';
        $this->idToUpdate = $client->id;
    }

    public function save(){
        $data = $this->validate();
        if($this->action=='store'){
            if($this->file==null){
                $this->addError('file', 'Cargue una imagen');
                return redirect()->back()->withErrors(new \Illuminate\Support\MessageBag(['catch_exception'=>$this->getErrorBag()]));
            }
            $client=new Client();
            $client->name=$this->name;
            $client->branch=$this->type;
            $fileName = time().$this->file->getClientOriginalName();
            Image::make($this->file)->resize(100, 100)->save(public_path().'/img/clients/'.$fileName);
            $client->image=$fileName;
            $client->save();
        }else{
            $client=Client::findOrFail($this->idToUpdate);
            $client->name=$this->name;
            if($this->file!=null){
                $fileName = time().$this->file->getClientOriginalName();
                Image::make($this->file)->resize(100, 100)->save(public_path().'/img/clients/'.$fileName);
                try {
                    unlink(public_path().'/img/client/'.$client->image);
                }catch (\Exception $e){
                }
                $client->image=$fileName;
            }
            $client->save();
        }
        $this->default();
    }

    public function default(){
        $this->name=null;
        $this->file=null;
        $this->action='store';
    }

    public function remove(Client $client){
        $client->delete();
    }
}
