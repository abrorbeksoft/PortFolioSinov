<?php

namespace App\Http\Livewire\Admin;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $news;
    public $title;
    public $text;
    public $custom_error;
    public $image;
    public $img_tmp;

    public function mount()
    {
        $this->title=$this->news->title;
        $this->text=$this->news->text;
        $this->image=$this->news->image;

    }
    protected $rules=[
        'title'=>'required|string|min:20',
        'text'=>'required|string|min:30',
        'img_tmp'=>'required|image'

    ];

    public function update()
    {
        $this->validate();
        $path=Storage::putFile('images',$this->img_tmp);
        $this->news->title=$this->title;
        $this->news->text=$this->text;
        $this->news->image()->update([
            'name'=>$path
        ]);
        $this->news->save();
        return redirect()->to('/admin/news');
    }


    public function render()
    {
        return view('livewire.admin.update');
    }
}
