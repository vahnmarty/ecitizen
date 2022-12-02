<?php

namespace App\Filament\Resources\DirectoryResource\Pages;

use App\Filament\Resources\DirectoryResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDirectories extends ListRecords
{
    protected static string $resource = DirectoryResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
