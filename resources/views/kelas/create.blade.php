@extends('layouts.admin')

@section('content')

<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Tambah Kelas </h3>
    </div>
    @include('kelas._form', ['url' => '/kelas', 'method' => 'POST'])

@stop
