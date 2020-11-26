<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\News as NewsModel;

class News extends Component
{
    use WithPagination;


    protected $paginationTheme="bootstrap";
    public $item;
    public $update;
    public $items='active';
    public $add;


    public function update($id)
    {
        $this->add='';
        $this->items='';
        $this->update='active';
        $this->item=NewsModel::find($id);
    }


    public function delete($id)
    {
        $news=NewsModel::find($id);
        $news->comments()->delete();
        $news->image()->delete();
        $news->delete();
        return redirect()->to('/admin/news');
    }

    public function render()
    {


        return view('livewire.admin.news',[
            'news'=>NewsModel::orderBy('created_at','desc')->paginate(10)
        ]);
    }
}
