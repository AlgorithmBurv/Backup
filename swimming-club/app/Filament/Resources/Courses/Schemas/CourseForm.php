<?php

namespace App\Filament\Resources\Courses\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;

class CourseForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Course Name')
                    ->required()
                    ->maxLength(255),

                TextInput::make('location')
                    ->label('Location')
                    ->required()
                    ->maxLength(255),

                TextInput::make('schedule')
                    ->label('Schedule')
                    ->required()
                    ->maxLength(255),

                TextInput::make('price')
                    ->label('Price')
                    ->numeric()
                    ->prefix('Rp')
                    ->required(),

                Textarea::make('description')
                    ->label('Description')
                    ->rows(4)
                    ->nullable(),
            ]);
    }
}
