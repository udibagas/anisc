@extends('layouts.admin')

@section('content')

<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Tambah Mata Pelajaran</h3>
    </div>
    @include('mata-pelajaran._form', ['url' => '/mata-pelajaran', 'method' => 'POST'])

@stop
