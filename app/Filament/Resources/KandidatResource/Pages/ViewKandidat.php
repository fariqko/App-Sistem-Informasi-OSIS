<?php

namespace App\Filament\Resources\KandidatResource\Pages;

use App\Filament\Resources\KandidatResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewKandidat extends ViewRecord
{
    protected static string $resource = KandidatResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
