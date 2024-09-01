<?php

namespace App\Filament\Resources\partnersResource\Pages;

use App\Filament\Resources\partnersResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class Editpartners extends EditRecord
{
    protected static string $resource = partnersResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
