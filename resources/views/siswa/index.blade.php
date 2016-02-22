@extends('layouts.admin')

@section('content')

<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Siswa</h3>
        <a href="/siswa/create" class="btn btn-success pull-right"><span class="fa fa-plus"></span> Tambah Siswa</a>
    </div>
    <div class="box-body table-responsive no-padding">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Ayah</th>
                    <th>Ibu</th>
                    <th>Wali</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($siswa as $k)
                <tr>
                    <td>{{$k->nis}}</td>
                    <td><a href="/siswa/{{$k->id}}">{{$k->nama}}</a></td>
                    <td>{{$k->jenis_kelamin ? 'L' : 'P'}}</td>
                    <td>{{$k->tempat_lahir}}</td>
                    <td>{{$k->tanggal_lahir}}</td>
                    <td>{{$k->ayah ? $k->ayah->nama : ''}}</td>
                    <td>{{$k->ibu ? $k->ibu->nama : ''}}</td>
                    <td>{{$k->wali ? $k->wali->nama : ''}}</td>
                    <td>
    					{!! Form::open(['method' => 'DELETE', 'url' => 'siswa/'.$k->id]) !!}
    		        		<a href="/siswa/{{ $k->id }}/edit" class="btn btn-success btn-xs">Edit</a>
    		        		{!! Form::submit('Hapus', ['class' => 'btn btn-danger btn-xs delete']) !!}
    	        		{!! Form::close() !!}
    				</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="box-footer text-right">
        {!! $siswa->render() !!}
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
