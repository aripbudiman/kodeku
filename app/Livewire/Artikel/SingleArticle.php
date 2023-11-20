<?php

namespace App\Livewire\Artikel;

use App\Models\Article;
use Livewire\Component;

class SingleArticle extends Component
{
    public Article $article;
    public function mount($slug){
        $this->article = Article::where('slug', $slug)->first();
    }
    public function render()
    {
        return view('livewire.artikel.single-article',[
            'article' => $this->article
        ]);
    }
}
