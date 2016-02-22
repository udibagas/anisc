@extends('layouts.admin')

@section('content')

<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Tahun Ajaran</h3>
        <a href="/tahun-ajaran/create" class="btn btn-success pull-right"><span class="fa fa-plus"></span> Tambah Tahun Ajaran</a>
    </div>
    <div class="box-body table-responsive no-padding">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>Periode</th>
                    <th>Mulai</th>
                    <th>Selesai</th>
                    <th>Aktif</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tahunAjaran as $ta)
                <tr>
                    <td>{{$ta->periode}}</td>
                    <td>{{$ta->mulai}}</td>
                    <td>{{$ta->selesai}}</td>
                    <td>{{$ta->aktif ? 'Y' : 'Y'}}</td>
                    <td>
    					{!! Form::open(['method' => 'DELETE', 'url' => 'tahun-ajaran/'.$ta->id]) !!}
    		        		<a href="/tahun-ajaran/{{ $ta->id }}/edit" class="btn btn-success btn-xs">Edit</a>
    		        		{!! Form::submit('Hapus', ['class' => 'btn btn-danger btn-xs delete']) !!}
    	        		{!! Form::close() !!}
    				</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="box-footer text-right">
        {!! $tahunAjaran->render() !!}
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
