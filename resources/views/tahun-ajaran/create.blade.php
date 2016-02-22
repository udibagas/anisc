@extends('layouts.admin')

@section('content')

<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Tambah Tahun Ajaran</h3>
    </div>
    @include('tahun-ajaran._form', ['url' => '/tahun-ajaran', 'method' => 'POST'])

@stop
