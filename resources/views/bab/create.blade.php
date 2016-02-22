@extends('layouts.admin')

@section('content')

<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Tambah Bab</h3>
    </div>
    @include('bab._form', ['url' => '/bab', 'method' => 'POST'])

@stop
