@extends('layouts.admin')

@section('content')

<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Edit Kelas : {{$model->nama}}</h3>
    </div>
    @include('kelas._form', ['url' => '/kelas/'.$model->id, 'method' => 'PUT'])

@stop
