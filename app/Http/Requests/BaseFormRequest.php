<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Filament\Notifications\Notification;

abstract class BaseFormRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Helper: unique rule dengan kombinasi kolom + otomatis ignore record saat edit
     */
    protected function uniqueRule(string $table, array $columns): \Illuminate\Validation\Rules\Unique
    {
        $unique = Rule::unique($table);

        // Kalau lebih dari 1 kolom → kombinasi
        if (count($columns) > 1) {
            $unique = $unique->where(function ($query) use ($columns) {
                foreach ($columns as $column) {
                    $value = $this->input($column);
                    if ($value !== null) {
                        $query->where($column, $value);
                    }
                }
            });
        }

        // === FIX DI SINI: ambil ID dengan berbagai cara yang mungkin dipakai Filament ===
        $recordId = null;

        // Cara 1: Filament v3 biasa pakai route('record')
        if ($this->route('record')) {
            $recordId = $this->route('record')?->id ?? $this->route('record');
        }

        // Cara 2: kadang pakai nama resource singular
        if (! $recordId && $this->route(str()->singular($table))) {
            $recordId = $this->route(str()->singular($table))?->id ?? $this->route(str()->singular($table));
        }

        // Cara 3: fallback ke parameter pertama di route
        if (! $recordId) {
            $routeParameters = $this->route()->parameters();
            $recordId = collect($routeParameters)->first()?->id ?? collect($routeParameters)->first();
        }

        // Ignore record sendiri kalau ada
        if ($recordId) {
            $unique = $unique->ignore($recordId);
        }

        return $unique;
    }

    /**
     * Ubah error validasi jadi notification Filament (merah cakep)
     */
    protected function failedValidation(\Illuminate\Contracts\Validation\Validator $validator)
    {
        $errors = $validator->errors()->all();

        Notification::make()
            ->title('Validasi Gagal')
            ->body(implode('<br>', $errors))
            ->danger()
            ->persistent()
            ->send();

        parent::failedValidation($validator);
    }
}