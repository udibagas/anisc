@extends('layouts.admin')

@section('content')

<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Edit Karyawan : {{$model->nama}}</h3>
    </div>
    @include('karyawan._form', ['url' => '/karyawan/'.$model->id, 'method' => 'PUT'])

@stop
