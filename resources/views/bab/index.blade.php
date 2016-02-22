@extends('layouts.admin')

@section('content')

<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Bab</h3>
        <a href="/bab/create" class="btn btn-success pull-right"><span class="fa fa-plus"></span> Tambah Bab</a>
    </div>
    <div class="box-body table-responsive no-padding">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th></th>
                    <th>Tahun Ajaran</th>
                    <th>Jenjang</th>
                    <th>Tingkat</th>
                    <th>Mata Pelajaran</th>
                    <th>Judul</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody id="materi">
                @foreach($bab as $r)
                <tr>
                    <td><a href="/bab/{{$r->id}}" class="lihat-bab fa fa-plus" id="{{$r->id}}"></a></td>
                    <td>{{$r->tahunAjaran->periode}}</td>
                    <td>{{$r->jenjang}}</td>
                    <td>{{$r->tingkat}}</td>
                    <td>{{$r->mataPelajaran->nama}}</td>
                    <td>{{$r->judul}}</td>
                    <td>{{$r->keterangan}}</td>
                    <td>
    					{!! Form::open(['method' => 'DELETE', 'url' => 'bab/'.$r->id]) !!}
    		        		<a href="/bab/{{ $r->id }}/edit" class="btn btn-success btn-xs">Edit</a>
    		        		{!! Form::submit('Hapus', ['class' => 'btn btn-danger btn-xs delete']) !!}
    	        		{!! Form::close() !!}
    				</td>
                </tr>
                <tr id="materi-{{$r->id}}" class="child"></tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="box-footer text-right">
        {!! $bab->render() !!}
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

        $('.lihat-bab').click(function(e) {

            e.preventDefault();

            var t = this;
            var child = '#materi-'+t.id;
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
