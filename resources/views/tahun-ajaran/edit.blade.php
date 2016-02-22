@extends('layouts.admin')

@section('content')

<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Edit Tahun Ajaran : {{$model->periode}}</h3>
    </div>
    @include('tahun-ajaran._form', ['url' => '/tahun-ajaran/'.$model->id, 'method' => 'PUT'])

@stop
