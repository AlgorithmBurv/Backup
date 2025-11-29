<?php

namespace App\Filament\Resources\Coaches\Schemas;

use Filament\Forms;
use Filament\Schemas\Schema;

class CoachForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            Forms\Components\TextInput::make('name')
                ->label('Name')
                ->required()
                ->maxLength(255),

            Forms\Components\FileUpload::make('photo')
                ->label('Photo')
                ->image()
                ->disk('public')
                ->maxSize(2048),

            Forms\Components\TextInput::make('specialization')
                ->label('Specialization')
                ->required()
                ->maxLength(255),

            Forms\Components\Textarea::make('bio')
                ->label('Biography')
                ->rows(4)
                ->columnSpanFull(),

            Forms\Components\TextInput::make('certification')
                ->label('Certification')
                ->maxLength(255),
        ]);
    }
}
