<?php

namespace App\Filament\Resources\AnggotaOsisResource\Pages;

use App\Filament\Resources\AnggotaOsisResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAnggotaOses extends ListRecords
{
    protected static string $resource = AnggotaOsisResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
