<?php

namespace App\Filament\Resources\PageBlocks;

use App\Filament\Resources\Sections\SectionCta;
use App\Filament\Resources\Sections\SectionGeneral;
use Filament\Forms\Components\Builder;

class ServicesSectionBlock
{
    public static function block(): Builder\Block
    {
        return Builder\Block::make('services-section')
            ->schema([
                SectionGeneral::section(),
                SectionCta::section()->description('Visible when the number of element is not divisible by 3'),
            ]);
    }
}
