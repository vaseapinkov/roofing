<?php

namespace App\Filament\Resources\partnersResource\Pages;

use App\Filament\Resources\partnersResource;
use Filament\Resources\Pages\CreateRecord;

class Createpartners extends CreateRecord
{
    protected static string $resource = partnersResource::class;

    protected function getHeaderActions(): array
    {
        return [

        ];
    }
}
