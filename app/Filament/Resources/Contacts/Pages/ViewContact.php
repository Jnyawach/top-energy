<?php

namespace App\Filament\Resources\Contacts\Pages;

use App\Enum\ContactStatusEnum;
use App\Filament\Resources\Contacts\ContactResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewContact extends ViewRecord
{
    protected static string $resource = ContactResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make()
        ];
    }


    public function mount($record): void
    {
        parent::mount($record);
        $message = $this->getRecord();

        if($message->status==ContactStatusEnum::UNREAD->value) {
            $message->update(['status' => ContactStatusEnum::READ->value]);
        }
    }
}
