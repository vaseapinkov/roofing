<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TestimonialResource\Pages;
use App\Models\Testimonial;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Placeholder;
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
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Schema;

class TestimonialResource extends Resource
{
    protected static ?string $model = Testimonial::class;

    protected static ?string $slug = 'testimonials';

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-bottom-center-text';

    protected static ?int $navigationSort = 6;

    public static function form(Form $form): Form
    {
        return $form
            ->columns(1)
            ->schema([
                Section::make('Client')
                    ->schema([
                        TextInput::make('client_name')
                            ->maxLength(255)
                            ->required(),

                        FileUpload::make('client_avatar')
                            ->hint('50x50px')
                            ->imageCropAspectRatio('1:1')
                            ->required(),
                    ]),
                Section::make('Review Details')
                    ->columns(2)
                    ->schema([
                        Toggle::make('show_on_home_page')
                            ->columnSpan(2)
                            ->required(),

                        TextInput::make('review_link')
                            ->columnSpan(1)
                            ->hint('Link to review usually form Google Maps')
                            ->required(),

                        TextInput::make('stars')
                            ->columnSpan(1)
                            ->minValue(1)
                            ->maxValue(5)
                            ->type('number')
                            ->required(),

                        Textarea::make('message')
                            ->columnSpan(2)
                            ->hint('Keep under 300 characters')
                            ->rows(6)
                            ->required(),


                        FileUpload::make('project_photo')
                            ->columnSpan(2)
                            ->hint('Max Height 500px')
                            ->required(),

                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('client_avatar')
                    ->label("Avatar")
                    ->alignCenter()
                    ->size(40),

                TextColumn::make('client_name')
                    ->label("Name"),

                TextColumn::make('client_title')
                    ->label("Title"),

                TextColumn::make('message')
                    ->label("Review Message")
                    ->limit(50),


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
            'index' => Pages\ListTestimonials::route('/'),
            'create' => Pages\CreateTestimonial::route('/create'),
            'edit' => Pages\EditTestimonial::route('/{record}/edit'),
        ];
    }

    public static function getGloballySearchableAttributes(): array
    {
        return [];
    }
}
