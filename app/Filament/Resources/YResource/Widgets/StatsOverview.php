<?php

namespace App\Filament\Resources\YResource\Widgets;

use App\Models\Article;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Article', Article::where('author_id', auth()->id())->count()),
            Stat::make('Published', Article::where('draft', false)->where('author_id', auth()->id())->count()),
            Stat::make('Draft', Article::where('draft', true)->where('author_id', auth()->id())->count()),
        ];
    }
}
