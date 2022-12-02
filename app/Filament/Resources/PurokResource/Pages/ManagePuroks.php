<?php

namespace App\Filament\Resources\PurokResource\Pages;

use App\Filament\Resources\PurokResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManagePuroks extends ManageRecords
{
    protected static string $resource = PurokResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
