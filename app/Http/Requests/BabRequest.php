<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Auth;

class BabRequest extends Request
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
            'tahun_ajaran_id'       => 'numeric|required',
            'tingkat'               => 'required',
            'jenjang'               => 'required',
            'mata_pelajaran_id'     => 'required',
            'judul'                 => 'required',
            'keterangan'            => 'required',
            'materi.*.judul'        => 'required',
            'materi.*.keterangan'   => 'required',
            'materi.*.jumlah_jam'   => 'required',
        ];
    }
}
