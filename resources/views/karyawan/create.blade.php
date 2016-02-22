@extends('layouts.admin')

@section('content')

<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Tambah Karyawan</h3>
    </div>
    @include('karyawan._form', ['url' => '/karyawan', 'method' => 'POST'])

@stop
