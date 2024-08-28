<?php

namespace App\Filament\Resources\PageBlocks;

use App\Filament\Resources\Sections\SectionCta;
use App\Filament\Resources\Sections\SectionGeneral;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Builder;

class HeroSectionBlock
{
    public static function block(): Builder\Block
    {
        return Builder\Block::make('hero')
            ->label('Hero')
            ->schema([
                SectionGeneral::section(),
                SectionCta::section(),
                Section::make('Background Image')
                    ->columns(2)
                    ->schema([
                        FileUpload::make('background_image')
                            ->hint('1905x905px')
                            ->label('Desktop Image')
                            ->image()
                            ->imageEditor()
                            ->imageCropAspectRatio('16:9')
                            ->required(),
                        FileUpload::make('background_image_mobile')
                            ->hint('400x950px')
                            ->label('Mobile Image')
                            ->image()
                            ->imageEditor()
                            ->imageCropAspectRatio('1:2')
                            ->required(),
                    ]),
            ])->columns(1);
    }
}
