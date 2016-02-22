<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\TahunAjaran;

class JenjangController extends Controller
{
    public function index()
    {
        return view('jenjang.index', [
            'jenjang' => TahunAjaran::tingkat(),
            'pageTitle' => 'Jenjang & Tingkat'
        ]);
    }
}
