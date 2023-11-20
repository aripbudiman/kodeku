<?php

namespace App\Livewire;
use App\Models\Article;
use Livewire\Component;

class HomePage extends Component
{
    public $hasil='aku adalah kamu';

    public function render()
    {
        return view('livewire.home-page',['articles' => Article::with('user')
        ->latest('published')
        ->published()
        ->paginate(10)]);
    }
}
