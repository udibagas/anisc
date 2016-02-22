@extends('layouts.admin')

@section('content')

<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Tambah Siswa </h3>
    </div>
    @include('siswa._form', ['url' => '/siswa', 'method' => 'POST'])

@stop
