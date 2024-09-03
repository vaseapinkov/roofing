<?php

namespace App\Filament\Resources\PageBlocks;

use App\Filament\Resources\Sections\SectionGeneral;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Builder;
use Filament\Forms\Components\Repeater;

class PartnersSectionBlock
{
    public static function block(): Builder\Block
    {
        return Builder\Block::make('partners-section')
            ->schema([
                SectionGeneral::section(hidden: ['heading', 'subheading']),
            ]);
    }
}
