<?php

namespace App\Filament\Resources\SiswaResource\Pages;

use Filament\Actions;
use App\Filament\Resources\SiswaResource;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\SiswaResource\Widgets\SiswaCountResourceOverview;

class ListSiswas extends ListRecords
{
    protected static string $resource = SiswaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
