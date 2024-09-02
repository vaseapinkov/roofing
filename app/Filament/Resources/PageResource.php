<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PageBlocks\ContactFormBlock;
use App\Filament\Resources\PageBlocks\CounterSectionBlock;
use App\Filament\Resources\PageBlocks\FeatureSectionBlock;
use App\Filament\Resources\PageBlocks\HeroSectionBlock;
use App\Filament\Resources\PageBlocks\PartnersSectionBlock;
use App\Filament\Resources\PageBlocks\ProjectsSectionBlock;
use App\Filament\Resources\PageBlocks\ServicesSectionBlock;
use App\Filament\Resources\PageBlocks\SimpleCardListBlock;
use App\Filament\Resources\PageBlocks\StepsSectionBlock;
use App\Filament\Resources\PageBlocks\TestimonialsSliderBlock;
use App\Filament\Resources\PageBlocks\TextSectionBlock;
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

class PageResource extends Resource
{
    protected static ?string $model = Page::class;

    protected static ?string $slug = 'pages';

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->columns(2)
            ->schema([

                Section::make('SEO')
                    ->columnSpan(1)
                    ->schema([
                        TextInput::make('meta_title')
                            ->required(),
                        Textarea::make('meta_description')
                            ->hint('Keep it under 160 characters')
                            ->maxLength(255)
                            ->rows(4)
                            ->required(),
                        FileUpload::make('meta_image')
                            ->hint('1200x627')
                            ->label('Meat Image')
                            ->image()
                            ->imageEditor()
                            ->imageCropAspectRatio('1.91:1')
                            ->required(),
                    ]),

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
                            ->required(),
                    ]),

                Builder::make('content')
                    ->collapsible()
                    ->collapsed()
                    ->columnSpan(2)
                    ->label('Sections')
                    ->blocks([
                        HeroSectionBlock::block()->maxItems(1),
                        SimpleCardListBlock::block(),
                        FeatureSectionBlock::block(),
                        CounterSectionBlock::block(),
                        ServicesSectionBlock::block(),
                        TestimonialsSliderBlock::block(),
                        ContactFormBlock::block(),
                        TextSectionBlock::block(),
                        StepsSectionBlock::block(),
                        PartnersSectionBlock::block(),
                        ProjectsSectionBlock::block(),
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
