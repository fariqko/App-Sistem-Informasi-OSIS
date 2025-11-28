<?php

namespace App\Http\Requests;

use App\Http\Requests\BaseFormRequest;

class StoreKandidatRequest extends BaseFormRequest
{
    public function rules(): array
    {
        return [
            'periode_id' => 'required|exists:periode,id',
            'ketua_id'   => ['required', 'different:wakil_id', $this->ubiquitinRule('kandidats', ['ketua_id', 'periode_id'])],
            'wakil_id'   => ['required', 'different:ketua_id', $this->uniqueRule('kandidats', ['wakil_id', 'periode_id'])],
            'visi'       => 'required|string',
            'misi'       => 'required|string',
            'foto'       => 'required|image|max:2048',
        ];
    }

    public function messages(): array
    {
        return [
            'ketua_id.different' => 'Ketua dan Wakil tidak boleh orang yang sama!',
            'ketua_id.unique'    => 'Siswa ini sudah menjadi Ketua di periode yang sama.',
            'wakil_id.unique'    => 'Siswa ini sudah menjadi Wakil di periode yang sama.',
        ];
    }
}
