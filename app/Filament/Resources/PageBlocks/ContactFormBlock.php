<?php

namespace App\Filament\Resources\PageBlocks;

use App\Filament\Resources\Sections\SectionGeneral;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Builder;
use Filament\Forms;

class ContactFormBlock
{
    public static function block(): Builder\Block
    {
        return Builder\Block::make('contact-form')
            ->schema([
                SectionGeneral::section(),
                Forms\Components\Section::make('Form')
                    ->columns(2)
                    ->schema([
                        TextInput::make('cta_text')
                            ->label('CTA Text')
                            ->required(),
                        TextInput::make('success_message')
                            ->label('Success Message')
                            ->hint('Displayed after successful form submission')
                            ->required(),
                        Select::make('layout')
                            ->default('small')
                            ->options([
                                'basic' => 'Basic (Name and Email)',
                                'book-appointment' => 'Book Appointment (Name, Email, Phone, Address, Message)',
                            ]),
                    ]),
            ]);
    }
}
