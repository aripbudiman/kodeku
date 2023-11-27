<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Article extends Model
{
    use HasFactory,SoftDeletes;

    protected $guarded=[];

    public function topics(): BelongsToMany
    {
        return $this->morphToMany(Topic::class, 'topicable');
    }

    public function scopePublished(Builder $query): Builder
    {
        return $query->where('published', '!=', null)
            ->where('draft', false);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class,'author_id','id');
    }

    public function views(): HasMany
    {
        return $this->hasMany(ArticleView::class);
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('author_id', Auth::id());
    }

    public function bookmark()
    {
        return $this->hasMany(Bookmark::class);
    }
}
