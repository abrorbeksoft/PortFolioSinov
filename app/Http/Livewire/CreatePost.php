<?php

namespace App\Http\Livewire;

use App\Models\News;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreatePost extends Component
{
    use WithFileUploads;

    public $title;
    public $text;
    public $image;

    protected $rules=[
        'title'=>'required|string|min:7',
        'text'=>'required|string|min:10',
        'image'=>'required|image'
    ];

    public function save()
    {
        $this->validate();
        $id=Auth::id();

        $news=new News();
        $news->title=$this->title;
        $news->text=$this->text;
        $news->user_id=$id;
        $news->save();

        $path=Storage::putFile('images',$this->image);
        $news->image()->create([
            'name'=>$path
        ]);
        return redirect()->to('/myposts');

    }

    public function render()
    {
        return view('livewire.create-post');
    }
}
