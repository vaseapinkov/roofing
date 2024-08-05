<?php

namespace App\Filament\Resources\VisitorMessageResource\Pages;

use App\Filament\Resources\VisitorMessageResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewVisitorMessage extends ViewRecord
{
    protected static string $resource = VisitorMessageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
