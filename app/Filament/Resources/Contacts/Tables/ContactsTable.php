<?php

namespace App\Filament\Resources\Contacts\Tables;

use App\Enum\ContactStatusEnum;
use Filament\Actions\ActionGroup;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;

class ContactsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([

                 TextColumn::make('name')->label('Name')->searchable(),
                 TextColumn::make('email')->label('Email')->searchable(),
                 TextColumn::make('subject')->label('Subject')->searchable(),
                 TextColumn::make('phone')->label('Phone'),
                 TextColumn::make('status')->label('Status')
                     ->badge()->colors([
                         'warning'  => 'unread',
                         'success'  => 'read',
                         'danger'   => 'cancelled',
                         'info'     => 'processing',
                     ]),
                TextColumn::make('created_at')->timezone('Africa/Lubumbashi')->isoTime('DD MMM YYYY hh:mm A')
                ,
            ])
            ->filters([
                SelectFilter::make('status')
                    ->label('Status')
                    ->options(ContactStatusEnum::class)
                    ->default(ContactStatusEnum::UNREAD->value)
            ])
            ->defaultSort('created_at', 'desc')
            ->recordActions([
                ActionGroup::make([
                    ViewAction::make()
                    ])
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
