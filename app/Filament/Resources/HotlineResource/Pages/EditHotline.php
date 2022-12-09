<?php

namespace App\Filament\Resources\HotlineResource\Pages;

use App\Filament\Resources\HotlineResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHotline extends EditRecord
{
    protected static string $resource = HotlineResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
