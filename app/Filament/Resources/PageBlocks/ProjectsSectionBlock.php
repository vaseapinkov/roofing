<?php

namespace App\Filament\Resources\PageBlocks;

use App\Filament\Resources\Sections\SectionGeneral;
use Filament\Forms\Components\Builder\Block;

class ProjectsSectionBlock
{
    public static function block(): Block
    {
        return Block::make('projects-section')
            ->schema([
                SectionGeneral::section()
            ]);
    }
}
