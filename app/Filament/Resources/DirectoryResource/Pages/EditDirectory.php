<?php

namespace App\Filament\Resources\DirectoryResource\Pages;

use App\Filament\Resources\DirectoryResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDirectory extends EditRecord
{
    protected static string $resource = DirectoryResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
