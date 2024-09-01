<?php

namespace App\Filament\Resources\partnersResource\Pages;

use App\Filament\Resources\partnersResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class Listpartners extends ListRecords
{
    protected static string $resource = partnersResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
