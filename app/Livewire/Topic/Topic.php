<?php

namespace App\Livewire\Topic;

use App\Models\Topic as ModelsTopic;
use Livewire\Component;

class Topic extends Component
{
    public function render()
    {
        $topic = ModelsTopic::withCount('articles')->get();
        return view('livewire.topic.topic',[
            'topics' => $topic
        ]);
    }
}
