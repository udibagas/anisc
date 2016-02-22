@extends('layouts.admin')

@section('content')

<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Laporan Pekanan Siswa</h3>
        <a href="/laporan-pekanan-siswa/create" class="btn btn-success pull-right"><span class="fa fa-plus"></span> Tambah Laporan Pekanan Siswa</a>
    </div>
    <div class="box-body table-responsive no-padding">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th></th>
                    <th>Tahun Ajaran</th>
                    <th>Siswa</th>
                    <th>Bulan</th>
                    <th>Pekan</th>
                    <th>Catatan Guru</th>
                    <th>Catatan Orang Tua</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody id="materi">
                @foreach($laporanPekananSiswa as $r)
                <tr>
                    <td><a href="/laporan-pekanan-siswa/{{$r->id}}" class="lihat-detail fa fa-plus" id="{{$r->id}}"></a></td>
                    <td>{{$r->tahunAjaran->periode}}</td>
                    <td>{{$r->siswa->nama}}</td>
                    <td>{{$r->bulan}}</td>
                    <td>{{$r->pekan}}</td>
                    <td>{{$r->catatan_guru}}</td>
                    <td>{{$r->catatan_orang_tua}}</td>
                    <td>
    					{!! Form::open(['method' => 'DELETE', 'url' => 'laporan-pekanan-siswa/'.$r->id]) !!}
    		        		<a href="/laporan-pekanan-siswa/{{ $r->id }}/edit" class="btn btn-success btn-xs">Edit</a>
    		        		{!! Form::submit('Hapus', ['class' => 'btn btn-danger btn-xs delete']) !!}
    	        		{!! Form::close() !!}
    				</td>
                </tr>
                <tr id="detail-{{$r->id}}" class="child"></tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="box-footer text-right">
        {!! $laporanPekananSiswa->render() !!}
    </div>
</div>

@stop

@section('script')

	<script type="text/javascript">

		$('.delete').click(function() {
			if(confirm('Anda yakin?')) { return true; };
			return false;
		});

        $('.child').hide();

        $('.lihat-detail').click(function(e) {

            e.preventDefault();

            var t = this;
            var child = '#detail-'+t.id;
            $(child).toggle();

            if ($(child).is(':visible')) {

                $.ajax({
                    url: t.href,
                    type: 'get',
                    success: function(html) {
                        $(child).html('<td colspan="8">'+html+'</td>');
                    }
                });

                    $(t).removeClass('fa-plus').addClass('fa-minus');
                    $(t).parent().parent().addClass('alert alert-info');

            } else {

                $(t).removeClass('fa-minus').addClass('fa-plus');
                $(t).parent().parent().removeClass('alert alert-info');

            }

        });

	</script>

@stop
