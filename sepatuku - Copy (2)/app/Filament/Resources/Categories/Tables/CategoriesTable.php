<?php

namespace App\Filament\Resources\Categories\Tables;

use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\RestoreBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Actions\ForceDeleteBulkAction;


class CategoriesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                // Panggil kelasnya langsung setelah diimpor
                TextColumn::make('name')
                    ->searchable(),

                ImageColumn::make('icon')
                    ->disk('public')
                    ->circular(),
            ])
            ->filters([
                TrashedFilter::make(),
            ])
            ->recordActions([ // Sebaiknya gunakan recordActions, bukan actions
                EditAction::make(),
            ])
            ->toolbarActions([ // Sebaiknya gunakan toolbarActions, bukan bulkActions
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                    ForceDeleteBulkAction::make(),
                    RestoreBulkAction::make(),
                ]),
            ]);
    }
}
