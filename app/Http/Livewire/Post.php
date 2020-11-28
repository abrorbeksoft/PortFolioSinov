<?php

namespace App\Http\Livewire;

use App\Models\News;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Post extends Component
{
    use WithFileUploads;

    public $newsPanel='active';
    public $updatePanel;
    public $titleTemp;
    public $textTemp;
    public $file;
    public $unews;

    protected $rules=[
        'titleTemp'=>'required|string|min:15',
        'textTemp'=>'required|string|min:20',
        'file'=>'required|image'
    ];

    public function update($id)
    {

        $news=News::find($id);
        $this->newsPanel='';
        $this->updatePanel='active';
        $this->titleTemp=$news->title;
        $this->textTemp=$news->text;
        $this->unews=$news;
    }

    public function delete($id)
    {
        $news=News::find($id);
        Storage::delete($news->image->name);
        $news->comments()->delete();
        $news->delete();
    }

    public function save()
    {
        $this->validate();

        Storage::delete($this->unews->name);
        $path=Storage::putFile('images',$this->file);
        $prefer=$this->unews;
        $prefer->title=$this->titleTemp;
        $prefer->text=$this->textTemp;
        $prefer->image()->update([
            'name'=>$path
        ]);
        $prefer->update();
        return redirect()->to('/myposts');

    }
    public function render()
    {
        $id=Auth::id();

        return view('livewire.post',[
            'news'=>News::where('user_id','=',$id)->orderBy('created_at','desc')->paginate(10)
        ]);
    }
}
