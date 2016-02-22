@extends('layouts.admin')

@section('content')

<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Edit Mata Pelajaran : {{$model->kode}}</h3>
    </div>
    @include('mata-pelajaran._form', ['url' => '/mata-pelajaran/'.$model->id, 'method' => 'PUT'])

@stop
