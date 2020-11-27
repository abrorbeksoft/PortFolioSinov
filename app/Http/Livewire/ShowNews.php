<?php

namespace App\Http\Livewire;

use App\Http\Resources\NewsCollection;
use App\Models\News;
use Livewire\Component;
use Livewire\WithPagination;

class ShowNews extends Component
{
    use WithPagination;

    protected $paginationTheme="bootstrap";

    public function render()
    {
        return view('livewire.show-news',[
           'news'=>News::orderBy('created_at','desc')->paginate()
        ]);
    }
}
