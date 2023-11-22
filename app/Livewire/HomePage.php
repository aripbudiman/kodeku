<?php

namespace App\Livewire;
use App\Models\Article;
use Livewire\Component;

class HomePage extends Component
{
    public $data;
    public $keyword='';
    public $count=0;
    public function mount()
    {
        $this->data = \App\Models\Article::with('topics','user')->latest('published')
        ->published()
        ->get(); 
    }
    public function render()
    {
        return view('livewire.home-page',['articles' => $this->filterData()]);
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
