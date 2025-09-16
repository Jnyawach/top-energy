<?php

namespace App\Filament\Resources\Orders\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class OrderForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(1)
            ->components([
                Section::make('Customer Details')
                    ->columns([
                        'sm' => 2
                    ])
                    ->schema([
                        TextInput::make('customer_name')->label('Name')->required()->maxLength(100),
                        TextInput::make('phone_number')->label('Phone Number')->required()->maxLength(25),
                        TextInput::make('email')->label('Email')->nullable()->maxLength(50),
                        TextInput::make('company_name')->label('Company')->nullable()->maxLength(50),
                    ]),
                Section::make('Product Details')
                    ->columns([
                        'sm' => 3
                    ])
                ->schema([
                    Select::make('product_id')
                        ->label('Product')
                        ->relationship(
                            'product',
                            'name',
                            fn ($query) => $query->orderBy('name')
                        )
                        ->getOptionLabelFromRecordUsing(fn ($record) => "{$record->name} ({$record->uom})")
                        ->searchable()
                        ->preload()
                        ->required(),
                    TextInput::make('quantity')->label('Quantity')->required()->numeric(),
                ])
                ,
                Section::make('Delivery Details')
                    ->columns([
                        'sm' => 2
                    ])
                ->schema([
                    TextInput::make('street_address')->label('Street Address')
                        ->required()->maxLength(255),
                    TextInput::make('city')->label('City')->required()->maxLength(100),
                    TextInput::make('country')->label('Country')->required()->maxLength(100),
                    DatePicker::make('preferred_delivery_date')->label('Preferred Delivery Date')->nullable(),
                ])
            ]);
    }
}
