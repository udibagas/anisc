@extends('layouts.admin')

@section('content')

<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Edit Siswa : {{$model->nama}}</h3>
    </div>
    @include('siswa._form', ['url' => '/siswa/'.$model->id, 'method' => 'PUT'])

@stop
