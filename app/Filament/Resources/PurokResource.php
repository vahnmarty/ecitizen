<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Purok;
use App\Models\Barangay;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\PurokResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PurokResource\RelationManagers;

class PurokResource extends Resource
{
    protected static ?string $model = Purok::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('barangay_id')->relationship('barangay', 'name'),
                Forms\Components\TextInput::make('name')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('barangay', 'name')->sortable(),
                Tables\Columns\TextColumn::make('name')->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('barangay')
                ->relationship('barangay', 'name')
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ManagePuroks::route('/'),
        ];
    }
    
    public static function getFilters() : array
    {
        $array = [];
        foreach(Barangay::get() as $barangay){
            $array[] = Tables\Filters\Filter::make($barangay->name)
            ->query(fn (Builder $query): Builder => $query->where('barangay_id', $barangay->id));
        }

        return $array;
    }
}
