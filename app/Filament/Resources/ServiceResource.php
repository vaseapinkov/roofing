<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceResource\Pages;
use App\Models\Service;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class ServiceResource extends Resource
{
    protected static ?string $model = Service::class;

    protected static ?string $slug = 'services';

    protected static ?string $navigationIcon = 'heroicon-o-wrench-screwdriver';

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('General')
                    ->collapsible()
                    ->collapsed()
                    ->schema([
                        TextInput::make('name')
                            ->required(),

                        Toggle::make('show_on_home_page')
                            ->required(),

                    ]),
                Section::make('SEO')
                    ->collapsible()
                    ->collapsed()
                    ->columns(2)
                    ->schema([
                        Textarea::make('meta_description')
                            ->hint('Keep it under 160 characters')
                            ->rows(3)
                            ->maxLength(255)
                            ->required(),
                        FileUpload::make('meta_image')
                            ->hint('1200x627')
                            ->label('Meta Image')
                            ->image()
                            ->imageEditor()
                            ->imageCropAspectRatio('1.91:1')
                            ->required(),
                    ]),
                Section::make('Home Page')
                    ->collapsible()
                    ->collapsed()
                    ->columns(2)
                    ->schema([
                        Textarea::make('home_page_description')
                            ->hint('Keep it under 280 characters.')
                            ->label('Description')
                            ->columnSpan(2)
                            ->rows(5)
                            ->required(),

                        FileUpload::make('icon')
                            ->hint('White Outline | 96x96px')
                            ->columnSpan(1)
                            ->label('Icon')
                            ->imagePreviewHeight(100)
                            ->required(),

                        FileUpload::make('home_page_image')
                            ->hint('470x315px')
                            ->columnSpan(1)
                            ->label('Image')
                            ->imagePreviewHeight(200)
                            ->required(),
                    ]),
                Section::make('Details Page')
                    ->collapsible()
                    ->collapsed()
                    ->schema([
                        RichEditor::make('content')
                            ->fileAttachmentsDirectory('service-details')
                            ->label('Content')
                            ->required(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('home_page_icon')
                    ->label('Icon')
                    ->size(40),

                TextColumn::make('name')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('home_page_description')->limit(50),

                ToggleColumn::make('show_on_home_page'),
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
            'index' => Pages\ListServices::route('/'),
            'create' => Pages\CreateService::route('/create'),
            'edit' => Pages\EditService::route('/{record}/edit'),
        ];
    }

    public static function getGloballySearchableAttributes(): array
    {
        return ['name'];
    }
}
