<?php

namespace App\Filament\Resources;

use App\Filament\Resources\Sections\SectionCta;
use App\Filament\Resources\SettingsResource\Pages;
use App\Models\Settings;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Repeater;
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
use Illuminate\Support\Facades\Storage;
use Spatie\Image\Image;

class SettingsResource extends Resource
{
    protected static ?string $model = Settings::class;

    protected static ?string $slug = 'settings';

    protected static bool $shouldRegisterNavigation = false;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('General')
                    ->collapsible()
                    ->collapsed()
                    ->columns(1)
                    ->schema([
                        TextInput::make('website_name')
                            ->hint('Will be prepended to all pages meta titles')
                            ->required(),

                        Textarea::make('about_us')
                            ->hint('Text displayed in the footer of the website')
                            ->rows(4)
                            ->required(),
                    ]),

                Section::make('Navbar')
                    ->collapsible()
                    ->collapsed()
                    ->columns(2)
                    ->schema([
                        TextInput::make('nav_cta_text')
                            ->required(),
                        TextInput::make('nav_cta_link')
                            ->required(),
                        Repeater::make('navbar_links')
                            ->columnSpan(2)
                            ->maxItems(7)
                            ->minItems(3)
                            ->grid(3)
                            ->reorderableWithDragAndDrop()
                            ->collapsible()
                            ->cloneable()
                            ->itemLabel(fn(array $state): ?string => $state['label'] ?? null)
                            ->schema([
                                TextInput::make('label')
                                    ->required(),
                                TextInput::make('link')
                                    ->required(),
                            ]),
                    ]),

                Section::make('Logos')
                    ->collapsible()
                    ->collapsed()
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

                Section::make('Contacts')
                    ->collapsible()
                    ->collapsed()
                    ->description('Basic Contact info + Google Maps iFrame Link')
                    ->schema([
                        TextInput::make('phone')
                            ->required(),

                        TextInput::make('address')
                            ->required(),

                        TextInput::make('contact_email')
                            ->label('Email')
                            ->type('email')
                            ->required(),

                        Textarea::make('g_maps_code')
                            ->label('Google Maps iFrame Link')
                            ->required(),
                    ]),

                Section::make('Social Links')
                    ->collapsible()
                    ->collapsed()
                    ->schema([
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

                Section::make('Instagram Posts')
                    ->collapsible()
                    ->collapsed()
                    ->description('List of 6 images shown at in the footer on all pages | Keep Images in a 1:1 aspect ratio, preferably 120x120px')
                    ->schema([
                        Repeater::make('instagram_posts')
                            ->label('Posts')
                            ->grid(2)
                            ->reorderableWithDragAndDrop()
                            ->collapsible()
                            ->cloneable()
                            ->maxItems(6)
                            ->defaultItems(6)
                            ->minItems(6)
                            ->required()
                            ->schema([
                                TextInput::make('instagram_link'),
                                FileUpload::make('image')
                                    ->imageCropAspectRatio('1:1')
                                    ->required(),
                            ]),
                    ]),

                Section::make('Embedded Scripts')
                    ->collapsible()
                    ->collapsed()
                    ->description('This scripts will load on every page, if you wish to add some code for a specific page check for a similar section in the page settings')
                    ->schema([
                        Textarea::make('scripts_head')
                            ->hint('Most of 3rd party scrips come here')
                            ->rows(10)
                            ->required(),

                        Textarea::make('scripts_body')
                            ->hint('Some scrips require to be added before the end of the "body" tag, add them here')
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
