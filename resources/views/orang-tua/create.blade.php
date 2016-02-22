@extends('layouts.admin')

@section('content')

<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Tambah Orang Tua </h3>
    </div>
    @include('orang-tua._form', ['url' => '/orang-tua', 'method' => 'POST'])

@stop
