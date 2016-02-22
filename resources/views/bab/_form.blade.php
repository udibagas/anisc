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

        <div class="form-group @if ($errors->has('jenjang')) has-error @endif">
            {!! Form::label('jenjang', 'Janjang:', ['class' => 'col-md-2 control-label']) !!}
            <div class="col-md-10">
                {!!
                    Form::select('jenjang',
                        \App\TahunAjaran::jenjang(),
                        $model->jenjang,
                        ['class' => 'form-control', 'placeholder' => '- Pilih Jenjang -']
                    )
                !!}
                @if ($errors->has('jenjang')) <p class="help-block">{{ $errors->first('jenjang') }}</p> @endif
            </div>
        </div>

        <div class="form-group @if ($errors->has('tingkat')) has-error @endif">
            {!! Form::label('tingkat', 'Tingkat:', ['class' => 'col-md-2 control-label']) !!}
            <div class="col-md-10">
                {!!
                    Form::select(
                        'tingkat',
                        App\TahunAjaran::tingkat(),
                        $model->tingkat, ['class' => 'form-control', 'placeholder' => '- Pilih Tingkat -']
                    )
                !!}
                @if ($errors->has('tingkat')) <p class="help-block">{{ $errors->first('tingkat') }}</p> @endif
            </div>
        </div>

        <div class="form-group @if ($errors->has('mata_pelajaran_id')) has-error @endif">
            {!! Form::label('mata_pelajaran_id', 'Mata Pelajaran:', ['class' => 'col-md-2 control-label']) !!}
            <div class="col-md-10">
                {!!
                    Form::select(
                        'mata_pelajaran_id',
                        App\MataPelajaran::pluck('nama', 'id'),
                        $model->mata_pelajaran_id, ['class' => 'form-control', 'placeholder' => '- Pilih Mata Pelajaran -']
                    )
                !!}
                @if ($errors->has('mata_pelajaran_id')) <p class="help-block">{{ $errors->first('mata_pelajaran_id') }}</p> @endif
            </div>
        </div>

        <div class="form-group @if ($errors->has('judul')) has-error @endif">
            {!! Form::label('judul', 'Judul:', ['class' => 'col-md-2 control-label']) !!}
            <div class="col-md-10">
                {!! Form::text('judul', $model->judul, ['class' => 'form-control', 'placeholder' => 'Judul']) !!}
                @if ($errors->has('judul')) <p class="help-block">{{ $errors->first('judul') }}</p> @endif
            </div>
        </div>

        <div class="form-group @if ($errors->has('keterangan')) has-error @endif">
            {!! Form::label('keterangan', 'Keterangan:', ['class' => 'col-md-2 control-label']) !!}
            <div class="col-md-10">
                {!! Form::text('keterangan', $model->keterangan, ['class' => 'form-control', 'placeholder' => 'Keterangan']) !!}
                @if ($errors->has('keterangan')) <p class="help-block">{{ $errors->first('keterangan') }}</p> @endif
            </div>
        </div>

        <hr />

        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Keterangan</th>
                    <th>Jumlah jam</th>
                    <th><a href="#" id="tambah-materi"><span class="fa fa-plus"></span></a></th>
                </tr>
            </thead>
            <tbody id="materi">
                @foreach($model->materi as $m)
                <tr>
                    <td class="@if ($errors->has('materi.'.$m->id.'.judul')) has-error @endif">{!! Form::text('materi['.$m->id.'][judul]', $m->judul, ['class' => 'form-control', 'placeholder' => 'Judul Materi']) !!}</td>
                    <td class="@if ($errors->has('materi.'.$m->id.'.keterangan')) has-error @endif">{!! Form::text('materi['.$m->id.'][keterangan]', $m->keterangan, ['class' => 'form-control', 'placeholder' => 'Keterangan']) !!}</td>
                    <td class="@if ($errors->has('materi.'.$m->id.'.jumlah_jam')) has-error @endif">{!! Form::number('materi['.$m->id.'][jumlah_jam]', $m->jumlah_jam, ['class' => 'form-control', 'placeholder' => 'Jumlah Jam']) !!}</td>
                    <td><a href="#" class="hapus-materi"><span class="fa fa-trash"></span></a></td>
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
    $('#tambah-materi').click(function(e) {
        e.preventDefault();
        i++;
        var row = '<tr>' +
            '<td><input class="form-control" placeholder="Judul Materi" name="materi['+i+'][judul]" type="text"></td>' +
            '<td><input class="form-control" placeholder="Keterangan" name="materi['+i+'][keterangan]" type="text"></td>' +
            '<td><input class="form-control" placeholder="Jumlah Jam" name="materi['+i+'][jumlah_jam]" type="number"></td>' +
            '<td><a href="#" class="hapus-materi"><span class="fa fa-trash"></span></a></td>' +
        '</tr>';

        $('#materi').append(row);
    });

    $('#materi').on('click', '.hapus-materi', function(e) {
        e.preventDefault();
        $(this).parent().parent().remove();
    });

</script>

@stop
