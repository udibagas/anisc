<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Auth;

class KelasRequest extends Request
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
            // 'jenjang'   => 'required',
            'tingkat'           => 'required',
            'nama'              => 'required',
            'wali_id'           => 'required',
            'ruang_id'          => 'required',
            'tahun_ajaran_id'   => 'required'
        ];
    }
}
