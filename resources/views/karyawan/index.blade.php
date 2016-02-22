@extends('layouts.admin')

@section('content')

<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Karyawan</h3>
        <a href="/karyawan/create" class="btn btn-success pull-right"><span class="fa fa-plus"></span> Tambah Karyawan</a>
    </div>
    <div class="box-body table-responsive no-padding">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Guru</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($karyawan as $r)
                <tr>
                    <td>{{$r->nama}}</td>
                    <td>{{$r->jenis_kelamin ? 'L' : 'P'}}</td>
                    <td>{{$r->guru ? 'Y' : 'T'}}</td>
                    <td>
    					{!! Form::open(['method' => 'DELETE', 'url' => 'karyawan/'.$r->id]) !!}
    		        		<a href="/karyawan/{{ $r->id }}/edit" class="btn btn-success btn-xs">Edit</a>
    		        		{!! Form::submit('Hapus', ['class' => 'btn btn-danger btn-xs delete']) !!}
    	        		{!! Form::close() !!}
    				</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="box-footer text-right">
        {!! $karyawan->render() !!}
    </div>
</div>

@stop

@section('script')

	<script type="text/javascript">
		$('.delete').click(function() {
			if(confirm('Anda yakin?')) { return true; };
			return false;
		});
	</script>

@stop
