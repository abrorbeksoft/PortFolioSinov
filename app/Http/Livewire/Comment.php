<?php

namespace App\Http\Livewire;

use App\Models\News;
use Livewire\Component;

class Comment extends Component
{
    public $comment;
    public $news;

    protected $rules=[
        'comment'=>'required|min:15|string'
    ];

    public function commit()
    {
        $this->validate();

        $this->news->comments()->create([
            'title'=>$this->comment,
            'text'=>$this->comment
        ]);

        $this->comment='';

    }

    public function render()
    {
        return view('livewire.comment');
    }
}
