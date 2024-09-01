<?php

namespace App\Filament\Resources\PageBlocks;

use App\Filament\Resources\Sections\SectionGeneral;
use Filament\Forms\Components\Builder;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;

class TextSectionBlock
{
    public static function block(): Builder\Block
    {
        return Builder\Block::make('text_section')
            ->columns(2)
            ->schema([
                SectionGeneral::section(),
                RichEditor::make('content')->columnSpan(2),
            ]);
    }
}
