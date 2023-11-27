<?php

namespace App\Livewire\Components;

use Livewire\Component;
use App\Models\Bookmark;

class ButtonDeleteBookmark extends Component
{
    public $item;
    public $tooltip='Remove Bookmark';
    public function render()
    {
        return view('livewire.components.button-delete-bookmark');
    }

    public function deleteBookmark($item){
        Bookmark::where('article_id',$item)->where('user_id',auth()->user()->id)->delete();
        return redirect();
    }
}
