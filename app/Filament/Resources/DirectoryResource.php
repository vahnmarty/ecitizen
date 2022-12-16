<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DirectoryResource\Pages;
use App\Filament\Resources\DirectoryResource\RelationManagers;
use App\Models\Directory;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DirectoryResource extends Resource
{
    protected static ?string $model = Directory::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')->required(),
                Forms\Components\TextInput::make('telephone'),
                Forms\Components\TextInput::make('cellphone')->required(),
                Forms\Components\TextInput::make('address')->required(),
                Forms\Components\TextInput::make('barangay'),
                Forms\Components\TextInput::make('email')->email(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->sortable(),
                Tables\Columns\TextColumn::make('telephone'),
                Tables\Columns\TextColumn::make('cellphone'),
                Tables\Columns\TextColumn::make('address'),
                Tables\Columns\TextColumn::make('barangay')->sortable(),
            ])
            ->defaultSort('name')
            ->filters([
                //
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
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDirectories::route('/'),
            'create' => Pages\CreateDirectory::route('/create'),
            'edit' => Pages\EditDirectory::route('/{record}/edit'),
        ];
    }    
}
