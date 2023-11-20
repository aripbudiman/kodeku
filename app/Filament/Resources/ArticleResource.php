<?php

namespace App\Filament\Resources;

use to;
use Filament\Forms;
use Filament\Tables;
use App\Models\Article;
use Filament\Forms\Set;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Section;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ArticleResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ArticleResource\RelationManagers;

class ArticleResource extends Resource
{
    protected static ?string $model = Article::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Group::make()
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->live()
                            ->debounce(1000)
                            ->afterStateUpdated(fn(Set $set,?String $state )=> $set('slug',Str::slug($state)))
                            ->required()
                            ->unique(ignoreRecord:true)
                            ->maxLength(255),
                        Forms\Components\TextInput::make('slug')
                            ->readOnly()
                            ->unique(ignoreRecord:true)
                            ->required(),
                        Forms\Components\MarkdownEditor::make('content')
                            ->required()
                            ->maxLength(65535),
                    ])
                    ->columnSpan(2),
                Forms\Components\Group::make()
                    ->schema([
                        Section::make('Thumbnail')
                        ->schema([
                            Forms\Components\FileUpload::make('thumbnail')
                                ->disk(config('filesystems.default'))
                                ->directory('public/thumbnail')
                                ->visibility('public')
                                ->label('')
                                ->imageEditor()
                        ]),
                        Section::make('Lain Lain')
                        ->schema([
                            Select::make('topics')
                                    ->label('Topics')
                                    ->relationship('topics', 'name')
                                    ->preload()
                                    ->searchable()
                                    ->multiple(),
                        Toggle::make('draft')
                                    ->label('Simpan Sebagai Draf'),
                        ]),
                    ])
                ->columnSpan(1),
            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')->label('penulis'),
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\ToggleColumn::make('draft')
                ->label('Draf'),
                Tables\Columns\ImageColumn::make('thumbnail')->disk(config('filesystems.default')),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListArticles::route('/'),
            'create' => Pages\CreateArticle::route('/create'),
            'edit' => Pages\EditArticle::route('/{record}/edit'),
        ];
    }
}
