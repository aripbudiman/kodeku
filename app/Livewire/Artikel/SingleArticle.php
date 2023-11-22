<?php

namespace App\Livewire\Artikel;

use App\Models\Article;
use App\Models\ArticleView;
use Livewire\Component;

class SingleArticle extends Component
{
    public Article $article;
    public function mount($slug){
        $this->article = Article::where('slug', $slug)->first();
    }
    public function render()
    {
        ArticleView::updateOrCreate([
            'article_id' => $this->article->id,
            'ip_address' => request()->ip(),
        ]);
        return view('livewire.artikel.single-article',[
            'article' => $this->article
        ]);
    }
}
