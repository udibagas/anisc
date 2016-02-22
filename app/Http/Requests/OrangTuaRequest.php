<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Auth;

class OrangTuaRequest extends Request
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
            'jenis_kelamin'     => 'boolean',
            'hubungan_keluarga' => 'required',
            'wali'              => 'boolean',
            'alamat'            => 'required',
            'telepon'           => 'required',
            'email'             => 'email',
            'pendidikan_terakhir'   => 'required',
            'pekerjaan'         => 'required',
            'penghasilan_per_bulan' => 'numeric|required'
        ];
    }
}
