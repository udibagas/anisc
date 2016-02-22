<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Auth;

class SiswaRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nama'              => 'required',
            'jenis_kelamin'     => 'required',
            'tempat_lahir'      => 'required',
            'tanggal_lahir'     => 'required|date',
            'ayah_id'           => 'numeric',
            'ibu_id'            => 'numeric',
            'wali_id'           => 'numeric|required',
            'nis'               => 'required'
        ];
    }
}
