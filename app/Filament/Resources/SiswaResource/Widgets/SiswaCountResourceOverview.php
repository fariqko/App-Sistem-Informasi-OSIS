<?php

namespace App\Filament\Resources\SiswaResource\Widgets;

use App\Models\Siswa;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class SiswaCountResourceOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Siswa', Siswa::count())
        ];
    }
}
