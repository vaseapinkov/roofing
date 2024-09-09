<?php

namespace App\Filament\Resources\PageBlocks;

use App\Filament\Resources\Sections\SectionGeneral;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Builder;
use Filament\Forms\Components\Repeater;

class StepsSectionBlock
{
    public static function block(): Builder\Block
    {
        return Builder\Block::make('steps-section')
            ->schema([
                SectionGeneral::section(),
                Section::make('Content')->schema([
                    Repeater::make('items')
                        ->columns(3)
                        ->label('Items')
                        ->minItems(3)
                        ->maxItems(8)
                        ->collapsible()
                        ->collapsed()
                        ->cloneable()
                        ->reorderableWithDragAndDrop()
                        ->itemLabel(fn(array $state): ?string => $state['title'] ?? null)
                        ->schema([
                            TextInput::make('title')
                                ->label('Title')
                                ->required(),
                            Textarea::make('description')
                                ->label('Description')
                                ->required(),
                            FileUpload::make('image')
                                ->hint('94x144px')
                                ->label('image')
                                ->imagePreviewHeight(144)
                                ->image()
                                ->required(),
                        ]),
                ]),
            ]);
    }
}
