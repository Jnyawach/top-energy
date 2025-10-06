<?php

namespace App\Filament\Resources\Products\Tables;

use App\Models\Product;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ProductsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->label('Name')->searchable(),
                TextColumn::make('price')->label('Price'),
                TextColumn::make('uom')->label('UOM'),
                TextColumn::make('status')
                    ->badge()
                    ->formatStateUsing(fn (Product $record) => $record->status === 1 ? 'Active' : 'Inactive')
                    ->color(function (Product $record) {
                        return $record->status === 1 ? 'success' : 'danger';
                    })
                    ->label('Status'),

            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make()
                ->modalWidth('xl')
                ->modalHeading('Edit Product')
                ->modalSubmitActionLabel('Update Product')
                ->modalCancelActionLabel('Cancel')
                ->modal(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
