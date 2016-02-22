@extends('layouts.admin')

@section('content')

<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Kelas</h3>
        <a href="/kelas/create" class="btn btn-success pull-right"><span class="fa fa-plus"></span> Tambah Kelas</a>
    </div>
    <div class="box-body table-responsive no-padding">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>Tahun Ajaran</th>
                    <th>Jenjang</th>
                    <th>Tingkat</th>
                    <th>Kelas</th>
                    <th>Wali</th>
                    <th>Ruang</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($kelas as $k)
                <tr>
                    <td>{{$k->tahunAjaran ? $k->tahunAjaran->periode : ''}}</td>
                    <td>{{$k->jenjang}}</td>
                    <td>{{$k->tingkat}}</td>
                    <td><a href="/kelas/{{$k->id}}">{{$k->nama}}</a></td>
                    <td>{{$k->wali ? $k->wali->nama : ''}}</td>
                    <td>{{$k->ruang ? $k->ruang->nama : ''}}</td>
                    <td>
    					{!! Form::open(['method' => 'DELETE', 'url' => 'kelas/'.$k->id]) !!}
    		        		<a href="/kelas/{{ $k->id }}/edit" class="btn btn-success btn-xs">Edit</a>
    		        		{!! Form::submit('Hapus', ['class' => 'btn btn-danger btn-xs delete']) !!}
    	        		{!! Form::close() !!}
    				</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="box-footer text-right">
        {!! $kelas->render() !!}
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
