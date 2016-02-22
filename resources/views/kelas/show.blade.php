@extends('layouts.admin')

@section('content')

<div class="box">
    <div class="box-body table-responsive no-padding">
        <table class="table table-hover table-striped">
            <tbody>
                <tr>
                    <th class="th-label">Tahun Ajaran</th>
                    <td>: {{$kelas->tahunAjaran->periode}}</td>
                </tr>
                <tr>
                    <th class="th-label">Jenjang</th>
                    <td>: {{$kelas->jenjang}}</td>
                </tr>
                <tr>
                    <th class="th-label">Tingkat</th>
                    <td>: {{$kelas->tingkat}}</td>
                </tr>
                <tr>
                    <th class="th-label">Nama</th>
                    <td>: {{$kelas->nama}}</td>
                </tr>
                <tr>
                    <th class="th-label">Ruang</th>
                    <td>: {{$kelas->ruang->nama}}</td>
                </tr>
                <tr>
                    <th class="th-label">Wali</th>
                    <td>: {{$kelas->wali->nama}}</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="box-body">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">

        	<li role="presentation" class="active"><a href="#11" aria-controls="11" role="tab" data-toggle="tab">Daftar Siswa</a></li>
        	<li role="presentation"><a href="#12" aria-controls="12" role="tab" data-toggle="tab">Jadwal Pelajaran</a></li>
        	<li role="presentation"><a href="#13" aria-controls="13" role="tab" data-toggle="tab">Daftar Nilai</a></li>
        	<li role="presentation"><a href="#14" aria-controls="14" role="tab" data-toggle="tab">Absensi</a></li>

        </ul>

        <!-- Tab panes -->
        <div class="tab-content">

        	<div role="tabpanel" class="tab-pane active" id="11">
        		<br />
                {!! Form::open(['class' => 'form-inline', 'url' => '/kelas/tambah-siswa/'.$kelas->id]) !!}
                    {!! Form::hidden('kelas_id', $kelas->id) !!}

                    {!!
                        Form::select(
                            'siswa_id',
                            App\Siswa::whereNotIn('id', $kelas->siswa->pluck('id'))->orderBy('nama')->pluck('nama', 'id'),  null,
                            ['class' => 'form-control', 'placeholder' => '- Nama Siswa -', 'style' => 'width:300px;']
                        )
                    !!}

                    {!! Form::submit('Tambah Siswa', ['class' => 'btn btn-primary']) !!}
                {!! Form::close() !!}

                <hr />

        		@include('kelas._siswa')
        	</div>

        	<div role="tabpanel" class="tab-pane" id="12">
        		<br />
        		include('jadwalPelajaran._perKelas')
        	</div>

        	<div role="tabpanel" class="tab-pane" id="13">
        		<br />
        		include('nilai._list', ['jadwals' => $kelas->nilais])
        	</div>

        	<div role="tabpanel" class="tab-pane" id="14">
        		<br />
        		include('absensi._list', ['absensis' => $kelas->absensis])
        	</div>

        </div>
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
