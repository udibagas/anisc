<!-- <div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Form Bab</h3>
    </div> -->
    {!! Form::model($model, ['url' => $url, 'method' => $method, 'class' => 'form-horizontal']) !!}
    <div class="box-body">
        <div class="form-group @if ($errors->has('tahun_ajaran_id')) has-error @endif">
            {!! Form::label('tahun_ajaran_id', 'Tahun Ajaran:', ['class' => 'col-md-2 control-label']) !!}
            <div class="col-md-10">
                {!!
                    Form::select(
                        'tahun_ajaran_id',
                        App\TahunAjaran::pluck('periode', 'id'),
                        $model->tahun_ajaran_id, ['class' => 'form-control', 'placeholder' => '- Pilih Tahun Ajaran -']
                    )
                !!}
                @if ($errors->has('tahun_ajaran_id')) <p class="help-block">{{ $errors->first('tahun_ajaran_id') }}</p> @endif
            </div>
        </div>

        <div class="form-group @if ($errors->has('siswa_id')) has-error @endif">
            {!! Form::label('siswa_id', 'Siswa:', ['class' => 'col-md-2 control-label']) !!}
            <div class="col-md-10">
                {!!
                    Form::select(
                        'siswa_id',
                        App\Siswa::orderBy('nama')->pluck('nama', 'id'),
                        $model->siswa_id, ['class' => 'form-control', 'placeholder' => '- Pilih Siswa -']
                    )
                !!}
                @if ($errors->has('siswa_id')) <p class="help-block">{{ $errors->first('siswa_id') }}</p> @endif
            </div>
        </div>

        <div class="form-group @if ($errors->has('bulan')) has-error @endif">
            {!! Form::label('bulan', 'Bulan:', ['class' => 'col-md-2 control-label']) !!}
            <div class="col-md-10">
                {!!
                    Form::select(
                        'bulan',
                        App\LaporanPekananSiswa::listBulan(),
                        $model->bulan, ['class' => 'form-control', 'placeholder' => '- Pilih Bulan -']
                    )
                !!}
                @if ($errors->has('bulan')) <p class="help-block">{{ $errors->first('bulan') }}</p> @endif
            </div>
        </div>

        <div class="form-group @if ($errors->has('pekan')) has-error @endif">
            {!! Form::label('pekan', 'Pekan:', ['class' => 'col-md-2 control-label']) !!}
            <div class="col-md-10">
                {!!
                    Form::select(
                        'pekan',
                        App\LaporanPekananSiswa::listPekan(),
                        $model->pekan, ['class' => 'form-control', 'placeholder' => '- Pilih Pekan -']
                    )
                !!}
                @if ($errors->has('pekan')) <p class="help-block">{{ $errors->first('pekan') }}</p> @endif
            </div>
        </div>

        <div class="form-group @if ($errors->has('catatan_guru')) has-error @endif">
            {!! Form::label('catatan_guru', 'Catatan Guru:', ['class' => 'col-md-2 control-label']) !!}
            <div class="col-md-10">
                {!! Form::textarea(
                        'catatan_guru', $model->catatan_guru,
                        ['class' => 'form-control', 'placeholder' => 'Catatan Guru', 'rows' => 3]
                ) !!}
                @if ($errors->has('catatan_guru')) <p class="help-block">{{ $errors->first('catatan_guru') }}</p> @endif
            </div>
        </div>

        <div class="form-group @if ($errors->has('catatan_orang_tua')) has-error @endif">
            {!! Form::label('catatan_orang_tua', 'Catatan OrangTua:', ['class' => 'col-md-2 control-label']) !!}
            <div class="col-md-10">
                {!! Form::textarea(
                        'catatan_orang_tua', $model->catatan_orang_tua,
                        ['class' => 'form-control', 'placeholder' => 'Catatan OrangTua', 'rows' => 3]
                ) !!}

                @if ($errors->has('catatan_orang_tua')) <p class="help-block">{{ $errors->first('catatan_orang_tua') }}</p> @endif
            </div>
        </div>

        <hr />

        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Mata Pelajaran</th>
                    <th>Materi</th>
                    <th>Catatan</th>
                    <th><a href="#" id="tambah-detail"><span class="fa fa-plus"></span></a></th>
                </tr>
            </thead>
            <tbody id="detail">
                @foreach($model->detail as $m)
                <tr>
                    <td class="@if ($errors->has('detail.'.$m->id.'.mata_pelajaran_id')) has-error @endif">
                        {!! Form::select(
                            'detail['.$m->id.'][mata_pelajaran_id]',
                            App\MataPelajaran::pluck('nama', 'id'),
                            $m->mata_pelajaran_id,
                            ['class' => 'form-control', 'placeholder' => '- Pilih Mata Pelajaran -']
                        ) !!}
                    </td>
                    <td class="@if ($errors->has('detail.'.$m->id.'.materi_id')) has-error @endif">
                        {!! Form::select(
                            'detail['.$m->id.'][materi_id]',
                            App\Materi::pluck('judul', 'id'),
                            $m->materi_id,
                            ['class' => 'form-control', 'placeholder' => '- Pilih Materi -']
                        ) !!}
                    </td>
                    <td class="@if ($errors->has('detail.'.$m->id.'.catatan')) has-error @endif">
                        {!! Form::text(
                            'detail['.$m->id.'][catatan]', $m->catatan,
                            ['class' => 'form-control', 'placeholder' => 'Catatan']
                        ) !!}
                    </td>
                    <td><a href="#" class="hapus-detail"><span class="fa fa-trash"></span></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
    <div class="box-footer text-center">
        {!! Form::submit('Simpan', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
</div>

@section('script')

<script type="text/javascript">
    var i = 0;

    // dynamic form beasiswa
    $('#tambah-detail').click(function(e) {

        e.preventDefault();
        i++;

        $.ajax({
            url: '/laporan-pekanan-siswa/form-materi',
            data: {index: i},
            success: function(html) {
                $('#detail').append(html);
            }
        });

    });

    $('#detail').on('click', '.hapus-detail', function(e) {
        e.preventDefault();
        $(this).parent().parent().remove();
    });

</script>

@stop
