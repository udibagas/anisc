@extends('layouts.admin')

@section('content')

<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Edit Bab : {{$model->judul}}</h3>
    </div>
    @include('bab._form', ['url' => '/bab/'.$model->id, 'method' => 'PUT'])

@stop
