<?php

namespace App\Filament\Resources\Contacts;

use App\Filament\Resources\Contacts\Pages\CreateContact;
use App\Filament\Resources\Contacts\Pages\EditContact;
use App\Filament\Resources\Contacts\Pages\ListContacts;
use App\Filament\Resources\Contacts\Schemas\ContactForm;
use App\Filament\Resources\Contacts\Tables\ContactsTable;
use App\Models\Contact;
use BackedEnum;
use Filament\Infolists\Components\TextEntry;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ContactResource extends Resource
{
    protected static ?string $model = Contact::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::Envelope;

    protected static ?string $recordTitleAttribute = 'Contact';

    public static function form(Schema $schema): Schema
    {
        return ContactForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ContactsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function infolist(Schema $schema): Schema
    {
        return $schema
            ->columns(1)
            ->components([
                Section::make('Message Details')
                    ->schema([
                        TextEntry::make('name')->label('Name'),
                        TextEntry::make('email')->label('Email'),
                        TextEntry::make('subject')->label('Subject'),
                        TextEntry::make('phone')->label('Phone'),
                        TextEntry::make('status')->label('Status')
                            ->badge()->colors([
                                'warning'  => 'unread',
                                'success'  => 'read',
                                'danger'   => 'cancelled',
                                'info'     => 'processing',
                            ]),
                        TextEntry::make('created_at')->isoTime('DD MMM YYYY hh:mm A')
                    ])->columns(3),

                Section::make('Message')
                    ->schema([
                        TextEntry::make('subject')->label('Subject')->columnSpan(2),
                        TextEntry::make('message')->label('Customer')->columnSpan(2)
                        ])
                    ->columns(2),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListContacts::route('/'),
           // 'create' => CreateContact::route('/create'),
          //  'edit' => EditContact::route('/{record}/edit'),
            'view' => Pages\ViewContact::route('/{record}')
        ];
    }
}
