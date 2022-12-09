<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Hotline;
use Filament\Resources\Form;
use Filament\Resources\Table;
use App\Enums\HotlineCategory;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\HotlineResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\HotlineResource\RelationManagers;
use App\Filament\Resources\HotlineResource\RelationManagers\NumbersRelationManager;

class HotlineResource extends Resource
{
    protected static ?string $model = Hotline::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('hotline_category')->options(HotlineCategory::asSelectArray()),
                TextInput::make('name')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('hotline_category')->sortable()->formatStateUsing(fn (string $state): string => HotlineCategory::fromValue((int)$state)->description),
                TextColumn::make('name')->sortable(),
                TextColumn::make('numbers.number'),
            ])
            ->filters([
                SelectFilter::make('hotline_category')->options(HotlineCategory::asSelectArray())
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            NumbersRelationManager::class,
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListHotlines::route('/'),
            'create' => Pages\CreateHotline::route('/create'),
            'edit' => Pages\EditHotline::route('/{record}/edit'),
        ];
    }    
}
