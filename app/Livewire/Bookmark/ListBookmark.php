<?php

namespace App\Livewire\Bookmark;

use App\Models\Article;
use App\Models\Bookmark;
use Livewire\Component;

class ListBookmark extends Component
{
    public $articles;

    public function mount(){
        $this->articles=Bookmark::where('user_id',auth()->id())->with('article','article.user')->get();
    }
    public function render()
    {
        return view('livewire.bookmark.list-bookmark');
    }

    

}
