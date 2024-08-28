<?php

namespace App\Filament\Resources\PageBlocks;

use App\Filament\Resources\Sections\SectionCta;
use App\Filament\Resources\Sections\SectionGeneral;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Builder;
use Filament\Forms;

class SimpleCardGridBlock
{
    public static function block(): Builder\Block
    {
        return Builder\Block::make('simple-card-grid')
            ->schema([
                SectionGeneral::section(),
                SectionCta::section()->description('Visible when the number of element is not divisible by 3'),
                Forms\Components\Section::make('Content')
                    ->description('Grid with 3 columns')
                    ->schema([
                        Select::make('list_items')
                            ->options([
                                'services' => 'Services',
                                'projects' => 'Projects',
                                'custom' => 'Custom',
                            ])
                            ->live()
                            ->label('List Items')
                            ->required(),
                        Forms\Components\Repeater::make('custom_list_items')
                            ->columns(2)
                            ->label('Custom List Items')
                            ->visible(function (Forms\Get $get) {
                                return $get('list_items') == 'custom';
                            })
                            ->maxItems(3)
                            ->schema([
                                TextInput::make('title')
                                    ->label('Title')
                                    ->required(),
                                TextInput::make('description')
                                    ->label('Description')
                                    ->required(),
                                FileUpload::make('icon')
                                    ->label('Icon')
                                    ->hint('White Outline | 96x96px')
                                    ->image()
                                    ->imageEditor()
                                    ->required(),
                                FileUpload::make('image')
                                    ->label('Image')
                                    ->hint('470x315px')
                                    ->image()
                                    ->imageEditor()
                                    ->required(),
                            ]),
                    ]),
            ]);
    }
}
