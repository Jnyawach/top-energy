<?php

namespace App\Filament\Resources\Orders\Tables;

use App\Enum\OrderStatusEnum;
use Filament\Forms\Components\Select;
use Filament\Notifications\Notification;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class OrdersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('customer_name')->label('Customer'),
                TextColumn::make('phone_number')->label('Phone Number'),
                TextColumn::make('email')->label('Email'),
                TextColumn::make('product.name')->label('Product'),
                TextColumn::make('quantity')->label('Quantity'),
                TextColumn::make('uom')->label('UOM'),
                TextColumn::make('amount')->label('Amount')
                    ->money('CDF'),
                TextColumn::make('status')
                ->badge()->colors([
                        'warning'  => 'pending',
                        'success'  => 'completed',
                        'danger'   => 'cancelled',
                        'info'     => 'processing',
                    ])





            ])
            ->filters([
                SelectFilter::make('status')
                    ->label('Status')
                    ->options(OrderStatusEnum::class)
                    ->default(OrderStatusEnum::PENDING->value)
            ])
            ->defaultSort('created_at', 'desc')
            ->recordActions([
                ActionGroup::make([
                    ViewAction::make(),
                    EditAction::make(),
                    Action::make('update_status')
                        ->label('Update Status')
                        ->icon('heroicon-m-check-circle')
                        ->modalHeading('Update order status')
                        ->fillForm(fn ($record) => [
                            'status' => $record->status,
                        ])

                        ->schema([
                            Select::make('status')
                                ->label('Status')
                                ->options([
                                    'pending'    => 'Pending',
                                    'processing' => 'Processing',
                                    'completed'  => 'Completed',
                                    'cancelled'  => 'Cancelled',
                                ])
                                ->required(),
                        ])
                        ->action(function (array $data, $record): void {
                            $record->update([
                                'status' => $data['status'],
                            ]);

                            Notification::make()
                                ->title('Order status updated')
                                ->success()
                                ->send();
                        }),

                    DeleteAction::make(),
                ])

            ])
            ->toolbarActions([
                BulkActionGroup::make([

                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
