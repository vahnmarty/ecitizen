<?php

namespace App\Filament\Resources\BarangayResource\Pages;

use App\Filament\Resources\BarangayResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBarangays extends ListRecords
{
    protected static string $resource = BarangayResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
