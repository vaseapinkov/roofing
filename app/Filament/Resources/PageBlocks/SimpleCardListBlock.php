<?php

namespace App\Filament\Resources\PageBlocks;

use App\Filament\Resources\Sections\SectionGeneral;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Builder;
use Filament\Forms;
use Filament\Forms\Get;

class SimpleCardListBlock
{
    public static function block(): Builder\Block
    {
        return Builder\Block::make('simple-card-list')
            ->schema([
                SectionGeneral::section(hidden: ['heading', 'sub_heading']),
                Section::make('Content')
                    ->description('Overlaps with previous section')
                    ->schema([
                    Repeater::make('items')
                        ->columns(2)
                        ->label('List Items')
                        ->maxItems(3)
                        ->schema([
                            TextInput::make('title')
                                ->label('Title')
                                ->required(),
                            TextInput::make('description')
                                ->label('Description')
                                ->required(),
                            FileUpload::make('image')
                                ->label('Image')
                                ->image()
                                ->imageEditor()
                                ->required(),
                        ]),
                ]),
            ]);
    }
}
