<?php

namespace App\Filament\Resources\AnggotaOsisResource\Pages;

use App\Filament\Resources\AnggotaOsisResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAnggotaOsis extends EditRecord
{
    protected static string $resource = AnggotaOsisResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
