<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Auth;

class LaporanPekananSiswaRequest extends Request
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
            'tahun_ajaran_id'       => 'required',
            'siswa_id'              => 'required',
            'bulan'                 => 'required|numeric',
            'pekan'                 => 'required|numeric',
            // 'catatan_guru'          => 'required',
            // 'catatan_orang_tua'     => 'required'
        ];
    }
}
