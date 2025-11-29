<?php

namespace App\Filament\Resources\Shoes\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Fieldset;
use Filament\Schemas\Schema; // <-- Diubah ke Schema

class ShoeForm
{
    public static function configure(Schema $schema): Schema // <-- Diubah ke Schema
    {
        return $schema
            ->components([ // <-- Diubah ke components()
                Fieldset::make('Details')
                    ->schema([
                        TextInput::make('name')
                            ->required()
                            ->maxLength(255),

                        TextInput::make('price')
                            ->required()
                            ->numeric()
                            ->prefix('IDR'),

                        FileUpload::make('thumbnail')
                            ->image()
                            ->disk('public')
                            ->required(),

                        Repeater::make('photos')
                            ->relationship('photos')
                            ->schema([
                                FileUpload::make('photo')
                                    ->disk('public')
                                    ->required(),
                            ]),

                        Repeater::make('sizes')
                            ->relationship('sizes')
                            ->schema([
                                TextInput::make('size')
                                    ->required(),
                            ]),
                    ])
                    ->columnSpan('full')
                    ->columns(2),
                Fieldset::make('Additional')
                    ->schema([
                        Textarea::make('about')
                            ->required(),

                        Select::make('is_popular')
                            ->options([
                                true => 'Popular',
                                false => 'Not Popular',
                            ])
                            ->required(),

                        Select::make('category_id')
                            ->relationship('category', 'name')
                            ->searchable()
                            ->preload()
                            ->required(),

                        Select::make('brand_id')
                            ->relationship('brand', 'name')
                            ->searchable()
                            ->preload()
                            ->required(),

                        TextInput::make('stock')
                            ->required()
                            ->numeric()
                            ->prefix('Qty'),
                    ])
                    ->columnSpan('full')
                    ->columns(2)

            ]);
    }
}
