<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TestimonialResource\Pages;
use App\Models\Testimonial;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
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

class TestimonialResource extends Resource
{
    protected static ?string $model = Testimonial::class;

    protected static ?string $slug = 'testimonials';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->columns(1)
            ->extraAttributes(['class' => 'max-w-xl'])
            ->schema([
                Placeholder::make('created_at')
                    ->label('Created Date')
                    ->hiddenOn('create')
                    ->content(fn(?Testimonial $record): string => $record?->created_at?->diffForHumans() ?? '-'),

                Placeholder::make('updated_at')
                    ->label('Last Modified Date')
                    ->hiddenOn('create')
                    ->content(fn(?Testimonial $record): string => $record?->updated_at?->diffForHumans() ?? '-'),

                TextInput::make('review_link')
                    ->required(),

                Textarea::make('message')
                    ->rows(10)
                    ->required(),

                TextInput::make('client_name')
                    ->required(),

                FileUpload::make('client_avatar')
                    ->required(),

                FileUpload::make('project_photo')
                    ->required(),

                TextInput::make('stars')
                    ->minValue(1)
                    ->maxValue(5)
                    ->type('number')
                    ->required(),

                Checkbox::make('show_on_home_page'),
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
