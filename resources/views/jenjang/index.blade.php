@extends('layouts.admin')

@section('content')

<div class="box">
    <div class="box-body no-padding">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>Jenjang</th>
                    <th>Tingkat</th>
                </tr>
            </thead>
            <tbody>
                @foreach($jenjang as $j => $t)
                <tr>
                    <td>{{$j}}</td>
                    <td>{{implode(', ', $t)}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@stop
