<?php

namespace App\Filament\Resources\Orders;

use App\Filament\Resources\Orders\Pages\CreateOrder;
use App\Filament\Resources\Orders\Pages\EditOrder;
use App\Filament\Resources\Orders\Pages\ListOrders;
use App\Filament\Resources\Orders\Schemas\OrderForm;
use App\Filament\Resources\Orders\Tables\OrdersTable;
use App\Models\Order;
use BackedEnum;
use Filament\Infolists\Components\TextEntry;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Form;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Filament\Infolists;

class OrderResource extends Resource
{
    protected static ?string $model = Order::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedShoppingBag;


    protected static ?string $recordTitleAttribute = 'Order';

    public static function form(Schema $schema): Schema
    {
        return OrderForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return OrdersTable::configure($table);
    }

    public static function infolist(Schema $schema): Schema
    {
        return $schema
            ->columns(1)
            ->components([
                Section::make('Order Details')
                    ->schema([
                        TextEntry::make('product.name')->label('Product'),
                        TextEntry::make('quantity'),
                        TextEntry::make('uom'),
                        TextEntry::make('amount')->money('CDF'),
                        TextEntry::make('created_at')->label('Order Date')->dateTime(),
                        TextEntry::make('status')->badge()
                            ->colors([
                                'primary'   => 'pending',
                                'success'   => 'completed',
                                'danger'    => 'cancelled',
                                'warning'   => 'processing',
                            ]),
                    ])->columns(3),
                Section::make('Delivery Details')
                ->schema([
                    TextEntry::make('street_address'),
                    TextEntry::make('city'),
                    TextEntry::make('country'),
                    TextEntry::make('preferred_delivery_date')->dateTime(),
                ])->columns(3),
                Section::make('Customer Details')
                    ->schema([
                        TextEntry::make('customer_name')->label('Customer'),
                        TextEntry::make('phone_number')->label('Phone Number'),
                        TextEntry::make('email')

                    ])
                    ->columns(2),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListOrders::route('/'),
            'create' => CreateOrder::route('/create'),
            'edit' => EditOrder::route('/{record}/edit'),
            'view' => Pages\ViewOrder::route('/{record}')
        ];
    }
}
