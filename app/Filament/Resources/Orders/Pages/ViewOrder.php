<?php

namespace App\Filament\Resources\Orders\Pages;

use App\Enum\ContactStatusEnum;
use App\Filament\Resources\Orders\OrderResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\Concerns\InteractsWithRecord;
use Filament\Resources\Pages\ViewRecord;

class ViewOrder extends ViewRecord
{
    use InteractsWithRecord;
    protected static string $resource = OrderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }

    protected function afterFill(): void
    {

    }


}
