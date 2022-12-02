<?php

namespace App\Filament\Resources\BarangayResource\Pages;

use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\BarangayResource;
use App\Filament\Resources\BarangayResource\Widgets\StatsOverview;
use App\Filament\Resources\BarangayResource\Widgets\BarangayOverview;

class ListBarangays extends ListRecords
{
    protected static string $resource = BarangayResource::class;

    protected function getColumns(): int | array
{
    return 4;
}

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [
            BarangayOverview::class,
        ];
    }
}
