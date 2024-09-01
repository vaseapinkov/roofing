<?php

namespace App\Filament\Resources\PageBlocks;

use App\Filament\Resources\Sections\SectionCta;
use App\Filament\Resources\Sections\SectionGeneral;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Builder;
use Filament\Forms\Components\Repeater;

class FeatureSectionBlock
{
    public static function block(): Builder\Block
    {
        return Builder\Block::make('feature-section')
            ->columns(2)
            ->schema([
                SectionGeneral::section(),
                SectionCta::section(false),
                Section::make('Content')
                    ->columns(2)
                    ->schema([
                        Select::make('layout')
                            ->columnSpan(2)
                            ->required()
                            ->default('image-right')
                            ->options([
                                'image-right' => 'Image Right + Text Left',
                                'image-left' => 'Image Left + Text Right',
                            ]),
                        RichEditor::make('content')
                            ->columnSpan(2)
                            ->toolbarButtons(['bulletList', 'bold', 'italic', 'underline', 'link'])
                            ->label('Text')
                            ->required(),
                        FileUpload::make('image')
                            ->label('Image Desktop')
                            ->hint('680x630px')
                            ->image()
                            ->imageEditor()
                            ->required(),
                        FileUpload::make('image_mobile')
                            ->label('Image Mobile')
                            ->hint('370x550px')
                            ->image()
                            ->imageEditor()
                            ->required(),
                        Repeater::make('features')
                            ->label('Features')
                            ->columnSpan(2)
                            ->columns(2)
                            ->maxItems(4)
                            ->schema([
                                TextInput::make('name')
                                    ->label('Title')
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
