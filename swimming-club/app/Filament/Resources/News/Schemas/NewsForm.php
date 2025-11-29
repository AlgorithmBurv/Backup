<?php

namespace App\Filament\Resources\News\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\DateTimePicker;

class NewsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Title')
                    ->required()
                    ->maxLength(255),

                TextInput::make('slug')
                    ->label('Slug')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->maxLength(255),

                Textarea::make('excerpt')
                    ->label('Excerpt')
                    ->rows(2)
                    ->nullable(),

                Textarea::make('content')
                    ->label('Content')
                    ->rows(6)
                    ->required(),

                FileUpload::make('image')
                    ->label('Image')
                    ->image()
                    ->disk('public')
                    ->nullable(),

                Toggle::make('is_published')
                    ->label('Published')
                    ->default(false),

                DateTimePicker::make('published_at')
                    ->label('Published At')
                    ->nullable(),
            ]);
    }
}
