@extends('layouts.admin')

@section('content')

<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Edit Ruang : {{$model->kode}}</h3>
    </div>
    @include('ruang._form', ['url' => '/ruang/'.$model->id, 'method' => 'PUT'])

@stop
