@extends('layouts.admin')

@section('content')

<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Orang Tua</h3>
        <a href="/orang-tua/create" class="btn btn-success pull-right"><span class="fa fa-plus"></span> Tambah Orang Tua</a>
    </div>
    <div class="box-body table-responsive no-padding">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>JK</th>
                    <th>Hub Keluarga</th>
                    <th>Wali</th>
                    <th>Alamat</th>
                    <th>Telepon</th>
                    <th>Email</th>
                    <th>Pend Terkahir</th>
                    <th>Pekerjaan</th>
                    <th>Penghasilan/Bulan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orangTua as $k)
                <tr>
                    <td>{{$k->nama}}</td>
                    <td>{{$k->jenis_kelamin ? 'L' : 'P'}}</td>
                    <td>{{$k->hubungan_keluarga}}</td>
                    <td>{{$k->wali ? 'Y' : 'T'}}</td>
                    <td>{{$k->alamat}}</td>
                    <td>{{$k->telepon}}</td>
                    <td><a href="mailto:{{$k->email}}">{{$k->email}}</a></td>
                    <td>{{$k->pendidikan_terakhir}}</td>
                    <td>{{$k->pekerjaan}}</td>
                    <td>{{ number_format($k->penghasilan_per_bulan, 0, ',', '.')}}</td>
                    <td>
    					{!! Form::open(['method' => 'DELETE', 'url' => 'orang-tua/'.$k->id]) !!}
    		        		<a href="/orang-tua/{{ $k->id }}/edit" class="btn btn-success btn-xs">Edit</a>
    		        		{!! Form::submit('Hapus', ['class' => 'btn btn-danger btn-xs delete']) !!}
    	        		{!! Form::close() !!}
    				</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="box-footer text-right">
        {!! $orangTua->render() !!}
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
