<?php

namespace App\Filament\Resources\PageBlocks;

use App\Filament\Resources\Sections\SectionGeneral;
use Filament\Forms\Components\Builder;

class TestimonialsSliderBlock
{
    public static function block(): Builder\Block
    {
        return Builder\Block::make('testimonials-slider')
            ->columns(2)
            ->schema([
                SectionGeneral::section()
            ]);
    }
}
