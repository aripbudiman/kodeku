<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ArticleView extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function article(): BelongsTo
    {
        return $this->belongsTo(Article::class);
    }
}
