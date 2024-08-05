<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VisitorMessageResource\Pages;
use App\Models\VisitorMessage;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class VisitorMessageResource extends Resource
{
    protected static ?string $model = VisitorMessage::class;

    protected static ?string $slug = 'visitor-messages';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Placeholder::make('created_at')
                    ->label('Created Date')
                    ->content(fn(?VisitorMessage $record): string => $record?->created_at?->diffForHumans() ?? '-'),

                Placeholder::make('updated_at')
                    ->label('Last Modified Date')
                    ->content(fn(?VisitorMessage $record): string => $record?->updated_at?->diffForHumans() ?? '-'),

                TextInput::make('firs_name')
                    ->required(),

                TextInput::make('last_name')
                    ->required(),

                TextInput::make('email')
                    ->required(),

                TextInput::make('phone')
                    ->required(),

                TextInput::make('subject')
                    ->required(),

                TextInput::make('message')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('firs_name'),

                TextColumn::make('last_name'),

                TextColumn::make('subject'),

                TextColumn::make('email'),
            ])
            ->filters([
                //
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
                ViewAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListVisitorMessages::route('/'),
            'edit' => Pages\EditVisitorMessage::route('/{record}/edit'),
            'view' => Pages\ViewVisitorMessage::route('/{record}'),
        ];
    }

    public static function getGloballySearchableAttributes(): array
    {
        return [];
    }
}
