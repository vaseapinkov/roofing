<?php

namespace App\Filament\Resources\PageBlocks;

use App\Filament\Resources\Sections\SectionGeneral;
use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;

class ScriptSectionBlock
{
    public static function block(): Block
    {
        return Block::make('script-section')
            ->schema([
                Textarea::make('embedded_scripts')
                    ->hint('Add custom HTML, JS and/or CSS')
                    ->rows(10)
                    ->required()
            ]);
    }
}
