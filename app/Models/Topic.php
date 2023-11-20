<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Topic extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function articles(): BelongsToMany
    {
        return $this->morphedByMany(Article::class, 'topicable','topicables','topic_id','topicable_id');
    }
}
