<?php

namespace App\Filament\Resources\HotlineResource\RelationManagers;

use Filament\Forms;
use Filament\Tables;
use App\Enums\PhoneType;
use Filament\Resources\Form;
use Filament\Resources\Table;
use App\Enums\HotlineCategory;
use Filament\Forms\Components\Select;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Resources\RelationManagers\RelationManager;

class NumbersRelationManager extends RelationManager
{
    protected static string $relationship = 'numbers';

    protected static ?string $recordTitleAttribute = 'number';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('phone_type')->options(PhoneType::asSelectArray())->default(0),
                Forms\Components\TextInput::make('number')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('phone_type')->formatStateUsing(fn (string $state): string => PhoneType::fromValue((int)$state)->key),
                Tables\Columns\TextColumn::make('number'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }    
}
