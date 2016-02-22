@extends('layouts.admin')

@section('content')

<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Edit Laporan Pekanan Siswa</h3>
    </div>
    @include('laporan-pekanan-siswa._form', ['url' => '/laporan-pekanan-siswa/'.$model->id, 'method' => 'PUT'])

@stop
