<?php

namespace App\Filament\Resources\Sections;

use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;

class SectionGeneral
{
    public static function section(array $hidden = []): Section
    {
        return Section::make('Section General')
            ->columns(2)
            ->schema([
                TextInput::make('heading')
                    ->label('Heading')
                    ->hidden(in_array('heading', $hidden)),
                TextInput::make('sub_heading')
                    ->hidden(in_array('sub_heading', $hidden))
                    ->label('Sub Heading'),
                TextInput::make('custom_id')
                    ->hidden(in_array('custom_id', $hidden))
                    ->label('Section ID'),
                TextInput::make('custom_classes')
                    ->hidden(in_array('custom_classes', $hidden))
                    ->label('CSS Classes')
                    ->hint('Add only if you plan to add custom CSS rules, space separated'),
            ]);
    }
}
