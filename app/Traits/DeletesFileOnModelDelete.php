<?php

namespace App\Traits;

use Illuminate\Support\Facades\Storage;

trait DeletesFileOnModelDelete
{
    public static function bootDeletesFileOnModelDelete(): void
    {
        // Hapus file lama kalau model dihapus
        static::deleting(function ($model) {
            if (property_exists($model, 'fileFields')) {
                foreach ($model->fileFields as $field) {
                    $path = $model->{$field};

                    if ($path && Storage::disk('public')->exists($path)) {
                        Storage::disk('public')->delete($path);
                    }
                }
            }
        });

        // Hapus file lama kalau model di-update dengan file baru
        static::updating(function ($model) {
            if (property_exists($model, 'fileFields')) {
                foreach ($model->fileFields as $field) {
                    // ambil file lama dari database sebelum update
                    $original = $model->getOriginal($field);
                    $new = $model->{$field};

                    // kalau file lama dan baru beda → hapus file lama
                    if ($original && $original !== $new && Storage::disk('public')->exists($original)) {
                        Storage::disk('public')->delete($original);
                    }
                }
            }
        });
    }
}
