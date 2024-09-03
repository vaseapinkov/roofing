<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PageBlocks\ContactFormBlock;
use App\Filament\Resources\PageBlocks\CounterSectionBlock;
use App\Filament\Resources\PageBlocks\FeatureSectionBlock;
use App\Filament\Resources\PageBlocks\HeroSectionBlock;
use App\Filament\Resources\PageBlocks\PartnersSectionBlock;
use App\Filament\Resources\PageBlocks\ProjectsSectionBlock;
use App\Filament\Resources\PageBlocks\ServicesSectionBlock;
use App\Filament\Resources\PageBlocks\CardListSectionBlock;
use App\Filament\Resources\PageBlocks\StepsSectionBlock;
use App\Filament\Resources\PageBlocks\TestimonialsSliderBlock;
use App\Filament\Resources\PageBlocks\TextSectionBlock;
use App\Filament\Resources\PageResource\Pages;
use App\Models\Page;
use Carbon\Carbon;
use Filament\Forms\Components\Builder;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Actions\Action;
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
                            ->disabled(function (string $operation, $record) {
                                if ($operation === 'create') {
                                    return;
                                }

                                in_array($record->slug, ['home', 'privacy-policy', 'terms-and-conditions']);
                            })
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
                        CardListSectionBlock::block(),
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
                TextColumn::make('meta_title')
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
                Action::make('clone')
                    ->label('Clone')
                    ->icon('heroicon-o-document-duplicate')
                    ->action(function (Page $record, $data) {
                        $clonedRecord = $record->replicate();
                        $clonedRecord->slug = $clonedRecord->slug . '-copy-' . Carbon::now()->timestamp;
                        $clonedRecord->save();
                    }),
                EditAction::make(),
                DeleteAction::make()->requiresConfirmation(),
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
