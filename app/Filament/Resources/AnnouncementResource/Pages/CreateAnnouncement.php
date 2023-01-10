<?php

namespace App\Filament\Resources\AnnouncementResource\Pages;

use Filament\Pages\Actions;
use App\Enums\ArticleStatus;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\AnnouncementResource;

class CreateAnnouncement extends CreateRecord
{
    protected static string $resource = AnnouncementResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = auth()->id();
        $data['status'] = ArticleStatus::Draft;
    
        return $data;
    }
}
