<?php

namespace App\Filament\Resources\DirectoryResource\Pages;

use App\Filament\Resources\DirectoryResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateDirectory extends CreateRecord
{
    protected static string $resource = DirectoryResource::class;
}
