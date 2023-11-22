<?php

namespace App\Livewire\Artikel;

use Livewire\Component;

class ListArticle extends Component
{
    public $data;
    public $keyword='';
    public $count=0;
    public function mount()
    {
        $this->data = \App\Models\Article::with('topics')->get(); 
    }
    public function render()
    {
        // dd($this->data->toArray());
        return view('livewire.artikel.list-article',[
            'articles' => $this->filterData()
        ]);
    }


    public function filterData()
    {
        $filteredData = $this->data->filter(function ($item) {
            return strpos(strtolower($item->title), strtolower($this->keyword)) !== false;
        });

        // Hitung jumlah item yang sesuai dengan kriteria pencarian
        $this->count = $filteredData->count();

        return $filteredData;
    }
}
