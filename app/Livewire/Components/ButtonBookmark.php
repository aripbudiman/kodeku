<?php

namespace App\Livewire\Components;

use Livewire\Component;
use App\Models\Bookmark;

class ButtonBookmark extends Component
{
    public $item;
    public $tooltip='Add Bookmark';
    public function render()
    {
        return view('livewire.components.button-bookmark');
    }

    public function addBookmark($item)
    {
        Bookmark::updateOrCreate([
            'article_id' => $item,
            'user_id' => auth()->user()->id
        ]);
        $this->tooltip='Success Add Bookmark';
        return back();
    }
}
