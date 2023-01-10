<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Enums\ArticleStatus;
use App\Models\Announcement;
use Filament\Resources\Form;
use Filament\Resources\Table;
use App\Enums\AnnouncementType;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\AnnouncementResource\Pages;
use App\Filament\Resources\AnnouncementResource\RelationManagers;

class AnnouncementResource extends Resource
{
    protected static ?string $model = Announcement::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('type')->options(AnnouncementType::asSelectArray()),
                Forms\Components\TextInput::make('title')->required()->placeholder("Enter Title Here")->columnSpan('full'),
                Forms\Components\RichEditor::make('contents')->required()->columnSpan('full'),
                Forms\Components\FileUpload::make('thumbnail')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\BadgeColumn::make('status')
                    ->enum(ArticleStatus::asSelectArray())
                    ->colors([
                        'secondary' => '0',
                        'warning' => '1',
                        'success' => '2',
                    ]),
                Tables\Columns\TextColumn::make('created_at'),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\Action::make('publish')
                ->action(fn (Announcement $record) => $record->publish())
                ->requiresConfirmation()
                ->color('success')
                ->visible(fn (Announcement $record) => !$record->isPublished()),
                Tables\Actions\Action::make('unpublish')
                ->action(fn (Announcement $record) => $record->unpublish())
                ->requiresConfirmation()
                ->color('danger')
                ->visible(fn (Announcement $record) => $record->isPublished()),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
                Tables\Actions\ForceDeleteBulkAction::make(),
                Tables\Actions\RestoreBulkAction::make(),
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
            'index' => Pages\ListAnnouncements::route('/'),
            'create' => Pages\CreateAnnouncement::route('/create'),
            'edit' => Pages\EditAnnouncement::route('/{record}/edit'),
        ];
    }    
    
    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }

    
}
