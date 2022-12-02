<?php

namespace App\Filament\Resources\BarangayResource\Widgets;

use App\Models\Barangay;
use Filament\Widgets\StatsOverviewWidget\Card;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class BarangayOverview extends BaseWidget
{
    protected int | string | array $columnSpan = 1;
    
    protected function getCards(): array
    {
        return [
            Card::make('Total', Barangay::count()),
        ];
    }
}
