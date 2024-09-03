<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Models\Project;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\DatePicker;
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
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $slug = 'projects';

    protected static ?string $navigationIcon = 'heroicon-o-home';

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('General')
                    ->collapsible()
                    ->collapsed()
                    ->columns(2)
                    ->schema([
                        TextInput::make('name')
                            ->maxLength(255)
                            ->required(),

                        TextInput::make('project_type')
                            ->maxLength(255)
                            ->required(),

                        DatePicker::make('start_date')
                            ->required(),

                        DatePicker::make('end_date')
                            ->required(),

                        TextInput::make('client_name'),

                        Toggle::make('show_on_home_page')
                            ->columnSpan(2)
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
                            ->columnSpan(1)
                            ->rows(4)
                            ->maxLength(300)
                            ->required(),

                        FileUpload::make('home_page_image')
                            ->hint('470x315px')
                            ->columnSpan(1)
                            ->label('Image')
                            ->imagePreviewHeight(200)
                            ->required(),
                    ]),
                Section::make('Details Page')
                    ->columns(2)
                    ->collapsible()
                    ->collapsed()
                    ->schema([
                        Textarea::make('meta_description')
                            ->hint('Keep it under 160 characters')
                            ->columnSpan(1)
                            ->rows(3)
                            ->maxLength(255)
                            ->required(),
                        FileUpload::make('meta_image')
                            ->hint('1200x627')
                            ->columnSpan(1)
                            ->label('Meta Image')
                            ->image()
                            ->imageEditor()
                            ->imageCropAspectRatio('1.91:1')
                            ->required(),

                        RichEditor::make('content')
                            ->columnSpan(2)
                            ->fileAttachmentsDirectory('project-details')
                            ->label('Content')
                            ->required(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('project_type'),

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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }

    public static function getGloballySearchableAttributes(): array
    {
        return ['name'];
    }
}
