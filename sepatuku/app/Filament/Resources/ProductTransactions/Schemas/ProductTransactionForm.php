<?php

namespace App\Filament\Resources\ProductTransactions\Schemas;

use App\Models\Shoe;
use App\Models\PromoCode;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Schemas\Components\Grid;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Wizard;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\ToggleButtons;
use Filament\Schemas\Components\Wizard\Step;

class ProductTransactionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Wizard::make()
                    ->steps([
                        Step::make('Product and Price')
                            ->schema([
                                Grid::make(2)
                                    ->schema([
                                        Select::make('shoe_id')
                                            ->relationship('shoe', 'name')
                                            ->searchable()
                                            ->preload()
                                            ->required()
                                            ->live()
                                            ->afterStateUpdated(function ($state, callable $get, callable $set) {
                                                $shoe = Shoe::find($state);
                                                $price = $shoe ? $shoe->price : 0;
                                                $quantity = $get('quantity') ?? 1;
                                                $subTotalAmount = $price * $quantity;

                                                $set('price', $price);
                                                $set('sub_total_amount', $subTotalAmount);

                                                $discount = $get('discount_amount') ?? 0;
                                                $grandTotalAmount = $subTotalAmount - $discount;
                                                $set('grand_total_amount', $grandTotalAmount);

                                                $sizes = $shoe ? $shoe->sizes->pluck('size', 'id')->toArray() : [];
                                                $set('shoe_sizes_options', $sizes);
                                                $set('shoe_size', null);
                                            })
                                            ->afterStateHydrated(function (callable $set, $state) {
                                                if ($state) {
                                                    $shoe = Shoe::find($state);
                                                    $sizes = $shoe ? $shoe->sizes->pluck('size', 'id')->toArray() : [];
                                                    $set('shoe_sizes_options', $sizes);
                                                }
                                            }),

                                        Select::make('shoe_size')
                                            ->label('Shoe Size')
                                            ->options(fn (callable $get): array => $get('shoe_sizes_options') ?? [])
                                            ->required()
                                            ->live(),

                                        TextInput::make('quantity')
                                            ->required()
                                            ->numeric()
                                            ->default(1)
                                            ->prefix('qty')
                                            ->live()
                                            ->afterStateUpdated(function ($state, callable $get, callable $set) {
                                                $price = $get('price');
                                                $quantity = $state;
                                                $subTotalAmount = $price * $quantity;

                                                $set('sub_total_amount', $subTotalAmount);

                                                $discount = $get('discount_amount') ?? 0;
                                                $grandTotalAmount = $subTotalAmount - $discount;
                                                $set('grand_total_amount', $grandTotalAmount);
                                            }),

                                        Select::make('promo_code_id')
                                            ->relationship('PromoCode', 'code')
                                            ->searchable()
                                            ->preload()
                                            ->live()
                                            ->afterStateUpdated(function ($state, callable $get, callable $set) {
                                                $subTotalAmount = $get('sub_total_amount');
                                                $promoCode = PromoCode::find($state);
                                                $discount = $promoCode ? $promoCode->discount_amount : 0;

                                                $set('discount_amount', $discount);

                                                $grandTotalAmount = $subTotalAmount - $discount;
                                                $set('grand_total_amount', $grandTotalAmount);
                                            }),

                                        TextInput::make('sub_total_amount')
                                            ->required()
                                            ->readOnly()
                                            ->numeric()
                                            ->prefix('IDR'),

                                        TextInput::make('grand_total_amount')
                                            ->required()
                                            ->readOnly()
                                            ->numeric()
                                            ->prefix('IDR'),

                                        TextInput::make('discount_amount')

                                            ->required()
                                            ->numeric()
                                            ->default(0)
                                            ->prefix('IDR'),
                                    ]),
                            ]),

                        Step::make('Customer Information')
                            ->schema([
                                Grid::make(2)
                                    ->schema([
                                        TextInput::make('name')
                                            ->required()
                                            ->maxLength(255),

                                        TextInput::make('phone')
                                            ->required()
                                            ->maxLength(255),

                                        TextInput::make('email')
                                            ->required()
                                            ->maxLength(255),

                                        Textarea::make('address')
                                            ->rows(5)
                                            ->required(),

                                        TextInput::make('city')
                                            ->required()
                                            ->maxLength(255),

                                        TextInput::make('post_code')
                                            ->required()
                                            ->maxLength(255),
                                    ]),
                            ]),

                        Step::make('Payment Information')
                            ->schema([
                                TextInput::make('booking_trx_id')
                                    ->required()
                                    ->maxLength(255),

                                ToggleButtons::make('is_paid')
                                    ->label('Apakah sudah membayar?')
                                    ->boolean()
                                    ->grouped()
                                    ->icons([
                                        true => 'heroicon-o-pencil',
                                        false => 'heroicon-o-clock',
                                    ])
                                    ->required(),

                                FileUpload::make('proof')
                                    ->image()
                                    ->disk('public')
                                    ->required(),
                            ])


                    ])
                    ->columnSpan('full')
                    ->columns(1)
                    ->skippable()
            ]);
    }
}
