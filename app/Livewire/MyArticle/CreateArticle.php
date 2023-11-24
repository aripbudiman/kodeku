<?php

namespace App\Livewire\MyArticle;

use Filament\Forms\Set;
use Livewire\Component;
use Filament\Forms\Form;
use Illuminate\Support\Str;
use Filament\Forms\Components\FileUpload;
use Illuminate\Contracts\View\View;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Concerns\InteractsWithForms;

class CreateArticle extends Component implements HasForms
{
    use InteractsWithForms;

    public ?array $data = [];
    
    public function mount(): void
    {
        $this->form->fill();
    }
    
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                MarkdownEditor::make('text')
                    ->fileAttachmentsDisk('admin-uploads')
                    ->fileAttachmentsVisibility('public')
                    ->required(),
            ]);
    }
    public function render(): View
    {
        return view('livewire.my-article.create-article');
    }

    public function create(): void
    {
        dd($this->form->getState());
    }
}
