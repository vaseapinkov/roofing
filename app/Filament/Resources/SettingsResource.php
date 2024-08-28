<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SettingsResource\Pages;
use App\Models\Settings;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class SettingsResource extends Resource
{
    protected static ?string $model = Settings::class;

    protected static ?string $slug = 'settings';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('General')
                    ->columns(1)
                    ->schema([
                        TextInput::make('website_name')
                            ->hint('Will be prepended to all pages meta title')
                            ->required(),

                        Textarea::make('about_us')
                            ->hint('Text displayed in the footer of the website')
                            ->rows(4)
                            ->required(),

                    ]),

                Section::make('Logos')
                    ->columns(3)
                    ->schema([
                    FileUpload::make('fav_icon')
                        ->hint('260x260px')
                        ->required(),

                    FileUpload::make('logo_header')
                        ->hint('150x57px')
                        ->required(),

                    FileUpload::make('logo_footer')
                        ->hint('150x57px')
                        ->required(),
                ]),

                Section::make('Contacts')->schema([
                    TextInput::make('phone')
                        ->required(),

                    TextInput::make('address')
                        ->required(),

                    Textarea::make('g_maps_code')
                        ->label('Google Maps iFrame Link')
                        ->required(),

                    TextInput::make('contact_email')
                        ->label('Email')
                        ->type('email')
                        ->required(),

                ]),

                Section::make('Social Links')->schema([
                    TextInput::make('instagram_link')
                        ->label('Instagram')
                        ->required(),

                    TextInput::make('facebook_link')
                        ->label('Facebook')
                        ->required(),

                    TextInput::make('youtube_link')
                        ->label('YouTube')
                        ->required(),
                ]),

                Section::make('Embeded Scripts')
                    ->description('This scripts will load on every page, if you wish to add some code for a specific page check for a similar section in the page settings')
                    ->schema([
                        Textarea::make('scripts_head')
                            ->rows(10)
                            ->required(),

                        Textarea::make('scripts_body')
                            ->rows(10)
                            ->required(),

                        Textarea::make('css_head')
                            ->rows(10)
                            ->required(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('website_name'),

                TextColumn::make('fav_icon'),

                TextColumn::make('logo_header'),

                TextColumn::make('logo_footer'),

                TextColumn::make('phone'),

                TextColumn::make('address'),

                TextColumn::make('g_maps_code'),

                TextColumn::make('instagram_link'),

                TextColumn::make('facebook_link'),

                TextColumn::make('youtube_link'),

                TextColumn::make('about_us'),

                TextColumn::make('contact_email'),

                TextColumn::make('scripts_head'),

                TextColumn::make('scripts_body'),

                TextColumn::make('css_head'),
            ])
            ->filters([
                //
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
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
            'index' => Pages\ListSettings::route('/'),
            'create' => Pages\CreateSettings::route('/create'),
            'edit' => Pages\EditSettings::route('/{record}/edit'),
        ];
    }

    public static function getGloballySearchableAttributes(): array
    {
        return [];
    }
}
