<?php

namespace App\Filament\Resources\PageBlocks;

use App\Filament\Resources\Sections\SectionGeneral;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Builder;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Get;

class CardListSectionBlock
{
    public static function block(): Builder\Block
    {
        return Builder\Block::make('card-list-section')
            ->schema([
                SectionGeneral::section(hidden: ['heading', 'sub_heading']),

                Section::make('Styling')
                    ->columns(2)
                    ->schema([
                        Toggle::make('has_background_image')
                            ->required()
                            ->live()
                            ->label('Has Background Image'),

                        Toggle::make('overlap')
                            ->required()
                            ->label('Overlap Previous Section'),

                        FileUpload::make('background_image')
                            ->required()
                            ->columnSpan(2)
                            ->label('Background Image')
                            ->visible(fn (Get $get) => $get('has_background_image'))
                            ->hint('Size depends on how many cards you plan to display'),
                    ]),

                Section::make('Content')
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
