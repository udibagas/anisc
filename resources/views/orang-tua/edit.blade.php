@extends('layouts.admin')

@section('content')

<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Edit Orang Tua : {{$model->nama}}</h3>
    </div>
    @include('orang-tua._form', ['url' => '/orang-tua/'.$model->id, 'method' => 'PUT'])

@stop
