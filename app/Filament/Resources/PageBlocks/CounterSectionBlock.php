<?php

namespace App\Filament\Resources\PageBlocks;

use App\Filament\Resources\Sections\SectionGeneral;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Builder;
use Filament\Forms\Components\Repeater;

class CounterSectionBlock
{
    public static function block(): Builder\Block
    {
        return Builder\Block::make('counter-section')
            ->schema([
                SectionGeneral::section(hidden: ['heading', 'sub_heading']),
                Section::make('Content')->schema([
                    Repeater::make('items')
                        ->columns(3)
                        ->label('Items')
                        ->minItems(3)
                        ->maxItems(4)
                        ->schema([
                            TextInput::make('name')
                                ->label('Title')
                                ->required(),
                            TextInput::make('number')
                                ->type('number')
                                ->label('Number')
                                ->required(),
                            FileUpload::make('icon')
                                ->hint('White Outline | 40x40px')
                                ->label('Icon')
                                ->imagePreviewHeight(100)
                                ->image()
                                ->required(),
                        ]),
                ]),
            ]);
    }
}
