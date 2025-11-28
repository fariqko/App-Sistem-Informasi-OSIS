<?php

namespace App\Filament\Resources\KandidatResource\Pages;

use Filament\Actions;
use App\Models\Kandidat;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\KandidatResource;

class CreateKandidat extends CreateRecord
{
    protected static string $resource = KandidatResource::class;

    protected function beforeCreate(): void
    {
        $data = $this->form->getState();

        $periodeId = $data['periode_id'];
        $ketuaId   = $data['ketua_id'];
        $wakilId   = $data['wakil_id'];

        // Cek apakah ketua sudah jadi kandidat di periode ini
        $ketuaSudahDipakai = Kandidat::where('periode_id', $periodeId)
            ->where(function ($q) use ($ketuaId, $wakilId) {
                $q->where('ketua_id', $ketuaId)
                    ->orWhere('wakil_id', $ketuaId);
            })->exists();

        if ($ketuaSudahDipakai) {
            Notification::make()
                ->title('Gagal!')
                ->body('Siswa yang dipilih sebagai Ketua sudah terdaftar di pasangan kandidat lain pada periode ini.')
                ->danger()
                ->persistent()
                ->send();

            $this->halt(); // <--- INI PENTING! Stop proses create
        }

        // Cek wakil
        $wakilSudahDipakai = Kandidat::where('periode_id', $periodeId)
            ->where(function ($q) use ($ketuaId, $wakilId) {
                $q->where('ketua_id', $wakilId)
                    ->orWhere('wakil_id', $wakilId);
            })->exists();

        if ($wakilSudahDipakai) {
            Notification::make()
                ->title('Gagal!')
                ->body('Siswa yang dipilih sebagai Wakil sudah terdaftar di pasangan kandidat lain pada periode ini.')
                ->danger()
                ->persistent()
                ->send();

            $this->halt();
        }

        // Bonus: pastikan ketua dan wakil beda orang
        if ($ketuaId === $wakilId) {
            Notification::make()
                ->title('Gagal!')
                ->body('Ketua dan Wakil tidak boleh sama!')
                ->danger()
                ->send();
            $this->halt();
        }
    }
}
