<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Forms\Components\Radio;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(1)
            ->components([
                TextInput::make('name')->label('Name')->required()->maxLength(100),
                Radio::make('status')->options([
                    1 => 'Active',
                    0 => 'Inactive',
                ])->default(1)->inline(),
                Section::make()
                    ->columns([
                        'sm' => 1,
                        'md' => 2
                    ])
            ->schema([
                TextInput::make('price')->label('Price')->nullable()->numeric(),
                TextInput::make('uom')->label('UOM')->nullable()->maxLength(100),
            ]),

                RichEditor::make('description')->label('Description')->nullable(),
            ]);
    }
}
