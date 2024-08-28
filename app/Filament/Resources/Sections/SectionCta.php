<?php

namespace App\Filament\Resources\Sections;

use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;

class SectionCta
{
    public static function section(): Section
    {
        return Section::make('CTA')
            ->columns(2)
            ->schema([
                TextInput::make('cta_text')
                    ->label('Text')
                    ->required(),
                TextInput::make('cta_link')
                    ->label('Link')
                    ->required(),
            ]);
    }
}
