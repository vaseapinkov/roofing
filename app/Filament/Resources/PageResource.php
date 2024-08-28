<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PageBlocks\ContactFormBlock;
use App\Filament\Resources\PageBlocks\CounterSectionBlock;
use App\Filament\Resources\PageBlocks\FeatureSectionBlock;
use App\Filament\Resources\PageBlocks\HeroSectionBlock;
use App\Filament\Resources\PageBlocks\SimpleCardGridBlock;
use App\Filament\Resources\PageBlocks\SimpleCardListBlock;
use App\Filament\Resources\PageBlocks\TestimonialsSliderBlock;
use App\Filament\Resources\PageResource\Pages;
use App\Models\Page;
use Filament\Forms\Components\Builder;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
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
use Illuminate\Support\Str;

class PageResource extends Resource
{
    protected static ?string $model = Page::class;

    protected static ?string $slug = 'pages';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->columns(2)
            ->schema([
                Section::make('General')
                    ->columnSpan(1)
                    ->schema([
                        TextInput::make('slug')
                            ->required()
                            ->unique(Page::class, 'slug', fn($record) => $record),

                        Select::make('navigation_type')
                            ->label('Navigation Type')
                            ->default('default')
                            ->options([
                                'default' => 'Default',
                                'floating' => 'Floating',
                            ])
                            ->required()
                            ->unique(Page::class, 'slug', fn($record) => $record),
                    ]),
                Section::make('SEO')
                    ->columnSpan(1)
                    ->schema([
                        TextInput::make('meat_title')
                            ->required()
                            ->afterStateUpdated(fn($state, callable $set) => $set('slug', Str::slug($state))),
                        Textarea::make('meta_description')
                            ->hint('Keep it under 160 characters')
                            ->maxLength(255)
                            ->required()
                            ->afterStateUpdated(fn($state, callable $set) => $set('slug', Str::slug($state))),
                        FileUpload::make('meat_image')
                            ->hint('1200x627')
                            ->label('Meat Image')
                            ->image()
                            ->imageEditor()
                            ->imageCropAspectRatio('1.91:1')
                            ->required(),
                    ]),
                Builder::make('content')
                    ->columnSpan(2)
                    ->label('Sections')
                    ->blocks([
                        HeroSectionBlock::block()->maxItems(1),
                        SimpleCardListBlock::block(),
                        FeatureSectionBlock::block(),
                        CounterSectionBlock::block(),
                        SimpleCardGridBlock::block(),
                        TestimonialsSliderBlock::block(),
                        ContactFormBlock::block(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('slug')
                    ->searchable()
                    ->sortable(),
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
            'index' => Pages\ListPages::route('/'),
            'create' => Pages\CreatePage::route('/create'),
            'edit' => Pages\EditPage::route('/{record}/edit'),
        ];
    }

    public static function getGloballySearchableAttributes(): array
    {
        return ['title', 'slug'];
    }
}
