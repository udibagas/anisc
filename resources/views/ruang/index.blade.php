@extends('layouts.admin')

@section('content')

<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Ruang</h3>
        <a href="/ruang/create" class="btn btn-success pull-right"><span class="fa fa-plus"></span> Tambah Ruang</a>
    </div>
    <div class="box-body table-responsive no-padding">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Fungsi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($ruang as $r)
                <tr>
                    <td>{{$r->kode}}</td>
                    <td>{{$r->nama}}</td>
                    <td>{{$r->fungsi}}</td>
                    <td>
    					{!! Form::open(['method' => 'DELETE', 'url' => 'ruang/'.$r->id]) !!}
    		        		<a href="/ruang/{{ $r->id }}/edit" class="btn btn-success btn-xs">Edit</a>
    		        		{!! Form::submit('Hapus', ['class' => 'btn btn-danger btn-xs delete']) !!}
    	        		{!! Form::close() !!}
    				</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="box-footer text-right">
        {!! $ruang->render() !!}
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
