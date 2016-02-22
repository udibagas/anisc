@extends('layouts.admin')

@section('content')

<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Tambah Ruang</h3>
    </div>
    @include('ruang._form', ['url' => '/ruang', 'method' => 'POST'])

@stop
