<?php

namespace App\Http\Livewire\Admin;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Add extends Component
{
    use WithFileUploads;

    public $title;
    public $text;
    public $img;
    public $custom_error;

    protected $rules=[
        'title'=>"required|string|min:10",
        'text'=>"required|string|min:10",
        'img'=>"image|max:1024"
    ];

    public function save()
    {
        $this->validate();
        $path=Storage::putFile('images',$this->img);

        $news=new \App\Models\News();
        $news->title=$this->title;
        $news->text=$this->text;
        $news->user_id=Auth::id();
        $news->save();
        $news->image()->create([
            'name'=>$path
        ]);
        return redirect()->to('/admin/news');

    }

    public function render()
    {
        return view('livewire.admin.add');
    }
}
